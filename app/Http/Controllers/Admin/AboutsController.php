<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAboutRequest;
use App\Http\Requests\Admin\UpdateAboutRequest;
use App\Models\About;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AboutsController extends Controller
{
    function  index()
    {
        $abouts = About::orderby('id', 'desc')->paginate(10);

        return view('Admin.About.index', compact('abouts'));
    }
    public function create()
    {
        $about = new About();
        return view('Admin.About.create', compact('about'));
    }

    public function store(CreateAboutRequest $request)
    {
        $data = [
            'text'     => $request->text,
            'content'     => $request->content,
            'status'         => 'Active',
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $name = Str::random(12) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/abouts/'), $name);

            $data['image'] = $name; // فقط اسم الملف
        }


        About::create($data);
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add About :  ' . $data['text']));
        }
        return redirect()->route('admin.abouts.index')->with('success', 'تم إضافة  بنجاح');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('Admin.About.edit', compact('about'));
    }

    public function update(UpdateAboutRequest $request, $id)
    {


        $about = About::select("id")->where('id', $request->id)->first();

        $data = [
             'text'     => $request->text,
            'content'     => $request->content,
            'status'         => 'Active',
        ];

        // رفع الصورة الجديدة إذا وجدت
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/abouts/'), $name);
            $data['image'] = $name;

            // حذف الصورة القديمة إذا موجودة
            if ($about->image && file_exists(public_path('uploads/image/abouts/' . $about->image))) {
                unlink(public_path('uploads/image/abouts/' . $about->image));
            }
        }


        About::where('id', $request->id)->update($data);

        return redirect()->route('admin.abouts.index')->with('success', 'About updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $about = About::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($about->image && File::exists(public_path('uploads/image/abouts/' . $about->image))) {
            File::delete(public_path('uploads/image/abouts/' . $about->image));
        }
        // حذف الصفحة
        $about->delete();

        return redirect()
            ->route('admin.abouts.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = About::findOrFail($id);
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
