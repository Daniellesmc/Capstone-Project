<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        if (Auth::check()) {
            return view('Dashboard.dashboard', [
                'user' => $user
            ]);
        }

        return redirect()->route('home')->withSuccess('Opps! You do not have access');
    }
}
