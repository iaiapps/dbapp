<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
        
        $table->increments('id');
        $table->integer('teacher_id')->unsigned();
        //rest of fields then...

        $table->string('jenjang_pendidikan')->nullable();
        $table->string('gelar_akademik')->nullable();
        $table->string('nama_satuan_pendidikan')->nullable();
        $table->string('fakultas')->nullable();
        // $table->string('kependidikan')->nullable();
        $table->string('tahun_masuk')->nullable();
        $table->string('tahun_lulus')->nullable();
        $table->string('nim')->nullable();

        $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
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
        Schema::dropIfExists('education');
    }
}
