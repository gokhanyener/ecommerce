<?php


namespace App\Http\Controllers;



class IndexController extends Controller
{
    public function index()
    {
        return 'Merhaba';
    }

    public function show()
    {
       // return view('welcome');

        return view('test', ["ad"=>"Semih", "soyad"=>"Çalışkan"]);
    }
}
