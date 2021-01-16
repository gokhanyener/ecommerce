<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $name = 'gokhan';
        $name1 = 'Omer';
        $name2 = 'Hasan';
        $lastname = 'yener';

        $surnames =[
          'Zy','Bayram','Ekinci','Dağlar','Çalışkan'
        ];

        $users = [
            ['id'=> 1, 'username'=>'gokhan'],
            ['id'=> 2, 'username'=>'deniz'],
            ['id'=> 3, 'username'=>'burak'],
            ['id'=> 4, 'username'=>'fatih'],
            ['id'=> 5, 'username'=>'salih'],

        ];
        return view('welcome',
            compact('name', 'name1', 'name2', 'lastname','surnames','users'));
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
