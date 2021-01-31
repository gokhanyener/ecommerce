<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug_product)
    {


        $categories = Category::with('children')->get();

        // $product = Product::where('slug',$slug_product)->firstOrFail();
        $product = Product::whereSlug($slug_product)->firstOrFail();

        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product','1')
            ->take(2)
            ->get();

        return view('front.product-detail',
            compact('categories','product','opportunities'));
    }


}
