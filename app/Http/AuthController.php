<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login'); // Ganti dengan nama tampilan halaman login yang sesuai
    }

    public function postLogin(Request $request)
    {

    }

    public function showRegister()
    {
        return view('auth.register'); // Ganti dengan nama tampilan halaman registrasi yang sesuai
    }

    public function postRegister(Request $request)
    {
        
    }
}
