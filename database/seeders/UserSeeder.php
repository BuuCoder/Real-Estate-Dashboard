<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $roles = Role::pluck('id', 'code');
        User::insert([
            [
                'full_name' => 'Root Admin',
                'email' => 'root@admin.com',
                'password' => Hash::make('password'),
                'role_id' => $roles['ROOT_ADMIN'] ?? 1,
            ],
            [
                'full_name' => 'Manager User',
                'email' => 'manager@admin.com',
                'password' => Hash::make('password'),
                'role_id' => $roles['MANAGER'] ?? 2,
            ],
            [
                'full_name' => 'Member User',
                'email' => 'member@admin.com',
                'password' => Hash::make('password'),
                'role_id' => $roles['MEMBER'] ?? 3,
            ],
        ]);
    }
}
