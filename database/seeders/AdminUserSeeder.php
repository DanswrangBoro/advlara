<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@adventurecode.com'],
            [
                'name' => 'Administrator',
                'email' => 'admin@adventurecode.com',
                'password' => Hash::make('P2ssw0rd@123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // Also create a user with username 'admin' for login
        User::updateOrCreate(
            ['email' => 'admin'],
            [
                'name' => 'Admin User',
                'email' => 'admin',
                'password' => Hash::make('P2ssw0rd@123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
    }
}
