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
            ],
            [
                'name'=>'Voly',
            ],
            [
                'name'=>'Basket',
            ],
            [
                'name'=>'Panahan',
            ],
            [
                'name'=>'Pencak Silat',
            ],
            [
                'name'=>'Taekwondo',
            ],
            [
                'name'=>'Hadrah',
            ],
            [
                'name'=>'Nasyid',
            ],
            [
                'name'=>'Menyulam',
            ],
            [
                'name'=>'Merajut',
            ],
            [
                'name'=>'Cinematography',
            ],
            [
                'name'=>'Desain Grafis',
            ],
            [
                'name'=>'Craft & Kuliner',
            ],
            [
                'name'=>'Tartil',
            ],
            [
                'name'=>'Pantomim',
            ],
            [
                'name'=>'Menulis',
            ],
            [
                'name'=>'Sains',
            ],
            [
                'name'=>'Dokcil',
            ],
            [
                'name'=>'Gardening',
            ],
            [
                'name'=>'Bahasa Arab',
            ],
        ]);
    }
}
