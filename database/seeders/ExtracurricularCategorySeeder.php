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
                'name'=>'Voly',
                'quantity'=>20,
            ],
            [
                'name'=>'Basket',
                'quantity'=>20,
            ],
            [
                'name'=>'Panahan',
                'quantity'=>20,
            ],
            [
                'name'=>'Pencak Silat',
                'quantity'=>20,
            ],
            [
                'name'=>'Taekwondo',
                'quantity'=>20,
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
                'quantity'=>20,
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
                'quantity'=>20,
            ],
            [
                'name'=>'Dokcil',
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
                'name'=>'Electon',
                'quantity'=>20,
            ],
            [
                'name'=>'Biola',
                'quantity'=>20,
            ],
            [
                'name'=>'Lainnya',
                'quantity'=>20,
            ],
        ]);
    }
}
