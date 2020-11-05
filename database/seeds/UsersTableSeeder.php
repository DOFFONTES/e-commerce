<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('users')->insert(
//            [
//                'name' => 'Administrator',
//                'email' => 'admin@admin.com',
//                'email_verified_at' => now(),
//                'password' => 'sdgvdknflgbjnerlogjnaslvm@RLKJG',
//                'remember_token' => 'sgvgbbvdagbrtmnyrt',
//            ]
//        );

        factory(\App\User::class, 40)->create();
    }
}
