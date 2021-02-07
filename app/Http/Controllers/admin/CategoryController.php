<?php


namespace App\Http\Controllers\admin;


class CategoryController
{

    public function index()
    {
        //******
        $data = ['urun'=>'elma'];
        return view('admin.category',$data);
    }

}
