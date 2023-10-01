<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function coba(){
        return view('coba', ['nama' => 'Khansa'], ['alamat' => 'Surabaya']);
    }

    public function register(){
        return view('formulir');
    }

    public function registration(Request $request){
        // $file = $request->file('ktp');
        // $file->storePubliclyAs('Images', $file)
        return $request; //untuk mengambil hasil inputan
    }
}
