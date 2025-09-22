<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sekretaris
        User::create([
            'name' => 'Sekretaris',
            'email' => 'sekre@example.com',
            'password' => Hash::make('password123'),
            'role' => 'sekre',
        ]);

        // Direksi
        User::create([
            'name' => 'Direksi',
            'email' => 'direksi@example.com',
            'password' => Hash::make('password123'),
            'role' => 'direksi',
        ]);

        // Sekper (superadmin)
        User::create([
            'name' => 'Sekper',
            'email' => 'sekper@example.com',
            'password' => Hash::make('password123'),
            'role' => 'sekper',
        ]);
    }
}
