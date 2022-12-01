<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('Login.index');
    }

    public function postLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
            ->withSuccess('You have Successfully logged in');
        }

        return redirect("/")->withSuccess('Oops! You have entered invalid credentials');
    }

    public function logout() {
        Session::flush();

        Auth::logout();

        return redirect()->route('home');
    }
}
