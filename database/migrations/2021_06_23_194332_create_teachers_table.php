<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama');
            $table->string('nik');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nama_ibu');
            $table->string('no_hp');
            $table->string('email');
            
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('agama')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_wajib_pajak')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('nip_pasangan')->nullable();
            $table->string('pekerjaan_pasangan')->nullable();
            
            $table->string('role_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
