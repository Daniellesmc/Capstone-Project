<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StudentAttendanceController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        // $attendances = UserAttendance::all();

        $attendances = UserAttendance::with('students');

        Log::info(json_encode($attendances));

        if ($user->role === 'student') {
            return redirect()->route('dashboard');
        }

        return view('Attedance.Teacher.student-attendance', [
            'user' => $user,
            'user_attendances' => $attendances
        ]);
    }
}
