<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' =>'bintang14562@gmail.com',
            'username' => 'bintangg',
            'role' => 'admin',
            'password' => Hash::make('123'),
        ]);
    }
}