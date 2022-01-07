<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'name'=>'Futsal',
            ],
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
                'name'=>'Pidato',
            ],
            [
                'name'=>'Robotik',
            ],
            [
                'name'=>'Tartil',
            ],
            [
                'name'=>'Story Telling',
            ],
        ]);
    }
}
