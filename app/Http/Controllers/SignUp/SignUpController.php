<?php

namespace App\Http\Controllers\SignUp;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Spatie\Permission\Models\Role;

class SignUpController extends Controller
{
    public function __invoke()
    {
        return view('SignUp.index');
    }

    public function store(Request $request)
    {
        $data = $request::validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'role' => 'string',
            'email_verified_at' => 'string'
        ]);

        $name = $data['first_name'] . ' ' . $data['last_name'];

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 'student',
            'email_verified_at' => Carbon::now()
        ]);

        return redirect()->route('login')->with('success', 'Succesfully signed up');
    }
}
