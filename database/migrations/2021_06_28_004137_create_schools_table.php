<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('npsn');
            $table->string('nss');
            $table->string('alamat_sekolah');
            $table->string('kode_pos');
            $table->string('no_telp');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('website');
            $table->string('email');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
