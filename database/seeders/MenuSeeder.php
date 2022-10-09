<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            // MENU ADMIN
            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'las la-home',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],

            [
                'name' => 'Data guru',
                'url' => '/operator/teachers',
                'icon' => 'las la-user-tie',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Data karyawan',
                'url' => '#',
                'icon' => 'las la-user-tie',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Data siswa',
                'url' => '/operator/students',
                'icon' => 'las la-user',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],

            [
                'name' => 'Import Data',
                'url' => '/operator/import',
                'icon' => 'las la-cloud-upload-alt',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Kelola Kelas',
                'url' => '/grade',
                'icon' => 'las la-building',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Kelola Pengguna',
                'url' => '/admin/users',
                'icon' => 'las la-users-cog',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Setting Aplikasi',
                'url' => '/admin/db_settings',
                'icon' => 'las la-tools',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Presensi',
                'url' => '/presence',
                'icon' => 'las la-fingerprint',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],
            [
                'name' => 'Inventaris',
                'url' => '/inventaris',
                'icon' => 'las la-warehouse',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '1',
            ],

            // MENU OPERATOR
            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'las la-home',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],

            [
                'name' => 'Identitas Sekolah',
                'url' => '/operator/identitas_sekolah',
                'icon' => 'las la-id-card',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],

            [
                'name' => 'Data guru',
                'url' => '/operator/teachers',
                'icon' => 'las la-user-tie',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'Data karyawan',
                'url' => '/operator/teachers',
                'icon' => 'las la-user-tie',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'Data siswa',
                'url' => '/operator/students',
                'icon' => 'las la-user',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'Siswa per kelas',
                'url' => '/siswa/kelas',
                'icon' => 'las la-building',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'Revisi data',
                'url' => '/operator/revisi_data',
                'icon' => 'las la-edit',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],
            [
                'name' => 'Pindah kelas',
                'url' => '/operator/revisi_data',
                'icon' => 'las la-exchange-alt',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '2',
            ],

            // MENU GURU

            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'las la-home',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '3',
            ],
            [
                'name' => 'Biodata',
                'url' => '/guru/biodata',
                'icon' => 'las la-id-card',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '2',
                'role_id' => '3',
            ],
            [
                'name' => 'Upload Berkas',
                'url' => '/guru/upload_dokumen',
                'icon' => 'las la-id-card',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '3',
                'role_id' => '3',
            ],
            [
                'name' => 'Jurnal Aktivitas',
                'url' => '/guru/journal',
                'icon' => 'las la-id-card',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '4',
                'role_id' => '3',
            ],

            // MENU SISWA
            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'las la-home',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '4',
            ],
            [
                'name' => 'Data Siswa',
                'url' => '/siswa/data',
                'icon' => 'las la-user',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '2',
                'role_id' => '4',
            ],
            [
                'name' => 'Revisi Data',
                'url' => '/siswa/pengajuan_revisi',
                'icon' => 'las la-edit',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '3',
                'role_id' => '4',
            ],

            [
                'name' => 'Upload Dokumen',
                'url' => '/siswa/upload_dokumen',
                'icon' => 'las la-cloud-upload-alt',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '3',
                'role_id' => '4',
            ],

            [
                'name' => 'Contact Center',
                'url' => '/siswa/contact_center',
                'icon' => 'las la-address-book',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '4',
                'role_id' => '4',
            ],
            // MENU KARYAWAN
            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'las la-home',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '5',
            ],
            //MENU KEUANGAN
            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'las la-home',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '1',
                'role_id' => '6',
            ],
            [
                'name' => 'Inventaris',
                'url' => '/inventaris',
                'icon' => 'las la-warehouse',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '2',
                'role_id' => '6',
            ],
            [
                'name' => 'Acara',
                'url' => '/admin/acara/index',
                'icon' => 'las la-warehouse',
                'icon_color' => 'text-success',
                'is_active' => '1',
                'order' => '2',
                'role_id' => '1',
            ]
        ]);
    }
}
