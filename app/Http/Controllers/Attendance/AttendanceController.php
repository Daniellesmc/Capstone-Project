<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\UserAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

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

    //public function store(Request $request)
    //{
    //    $user = Auth::user();

    //    $data = $request->validate([
    //        'first_name' => 'string',
    //        'last_name' => 'string',
    //        'student_id' => 'string',
    //    ]);

    //    UserAttendance::create([...$data, 'user_id' => $user->id]);

    //   return redirect()->route('dashboard', ['user' => $user])->withSuccess('Attendance successfull logged!');
    //}

    public function store(Request $request)
    {
        //CHECK DATA
        $check = UserAttendance::where([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'student_id' => $request->student_id,

        ])->row();  
        
        if($check) {
            return redirect('/')->with('Fail', 'you are absent');
        }

        UserAttendance::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'student_id' => $request->student_id,
        ]);
    }
}

<<<<<<< HEAD
        //$already_logged_today = UserAttendance::where('user_id', $user->id)->whereDate('created_at', Carbon::today())
         //   ->exists();

        //if ($already_logged_today) {
        //    return redirect()->route('dashboard', ['user' => $user])->with('error', 'You have already logged your attendance today');
        //}

        //$data = $request->validate([
        //    'student_id' => 'string',
        //    'first_name' => 'string',
        //    'last_name' => 'string',
        //]);

        //UserAttendance::create([
        //    ...$data,
        //    'user_id' => $user->id,
        //    'student_id' => $user->id,
        //]);

        //return redirect()->route('dashboard', ['user' => $user])->withSuccess('Attendance successful logged!');
=======
        //]);

       // return redirect('/')->with('Success', 'Attendance successfull logged!');



       // $data = $request->validate([
        //    'first_name' => 'string',
        //    'last_name' => 'string',
        //    'student_id' => 'string',
        //]);

        //UserAttendance::create([...$data, 'user_id' => $user->id]);

        //return redirect()->route('dashboard', ['user' => $user])->withSuccess('Attendance successfull logged!');
>>>>>>> message
   //}
//}
    
