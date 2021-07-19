<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->integer('nipd')->nullable();
            $table->string('jk')->nullable();
            $table->integer('nisn')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->integer('nik')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('jenis_tinggal')->nullable();
            $table->string('alat_transportasi')->nullable();
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('skhun')->nullable();
            $table->string('penerima_kps')->nullable();
            $table->string('no_kps')->nullable();

            $table->string('rombel_saat_ini')->nullable();
            $table->string('no_un')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('penerima_kip')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('no_kks')->nullable();
            $table->string('no_akta')->nullable();
            $table->string('bank')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->string('layak_pip')->nullable();
            $table->string('alasan_layak_pip')->nullable();
            $table->string('kebutuhan_khusus')->nullable();
            
            $table->string('sekolah_asal')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('lingkar_kepala')->nullable();
            $table->string('jumlah_saudara_kandung')->nullable();
            $table->string('jarak_rumah_ke_sekolah')->nullable();

            $table->string('nama_ayah')->nullable();
            $table->string('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nik_ayah')->nullable();

            $table->string('nama_ibu')->nullable();
            $table->string('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
           
            $table->string('nama_wali')->nullable();
            $table->string('tanggal_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('nik_wali')->nullable();

            $table->string('hp_ayah')->nullable();
            $table->string('hp_ibu')->nullable();
            $table->string('hp_wali')->nullable();
           
            
            $table->string('grade_id')->nullable();

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
        Schema::dropIfExists('students');
    }
}
