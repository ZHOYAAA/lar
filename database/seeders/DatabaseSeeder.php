<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menambahkan role 'admin' dan 'user'
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Menambahkan akun admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'), 
        ]);
        // Assign role admin ke akun admin
        $admin->assignRole('admin');

        // Menambahkan akun user biasa
        $user1 = User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('password1')
        ]);
        $user1->assignRole('user'); // Assign role user ke user1

        $user2 = User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('password2')
        ]);
        $user2->assignRole('user'); // Assign role user ke user2
    }
}
