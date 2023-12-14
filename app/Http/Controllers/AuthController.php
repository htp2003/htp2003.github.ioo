<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login2');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Set session data for the user
            session(['user_id' => $user->id, 'is_admin' => $user->is_admin]);

            if ($user->is_admin) {
                return redirect('/admin/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        // Authentication failed, display error message
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid credentials. Please check your email and password.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
