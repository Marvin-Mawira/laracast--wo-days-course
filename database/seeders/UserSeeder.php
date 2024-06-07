<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $email = 'test@example.com';

        // Check if the user already exists
        if (!DB::table('users')->where('email', $email)->exists()) {
            DB::table('users')->insert([
                'name' => 'Test User',
                'email' => $email,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // replace with bcrypt or any hashing method
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
