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
            ->where('opportunity_product', '1')
            ->take(2)
            ->get();

        return view('front.product-detail',
            compact('categories', 'product', 'opportunities'));
    }

    public function search(Request $request)
    {
        $categories = Category::with('children')->get();
        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product', '1')
            ->take(2)
            ->get();


        /*        dd($request->except('search'));
                dd($request->input('search'));
                dd($request->get('search'));
                dd($request->search);
                dd(request('search'));
                dd($request->all());*/


        $search = $request->input('search');
        $products = Product::where('title', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
     //       ->distinct()
            ->paginate(10);

        $request->flash();

        return view('front.search')
            ->with([
                'categories' => $categories,
                'products' => $products,
                'opportunities' => $opportunities
            ]);
    }


}
