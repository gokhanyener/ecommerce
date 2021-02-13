<?php

namespace App\Http\Controllers;

use App\Mail\AdminInfoMail;
use App\Mail\UserRegisterMail;
use App\Models\Category;
use App\Models\ProductDetail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

            $this->validate(request(), [
                'firstName' => 'required|min:3|max:50',
                'lastName' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6|max:20'
            ]);

            $user = User::create([
                'name' => Str::of($request->firstName . ' ' . $request->lastName)->title()->trim(),
                //  'email' => Str::of($request->email)->trim(),
                'phone' => $request->phone,
                'email' => trim($request->email),
                'password' => Hash::make($request->password),
                'activation_code' => Str::random(50),
                'status' => '0'
            ]);


            Mail::to($request->email)->send(new UserRegisterMail($user));
            Mail::to($request->email)->send(new AdminInfoMail($user));

            // auth()->login($user);

            return redirect()->route('homepage');
        }

        return view('front.auth.register')->with($data);
    }

    public function categoriesAndOpportunity(): array
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

    public function registerConfirm($activation_code): RedirectResponse
    {
        $user = User::where('activation_code', $activation_code)->firstOrFail();

        $user->update([
            'activation_code' => null,
            'status' => '1'
        ]);

        auth()->login($user);

        return redirect()->route('homepage');
    }

    public function login(Request $request)
    {

        $data = $this->categoriesAndOpportunity();

        if ($request->isMethod('post')) {

            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ]);
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'status' => '1'
            ];
            if (auth()->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            } else {
                $errors = ['email' => 'Hatalı giriş'];
                return back()->withErrors($errors);
            }

        }

        return view('front.auth.login')->with($data);
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('homepage');
    }
}
