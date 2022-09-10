<?php

namespace App\Http\Controllers;
use App\Models\User;


class AuthController extends Controller
{


    function showlogin(){
        return view('backview.login');
    }

    
    function loginProcess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('admin/produk')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
        }
    }

    function showregister(){
        return view('frontview.register');
    }

    function showlogin2(){
        return view('backview.login2');
    }

    function logout(){
        Auth()->logout();
        return redirect('login');
    }


   




}

