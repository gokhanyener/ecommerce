<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {

        $Ad ="fatih";
        $soyad="caliskan";
        return view('welcome',compact('Ad','soyad'));
    }

    public function show()
    {
        //----db dataları ... ---

        return view('test',['ad'=>'Buğra','soyad'=>'Kadak']);
    }

    public function update()
    {
/*        return view('kategori_guncelle',['kategori'=>'Meyve','isim'=>'armut']);*/

       /* $kategori = 'meyve';
        $isim = 'muz';
        return view('kategori_guncelle',
            compact('kategori','isim'));*/
    $data=[
        $kategori = 'meyve',
        $isim = 'muz'
            ];
        return view('kategori_guncelle')->with($data);
    }



}
