<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(Request $request)
    {


        if ($request->isMethod('post')) {

            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ]);
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'status' => '1',
                'is_admin' => '1'
            ];
            if (auth()->guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            } else {
                $errors = ['email' => 'Hatalı giriş'];
                return back()->withErrors($errors);
            }

        }

        return view('admin.auth.login');
    }


}
