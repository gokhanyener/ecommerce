<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomePageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //  return view('',$categories)
        // return view('')->with($categories);
        return view('front.homepage',compact('categories'));
    }
}
