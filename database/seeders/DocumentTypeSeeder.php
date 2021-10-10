<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('document_types')->insert([
            [
                'name'=>'Kartu Keluarga (KK)',
            ],
            [
                'name'=>'Akta Kelahiran',
            ],
            [
                'name'=>'Ijazah',
            ],
            [
                'name'=>'Piagam/Sertifikat',
            ],
            [
                'name'=>'KTP',
            ],
            [
                'name'=>'NPWP',
            ],
            [
                'name'=>'Foto Resmi',
            ],
            [
                'name'=>'SK Yayasan',
            ],
        ]);
    }
}
