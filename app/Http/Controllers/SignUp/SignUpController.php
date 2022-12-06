<?php

namespace App\Http\Controllers\SignUp;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;


class SignUpController extends Controller
{
    public function __invoke()
    {
        return view('SignUp.index');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $classroom = Classroom::all()->first();

        $data = $request::validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'string|unique:users,email',
            'password' => 'string',
            'role' => 'string',
            'email_verified_at' => 'string'
        ]);

        $name = $data['first_name'] . ' ' . $data['last_name'];

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'student_id' => substr(uniqid(), 5),
            'classroom_id' => $classroom->id,
            'password' => $data['password'],
            'role' => 'student',
            'email_verified_at' => Carbon::now()
        ]);

        Mail::send('emails.welcome-email', ['user' => $user], function ($message) use ($user) {
            $message->from(
                env('MAIL_FROM_ADDRESS')
            );
            $subject = env('APP_NAME') . " - Welcome to JustAttend!";

            $message->to($user->email)->subject($subject);
        });

        return redirect()->route('home')->with('success', 'Succesfully signed up');
    }
}
