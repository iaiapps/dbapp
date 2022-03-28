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
            'email' => 'admin@role.test',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Operator',
            'email' => 'operator@role.test',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('operator');
        
        $user = User::create([
            'name' => 'Guru',
            'email' => 'guru@role.test',
            'password' => bcrypt('password'),
            ]);
            
        $user->assignRole('guru');

        $user = User::create([
            'name' => 'Siswa',
            'email' => 'siswa@role.test',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('siswa');

        $user = User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@role.test',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('karyawan');
        
        $user = User::create([
            'name' => 'Keuangan',
            'email' => 'keuangan@role.test',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('keuangan');
    }
}
