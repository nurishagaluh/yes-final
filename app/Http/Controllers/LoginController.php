<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            $request->flash('error', 'Please check your email and Password');
            return redirect()->route('login.index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('blog.index');
    }
}
