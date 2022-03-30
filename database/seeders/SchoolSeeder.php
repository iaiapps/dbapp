<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{

    public function run()
    {
         $admin = School::create([
            'nama_sekolah'=>'SDIT Harapan Umat',
            'npsn'=>'20554128',
            'nss'=>'234234234',
            'alamat_sekolah'=>'Jalan danau toba Gg. Islamic Centre',
            'kode_pos'=>'68122',
            'no_telp'=>'6454222',
            'kelurahan'=>'Tegal gede',
            'kecamatan'=>'Sumbersari',
            'kota'=>'Jember',
            'provinsi'=>'Jawa Timur',
            'website'=>'sditharum.id',
            'email'=>'sditharum@gmail.com',
         ]);
    }
}
