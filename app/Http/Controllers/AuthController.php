<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;


class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login'); // Ganti dengan nama tampilan halaman login yang sesuai
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user) {
                if ($user->hasRole('user')) {
                    return redirect()->route('show.form'); // Redirect user to registration form
                } elseif ($user->hasRole(['admin', 'owner'])) {
                    return redirect()->route('home'); // Redirect admin/owner to home
                }
            }
        }
    
        return redirect()->route('login')->with('error', 'Invalid login credentials');
    }

    public function showRegister()
    {
        return view('auth.register'); // Ganti dengan nama tampilan halaman registrasi yang sesuai
    }

    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        // Buat user baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        // Berikan role "user" pada user baru
        $user->assignRole('user');
    
        // Redirect ke halaman login dengan pesan sukses
        return redirect('login')->with('success', 'Account registered successfully!');
    }


    public function showForm(){
        return view('auth.form');
    }
    
}
