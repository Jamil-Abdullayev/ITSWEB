<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('others.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::find(1); // Replace $user_id with the user's ID you want to give the role to

            return redirect('/dashboard');
        }

        return back()->withErrors(['message' => 'Wrong login details!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        // Ваша логика регистрации здесь
    }
}
