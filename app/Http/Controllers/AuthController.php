<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    //

    public function register(RegisterRequest $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        Auth::login($user);

        return redirect('/notes');   
    }

    public function login(LoginRequest $request)
    {

        if (Auth::attempt($request->only(['password', 'email']))) {
            session()->regenerate();
            return redirect('/notes');
        }

        $errors = new MessageBag();
        $errors->add('login_failed', 'Invalid credentials');

        return back()->withErrors($errors);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
