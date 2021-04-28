<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   
    public function run()
    {
         $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Operator',
            'email' => 'operator@operator.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('operator');

        $user = User::create([
            'name' => 'Guru',
            'email' => 'guru@guru.id',
            'password' => bcrypt('12345678'),
        ]);

        $user = User::create([
            'name' => 'Siswa',
            'email' => 'siswa@siswa.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('siswa');
    }
}
