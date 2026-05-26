<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@samcc.edu.ph'],
            [
                'name' => 'SAMCC Admin',
                'password' => Hash::make('Admin@12345'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        $this->command->info('Admin user created: admin@samcc.edu.ph / Admin@12345');
    }
}
