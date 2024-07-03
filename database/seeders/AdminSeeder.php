<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'editor',
            'email' => 'editor@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole('editor');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole('user');
    }
}
