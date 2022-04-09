<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescToPresenceSettingTable extends Migration
{
    
    public function up()
    {
        Schema::table('presence_setting', function (Blueprint $table) {
            $table->string('desc')->nullable();
        });
    }

    public function down()
    {
        Schema::table('presence_setting', function (Blueprint $table) {
            //
        });
    }
}
