<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresenceSettingSeeder extends Seeder
{
    public function run()
    {
        DB::table('presence_setting')->insert([
            // [
            //     'name' => 'ontime_until',
            //     'value' => '07:31',
            // ],
            // [
            //     'name' => 'early_time_come',
            //     'value' => '06:30',
            // ],
            // [
            //     'name' => 'end_time_come',
            //     'value' => '09:00',
            // ],
            // [
            //     'name' => 'early_time_leave',
            //     'value' => '14:00',
            // ],
            // [
            //     'name' => 'end_time_leave',
            //     'value' => '16:30',
            // ],
            // [
            //     'name' => 'timeline',
            //     'value' => true,
            // ],
            
            [
                'name' => 'qrcode',
                'value' => time(),
                'desc' => 'gedung1',
            ],
            [
                'name' => 'qrcode',
                'value' => time(),
                'desc' => 'gedung2',
            ],
            [
                'name' => 'qrcode',
                'value' => time(),
                'desc' => 'gedung3',
            ],
            [
                'name' => 'qrcode',
                'value' => time(),
                'desc' => 'gedung4',
            ],

        ]);
    }
}
