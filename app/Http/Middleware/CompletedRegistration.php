<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CompletedRegistration
{
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
}

