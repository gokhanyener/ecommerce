<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->get();

        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product', '1')
            ->take(2)
            ->get();

        return view('front.basket',compact('categories','opportunities'));
    }
}
