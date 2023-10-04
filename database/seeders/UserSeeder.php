<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'arifin@gmail.com',
            'password'=>bcrypt('kepo')
        ]);

        User::create([
            'name'=>'staff',
            'email'=>'faiqganteng@gmail.com',
            'password'=>bcrypt('faiq')
        ]);
    }
}
