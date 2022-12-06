<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = User::where('role', 'admin')->first();

        $classroom = Classroom::create([
            'name' => 'CS-3501',
            'teacher_id' => $teacher->id
        ]);

        $user = User::all();

        foreach($user as $user) {
            $user->update([
                'classroom_id'=> $classroom->id
            ]);
        }
    }
}
