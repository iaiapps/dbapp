<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularCategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('extracurricular_categories')->insert([
            [
                'name'=>'Badminton',
                'quantity'=>20,
            ],
            [
                'name'=>'Basket',
                'quantity'=>40,
            ],
            [
                'name'=>'Panahan',
                'quantity'=>40,
            ],
            [
                'name'=>'Pencak Silat',
                'quantity'=>40,
            ],
            [
                'name'=>'Taekwondo',
                'quantity'=>40,
            ],
            [
                'name'=>'Hadrah',
                'quantity'=>20,
            ],
            [
                'name'=>'Nasyid',
                'quantity'=>20,
            ],
            [
                'name'=>'Menyulam',
                'quantity'=>20,
            ],
            [
                'name'=>'Merajut',
                'quantity'=>20,
            ],
            [
                'name'=>'Cinematography',
                'quantity'=>20,
            ],
            [
                'name'=>'Desain Grafis',
                'quantity'=>20,
            ],
            [
                'name'=>'Craft & Kuliner',
                'quantity'=>40,
            ],
            [
                'name'=>'Tartil',
                'quantity'=>20,
            ],
            [
                'name'=>'Pantomim',
                'quantity'=>20,
            ],
            [
                'name'=>'Menulis',
                'quantity'=>20,
            ],
            [
                'name'=>'Sains',
                'quantity'=>40,
            ],
            [
                'name'=>'Dokter Kecil',
                'quantity'=>20,
            ],
            [
                'name'=>'Kaligrafi',
                'quantity'=>20,
            ],
            [
                'name'=>'Gardening',
                'quantity'=>20,
            ],
            [
                'name'=>'Bahasa Arab',
                'quantity'=>20,
            ],
            [
                'name'=>'Musik Electone',
                'quantity'=>20,
            ],
            [
                'name'=>'Futsal',
                'quantity'=>20,
            ],
            [
                'name'=>'Lainnya',
                'quantity'=>1000,
            ],
        ]);
    }
}
