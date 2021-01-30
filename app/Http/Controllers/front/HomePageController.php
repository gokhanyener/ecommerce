<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomePageController extends Controller
{
    public function index()
    {
       // $categories = Category::all();
        //  return view('',$categories)
        // return view('')->with($categories);
        //$categories = Category::whereRaw('up_id is null')->get();
        $categories = Category::with('children')->get();

        return view('front.homepage',compact('categories'));
    }
}
