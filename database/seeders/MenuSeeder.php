<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
  
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name'=>'Home',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            [
                'name'=>'Data sekolah',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            [
                'name'=>'Data guru',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            [
                'name'=>'Data karyawan',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            [
                'name'=>'Data siswa',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],

            [
                'name'=>'Menu Operator',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'2',
            ],

            [
                'name'=>'Menu Guru',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'3',
            ],

            [
                'name'=>'Menu Siswa',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'4',
            ],
        ]);
    }
}
