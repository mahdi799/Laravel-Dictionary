<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'mahdi',
                'email' => 'rezaee.mahdi482@gmail.com',
                'password' => bcrypt('5657305mahdi'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
        ];

        DB::table('users')->insert($users);
    }
}
