<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random_id = substr(uniqid(), 5);

        $user_1 = User::create([
            'first_name' => 'Danielle',
            'last_name' => 'Coakley',
            'email' => 'dc@gmail.com',
            'student_id' => $random_id,
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'email_verified_at' => Carbon::now()
        ]);

        $random_id_2 = substr(uniqid(), 5);

        $user_2 = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'jd@gmail.com',
            'student_id' => $random_id_2,
            'password' => bcrypt('secret'),
            'role' => 'student',
            'email_verified_at' => Carbon::now()
        ]);
    }
}
