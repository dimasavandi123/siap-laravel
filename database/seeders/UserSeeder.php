<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData =[
           [
            'name' =>  'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt(12345),
           ],[
            'name' =>  'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt(12345),
           ],[
            'name' =>  'super',
            'email' => 'super@gmail.com',
            'role' => 'superadmin',
            'password' => bcrypt(12345),
           ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
