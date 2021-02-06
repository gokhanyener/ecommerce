<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(Request $request, $slug_category)
    {

        // dd($request->get('sorting'));
        //  dd($request->input('sorting'));

        //  $categories = Category::all()->take(3);
        //  $categories = Category::all();
        //  $categories = Category::whereRaw('up_id is null')->get();
        //  $categories = Category::whereNull('up_id')->get();

        $category = Category::where('slug', $slug_category)->firstOrFail();

        $categories = Category::with('children')->get();

        //dd(Product::with('categories:id,slug')->get()->toArray());
        //dd( Product::all()->toArray());
        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product', '1')
            ->take(2)
            ->get();

        $sorting = $request->get('sorting');

        if ($sorting === 'ASC') {

            $products = Category::with(['products' => function ($query) {
                $query->orderBy('id', 'ASC');
            }])
                ->where('slug', $slug_category)
                ->first();

            $products = $products->products;
            //   dd($products->products->toArray());
            //    dd($products);


        } elseif ($sorting === 'DESC') {

            $products = Category::with(['products' => function ($query) {
                $query->orderBy('id', 'DESC');
            }])
                ->where('slug', $slug_category)
                ->first();


            $products = $products->products;

        } elseif ($sorting === 'Latest') {

            $category = Category::with(['products.productDetail' => function ($query) {
                $query->where('latest_product', '1')->orderBy('id', 'DESC');
            }])
                ->where('slug', $slug_category)
                ->first();
            $products = $category->products;

        } elseif ($sorting === 'Featured') {

            $category = Category::with(['products.productDetail' => function ($query) {
                $query->where('featured_product', '1')->orderBy('id', 'DESC');
            }])
                ->where('slug', $slug_category)
                ->first();

            $products = $category->products;
           // dd($category);
           // dd($products->toArray());
         /*   $latest = ProductDetail::with('product')
                ->where('latest_product', '1')
                ->orderBy('updated_at', 'DESC')
                ->take(6)
                ->get();*/

        } else {

            $products = $category->products;
            // dd($products->toArray());
        }


        // dd($categories->toArray());
        return view('front.category', compact('categories', 'category', 'products', 'opportunities'));
    }
}
