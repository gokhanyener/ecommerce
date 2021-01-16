<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $name = 'deniz';
        $name1 = 'omer';
        $name2 = 'hasan';
        $lastname = 'ekinci';

        return view('welcome', compact('name', 'name1', 'name2', 'lastname'));
    }

    public function show()
    {
        //----db dataları ... ---

        return view('test', ['ad' => 'Buğra', 'soyad' => 'Kadak']);
    }

    public function update()
    {
        //*******************
        /*    return view('kategori-guncelle',
                [
                    'kategori' => 'Meyve',
                    'isim' => 'Elma'
                ]);*/
//--------------------------------------------------------------

        /*        $kategori = 'meyve';
                $isim =Muz';
        /*
                return view('kategori-guncelle',
                    compact('kategori','isim'));*/

        //-------------------------------------------------------
        $data = [
            'kategori' => 'Meyve',
            'isim' => 'Portakal'
        ];
        return view('kategori-guncelle')->with($data);

    }

}
