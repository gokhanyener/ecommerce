<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductDetail;

class HomePageController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        //  return view('',$categories)
        // return view('')->with($categories);
        //$categories = Category::whereRaw('up_id is null')->get();
        $categories = Category::with('children')->get();

        $sliders = ProductDetail::with('product')
            ->where('slider_product', '1')
            ->orderBy('updated_at', 'DESC')
            ->take(5)
            ->get();

        $features = ProductDetail::with('product')
            ->where('featured_product', '1')
            ->orderBy('updated_at', 'DESC')
            ->take(4)
            ->get();
        $featuresTotal = ProductDetail::where('featured_product', '1')->count();

        $latest = ProductDetail::with('product')
            ->where('latest_product', '1')
            ->orderBy('updated_at', 'DESC')
            ->take(6)
            ->get();

        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product', '1')
            ->orderBy('updated_at', 'DESC')
            ->take(2)
            ->get();

//dd($features->toArray());

        return view('front.homepage',
            compact('categories', 'sliders', 'features', 'featuresTotal', 'latest', 'opportunities'));
    }
}
