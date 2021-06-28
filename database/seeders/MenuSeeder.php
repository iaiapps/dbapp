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
            [
                'name'=>'User Management',
                'url'=>'/admin/users',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'1',
            ],
            [
                'name'=>'Setting Database',
                'url'=>'/admin/db_settings',
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
                'name'=>'Data Identitas Sekolah',
                'url'=>'/operator/identitas_sekolah',
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
                'name'=>'Data guru',
                'url'=>'/operator/teachers',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'2',
            ],
            [
                'name'=>'Data karyawan',
                'url'=>'/operator/teachers',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'2',
            ],
            [
                'name'=>'Revisi data',
                'url'=>'/operator/revisi_data',
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
                'name'=>'Revisi Data',
                'url'=>'/siswa/pengajuan_revisi',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'3',
                'role_id'=>'4',
            ],
            [
                'name'=>'Jadwal Pelajaran',
                'url'=>'#',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'3',
                'role_id'=>'4',
            ],
            [
                'name'=>'Contact Center',
                'url'=>'/siswa/contact_center',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'4',
                'role_id'=>'4',
            ],
            // MENU KARYAWAN
            [
                'name'=>'Home',
                'url'=>'/',
                'icon'=>'las la-home',
                'icon_color'=>'text-success',
                'is_active'=>'1',
                'order'=>'1',
                'role_id'=>'5',
            ],
        ]);
    }
}
