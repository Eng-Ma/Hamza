<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductsRequest;
use App\Http\Requests\Admin\UpdateProductsRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    function  index()
    {
        $products = Product::with('category')->orderby('id', 'desc')->paginate(10);

        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        $product = new Product();
        return view('admin.products.create', compact('product', 'categories'));
    }

    public function store(CreateProductsRequest $request)
    {
        $data = [
            'name'        => $request->name,
            'price'       => $request->price,
            'quantity'       => $request->quantity,
            'product_type' => $request->product_type,
            'content'     => $request->content,
            'category_id' => $request->category_id,
            'status'      => 'Active',
            'package_size'=>$request->package_size,
            'main_components'=>$request->main_components,
            'description'=>$request->description
        ];

        if ($request->hasFile('image')) {
            $name = Str::random(12) . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/image/products'), $name);

            $data['image'] = $name;
        }



        Product::create($data);
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add Product :  ' . $data['name']));
        }
        return redirect()
            ->route('admin.products.index')
            ->with('success', 'تم إضافة المنتج بنجاح');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(UpdateProductsRequest $request, $id)
    {

        $products = Product::select("id")->where('id', $request->id)->first();

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'quantity'       => $request->quantity,
            'category_id' => $request->category_id,
            'product_type' => $request->product_type,

            'content' => $request->content,
            'status' => $products->status ?? StatusEnum::ACTIVE, // احتفظ بالحالة الحالية
            'package_size'=>$request->package_size,
            'main_components'=>$request->main_components,
            'description'=>$request->description
        ];

        // رفع الصورة الجديدة إذا وجدت
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/products/'), $name);
            $data['image'] = $name;

            // حذف الصورة القديمة إذا موجودة
            if ($products->image && file_exists(public_path('uploads/image/products/' . $products->image))) {
                unlink(public_path('uploads/image/products/' . $products->image));
            }
        }


        Product::where('id', $request->id)->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $page = Product::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($page->image && File::exists(public_path('uploads/image/products/' . $page->image))) {
            File::delete(public_path('uploads/image/products/' . $page->image));
        }

        // حذف الصفحة
        $page->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Product::findOrFail($id);
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
