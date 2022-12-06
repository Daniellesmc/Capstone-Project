<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\UserAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class CalendarController extends Controller
{
    public function __invoke()
    {

        $user = Auth::user();

        $start = (empty($_GET["start"])) ? ($_GET["start"]) : ('');
        $end = (empty($_GET["end"])) ? ($_GET["end"]) : ('');

        $data = DB::table('user_attendance')
            ->where('student_id', Auth::user()->id)
            ->select(
                DB::raw("CONCAT(user_attendance.first_name, ' ', user_attendance.last_name, ' - PRESENT') as title"),
                'user_attendance.created_at as start',
                'user_attendance.created_at as end',
            )
            ->get();

        if ($user->role === 'admin') {
            $data = DB::table('user_attendance')
                ->select(
                    DB::raw("CONCAT(user_attendance.first_name, ' ', user_attendance.last_name, ' - PRESENT') as title"),
                    'user_attendance.created_at as start',
                    'user_attendance.created_at as end',
                )
                ->get();
        }

        return Response::json($data);
    }
}
