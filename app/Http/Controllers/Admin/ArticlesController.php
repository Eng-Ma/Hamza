<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateArticlesRequest;
use App\Http\Requests\Admin\UpdateArticlesRequest;
use App\Models\Article;
use App\Models\Page;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    function  index()
    {
        $articles = Article::orderby('id', 'desc')->paginate(10);

        return view('Admin.Articles.index', compact('articles'));
    }
    public function create()
    {
        $article = new Article();
        return view('Admin.Articles.create', compact('article'));
    }

    public function store(CreateArticlesRequest $request)
{
    $data = [
        'name' => $request->name,
        'date' => $request->date,
        'status' => 'Active',
        'description'=>$request->description,
        'content' => json_encode($request->input('content', [])),
        'headers' => json_encode($request->input('header', [])),
    ];

    // رفع الصورة إذا تم اختيارها
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $file = $request->file('image');
        $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/image/articles/'), $name);
        $data['image'] = $name;
    }


    Article::create($data);

    return redirect()->route('admin.articles.index')->with('success', 'تم إضافة المقال بنجاح');
}

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.Articles.edit', compact('article'));
    }

    public function update(UpdateArticlesRequest $request, $id)
    {
        $article = Article::findOrFail($id);

        // جمع الحقول الأساسية
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'status' => 'Active',
            'description'=>$request->description,
            'content' => json_encode($request->input('content', [])),
            'headers' => json_encode($request->input('header', [])),
        ];

        // رفع الصورة إذا تم اختيارها
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/articles/'), $name);
            $data['image'] = $name;
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'تم تعديل المقال بنجاح');
    }


    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($article->image && File::exists(public_path('uploads/image/articles/' . $article->image))) {
            File::delete(public_path('uploads/image/articles/' . $article->image));
        }

        // حذف الصفحة
        $article->delete();

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Article::findOrFail($id);
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
