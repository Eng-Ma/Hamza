<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Angele;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::latest()->take(3)->get();
        $contact = Contact::latest()->take(1)->get();
        $angeles = Angele::latest()->take(4)->get();
        $articles = Article::latest()->take(2)->get();
        $abouts = About::take(1)->get();
        $products_face = Product::where('product_type', 'face')->take(1)->get();
        $products_body = Product::where('product_type', 'body')->take(1)->get();
        $products = Product::latest()->take(3)->get();
        return view('web.index', compact('products', 'articles', 'abouts', 'angeles', 'category', 'products_face', 'products_body', 'contact'));
    }

    public function shop()
    {
        $products = Product::all();

        // جلب المنتجات حسب النوع
        $products_face = Product::where('product_type', 'face')->get();
        $products_body = Product::where('product_type', 'body')->get();
        return view('web.shop', compact('products', 'products_face', 'products_body'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // جلب المنتج من قاعدة البيانات
        $products = Product::latest()->take(3)->get();
        return view('web.product_detailes', compact('product', 'products'));
    }


    public function about()
    {
        $contact = Contact::latest()->take(1)->get();
        $abouts = About::latest()->take(4)->get();
        $firstAbout  = $abouts->get(0);
        $secondAbout = $abouts->get(1);
        $threeAbout = $abouts->get(2);
        $fourAbout = $abouts->get(3);


        return view('web.about', compact('abouts', 'firstAbout', 'secondAbout', 'threeAbout', 'fourAbout', 'contact'));
    }

    public function product_detailes()
    {
        $product = Product::all();
        return view('web.product_detailes', compact('product'));
    }


    public function articles()
    {
        $articles = Article::all();
        return view('web.articles', compact('articles'));
    }
   public function readMore_id($id)
{
    $article = Article::findOrFail($id);

    // فك JSON
    $headers = json_decode($article->headers, true) ?? [];
    $contents = json_decode($article->content, true) ?? [];
    $texts_descriptions = json_decode($article->texts_descriptions, true) ?? [];

    return view('web.introduction', compact(
        'article',
        'headers',
        'contents',
        'texts_descriptions'
    ));
}


    public function contact()
    {
        $contact = Contact::first();;

        return view('web.contact', compact('contact'));
    }

    function faqs()
    {
        return view('web.faqs');
    }
}
