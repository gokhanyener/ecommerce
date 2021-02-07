<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $data = $this->categoriesAndOpportunity();
        //  $categories = $data['categories'];
        //   $opportunities = $data['opportunities'];
        //   return view('front.auth.register', compact('categories', 'opportunities'));

        if ($request->isMethod('post')) {


            $user = User::create([
                'name' =>   Str::of($request->firstName . ' ' . $request->lastName)->title()->trim(),
              //  'email' => Str::of($request->email)->trim(),
                'phone' => $request->phone,
                'email' => trim($request->email),
                'password' => Hash::make($request->password),
                'activation_code' => Str::random(50),
                'status'=> 1
            ]);

            auth()->login($user);

            return redirect()->route('homepage');
        }

        return view('front.auth.register')->with($data);
    }

    public function categoriesAndOpportunity()
    {

        $opportunities = ProductDetail::with('product')
            ->where('opportunity_product', '1')
            ->take(2)
            ->get();
        $categories = Category::with('children')->get();

        return [
            'opportunities' => $opportunities,
            'categories' => $categories
        ];
    }
}
