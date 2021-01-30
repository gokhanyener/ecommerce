<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $products = $category->products;

        $categories = Category::with('children')->get();


        return view('front.category', compact('categories','category', 'products'));
    }
}
