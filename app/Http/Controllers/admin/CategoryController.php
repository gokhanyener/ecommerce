<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController  extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {

        $list = Category::paginate(5);

        return view('admin.category',compact('list'));
    }

}
