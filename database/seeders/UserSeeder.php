<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'alamat' => 'Jakarta',
                'telepon' => '08000000000',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'User',
                'alamat' => 'Jakarta',
                'telepon' => '08888888888',
                'email' => 'user@user.com',
                'password' => bcrypt('user'),
                'role' => 'user',
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
