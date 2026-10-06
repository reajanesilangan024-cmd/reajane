<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => 'admin123',
                'role' => 'administrator',
            ],
            [
                'name' => 'Staff User',
                'email' => 'staff@example.com',
                'password' => 'staff123',
                'role' => 'staff',
            ],
            [
                'name' => 'Customer User',
                'email' => 'customer@example.com',
                'password' => 'customer123',
                'role' => 'customer',
            ],
        ];

        foreach ($users as $data) {
            $user = User::where('email', $data['email'])->first();

            if (!$user) {
                $user = new User();
            }

            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->role = $data['role'];
            $user->save();
        }
    }
}