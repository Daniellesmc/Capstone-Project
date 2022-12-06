<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\UserAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        $user_attendances = UserAttendance::where('user_id', $user->id)
            ->get();

        return view('Attedance.my-attendance', [
            'user' => $user,
            'user_attendances' => $user_attendances
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'student_id' => 'string',
        ]);

        UserAttendance::create([...$data, 'user_id' => $user->id]);

       return redirect()->route('dashboard', ['user' => $user])->withSuccess('Attendance successfull logged!');

        $already_logged_today = UserAttendance::where('user_id', $user->id)->whereDate('created_at', Carbon::today())
            ->exists();

        if ($already_logged_today) {
            return redirect()->route('dashboard', ['user' => $user])->with('error', 'You have already logged your attendance today');
        }


       UserAttendance::create([
            ...$data,
            'user_id' => $user->id,
            'student_id' => $user->id,
        ]);

        return redirect()->route('dashboard', ['user' => $user])->withSuccess('Attendance successful logged!');

        $data = $request->validate([
            'student_id' => 'string',
            'first_name' => 'string',
            'last_name' => 'string',

        ]);


        return redirect('/')->with('Success', 'Attendance successfull logged!');



        $data = $request->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'student_id' => 'string',
        ]);

        UserAttendance::create([...$data, 'user_id' => $user->id]);

        return redirect()->route('dashboard', ['user' => $user])->withSuccess('Attendance successfull logged!');

   }
}

