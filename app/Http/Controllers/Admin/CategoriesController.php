<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;
use App\Models\Category;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    function  index()
    {
        $categories = Category::orderby('id', 'desc')->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        $category = new Category();
        return view('admin.categories.create', compact('category'));
    }

    public function store(CreateCategoriesRequest $request)
    {
        $data = [
            'name' => $request->name,
            'content' => $request->content,
            'status'         => 'Active',
        ];

        if ($request->hasFile('image')) {
            $name = Str::random(12) . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/image/categories'), $name);

            $data['image'] = $name;
        }

        Category::create($data);
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add Category :  ' . $data['name']));
        }
        return redirect()->route('admin.categories.index')->with('success', 'تم إضافة  بنجاح');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateCategoriesRequest $request, $id)
    {

        $page = Category::select("id")->where('id', $request->id)->first();

        $data = [
            'name' => $request->name,
            'content' => $request->content,
            'status' => $page->status ?? StatusEnum::ACTIVE, // احتفظ بالحالة الحالية
        ];

        // رفع الصورة الجديدة إذا وجدت
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/categories'), $name);
            $data['image'] = $name;

            // حذف الصورة القديمة إذا موجودة
            if ($page->image && file_exists(public_path('uploads/image/categories' . $page->image))) {
                unlink(public_path('uploads/image/categories' . $page->image));
            }
        }


        Category::where('id', $request->id)->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $page = Category::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($page->image && File::exists(public_path('uploads/image/categories/' . $page->image))) {
            File::delete(public_path('uploads/image/categories/' . $page->image));
        }

        // حذف الصفحة
        $page->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Category::findOrFail($id);
        if ($team->status) {
            $team->update([
                'status' => $team->status == StatusEnum::ACTIVE ? StatusEnum::INACTIVE : StatusEnum::ACTIVE,
            ]);
        } else {
            $team->update([
                'status' => StatusEnum::ACTIVE,
            ]);
        }
        session()->flash('success', __('The data has been updated successfully'));
        return back();
    }
}
