<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'users',
                'email'=>'sayausers@gmail.com',
                'role'=>'users',
                'password'=> bcrypt('12345678'),
            ],

            [
                'name'=>'admin',
                'email'=>'sayaadmin@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('12345678'),
            ],

            [
                'name'=>'developer',
                'email'=>'sayadeveloper@gmail.com',
                'role'=>'developer',
                'password'=> bcrypt('12345678'),
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
