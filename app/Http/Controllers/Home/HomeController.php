<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        if (Auth::check()) {
            return redirect()->route('dashboard', [
                'user' => $user
            ])->withSuccess('Opps! You do not have access');
        }

        return view('Login.index');
    }
}
