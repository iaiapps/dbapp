<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSettingSeeder extends Seeder
{

    public function run()
    {
     DB::table('database_settings')->insert([
        [
            'name'=>'app_name',
            'value'=>'DATABASE APP',
            'info'=>'DB'
        ],
    ]);
    }
}
