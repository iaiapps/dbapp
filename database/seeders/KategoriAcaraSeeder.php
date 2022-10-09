<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriAcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_acara')->insert([
            [
                'nama_kategori' => 'Rapat pekanan'
            ],
            [
                'nama_kategori' => 'English Club'
            ],
            [
                'nama_kategori' => 'Arabic Club'
            ],
            [
                'nama_kategori' => 'Family Day'
            ],
            [
                'nama_kategori' => 'Muharam'
            ],
        ]);
    }
}
