<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  [
            [
                'name'  => 'Admin',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'is_admin' => 2,
                'created_at' => now(),
            ],
            [
                'name'  => 'Lenny Magdalena',
                'email' => 'superadmin@example.com',
                'username' => 'superadmin',
                'is_admin' => 1,
                'password' => Hash::make('password'),
                'created_at' => now(),
            ],
        ];
        User::insert($data);
    }
}
