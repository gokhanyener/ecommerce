<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Request;

class CategoryController extends Controller
{
    public function index($slug_category)
    {

        //  $categories = Category::all()->take(3);
        //  $categories = Category::all();
        //  $categories = Category::whereRaw('up_id is null')->get();
        //  $categories = Category::whereNull('up_id')->get();

        $category = Category::where('slug', $slug_category)->firstOrFail();

        $categories = Category::with('children')->get();

    //dd(Product::with('categories:id,slug')->get()->toArray());
      //dd( Product::all()->toArray());
        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product','1')
            ->take(2)
            ->get();
        $products = $category->products;

      //  dd($categories->toArray());
        return view('front.category', compact('categories', 'category', 'products','opportunities'));
    }
}
