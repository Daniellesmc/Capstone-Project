<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Danielle',
            'last_name' => 'Coakley',
            'email' => 'dc@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'email_verified_at' => Carbon::now()
        ]);
    }
}
