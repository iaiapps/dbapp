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
        [
            'name'=>'cc_humas',
            'value'=>'6287870783030',
            'info'=>'Call Center Humas',
        ],
        [
            'name'=>'cc_keuangan',
            'value'=>'6285746507030',
            'info'=>'Call Center Keuangan',
        ],
        [
            'name'=>'cc_admin',
            'value'=>'6285232213939',
            'info'=>'Call Center Admin',
        ],
    ]);
    }
}
