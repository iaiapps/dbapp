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
                'url'=>'/',
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
                'url'=>'/operator/teachers',
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
                'url'=>'/operator/students',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            [
                'name'=>'Import Data',
                'url'=>'/operator/import',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            // MENU OPERATOR
            [
                'name'=>'Home',
                'url'=>'/',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'2',
            ],
            
            [
                'name'=>'Data siswa',
                'url'=>'/operator/students',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'2',
            ],

            [
                'name'=>'Home',
                'url'=>'/',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'3',
            ],
            [
                'name'=>'Biodata',
                'url'=>'/guru/biodata',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'2',
                'role_id'=>'3',
            ],

            // MENU SISWA
            [
                'name'=>'Home',
                'url'=>'/',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'4',
            ],
            [
                'name'=>'Data Siswa',
                'url'=>'/siswa/data',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'2',
                'role_id'=>'4',
            ],
            [
                'name'=>'Pengajuan Revisi',
                'url'=>'/siswa/pengajuan_revisi',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'3',
                'role_id'=>'4',
            ],
        ]);
    }
}
