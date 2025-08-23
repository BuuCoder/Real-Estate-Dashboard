<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Quản trị hệ thống',
                'code' => 'ROOT_ADMIN',
                'description' => 'Quyền cao nhất',
            ],
            [
                'name' => 'Quản lý',
                'code' => 'MANAGER',
                'description' => 'Quản lý chung',
            ],
            [
                'name' => 'Thành viên',
                'code' => 'MEMBER',
                'description' => 'Người dùng thông thường',
            ],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['code' => $role['code']],
                $role
            );
        }
    }
}
