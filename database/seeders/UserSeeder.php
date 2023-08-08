<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat dan memberikan role "owner" pada 5 pengguna
        $ownerRole = Role::findByName('owner');
        for ($i = 1; $i <= 5; $i++) {
            $owner = User::create([
                'name' => "Owner User $i",
                'email' => "owner$i@example.com",
                'password' => Hash::make('password'),
            ]);
            $owner->assignRole($ownerRole);
        }

        // Membuat dan memberikan role "admin" pada 5 pengguna
        $adminRole = Role::findByName('admin');
        for ($i = 1; $i <= 5; $i++) {
            $admin = User::create([
                'name' => "Admin User $i",
                'email' => "admin$i@example.com",
                'password' => Hash::make('password'),
            ]);
            $admin->assignRole($adminRole);
        }
    }
}
