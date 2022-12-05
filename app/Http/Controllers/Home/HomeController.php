<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Notification;
use App\Notifications\SendEmailNotification;

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

    public function sendnotification()
    {
        $user = User::all();

        $details = [

            'greeting' => 'Hi Laravel user', 

            'body' => 'This is the email body',

            'actiontext' => 'Subscribe to this channel',

            'actionurl' => '/',

            'lastline' => 'This is the last line',
        ];

        Notification::send($user, new SendEMailNotification($details));

        dd('done');
}
}