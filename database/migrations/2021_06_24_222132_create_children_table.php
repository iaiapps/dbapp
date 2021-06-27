<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('teacher_id')->unsigned();
        //rest of fields then...

        $table->string('nama');
        $table->string('status');
        $table->string('jenjang_pendidikan');
        $table->string('nisn');
        $table->string('jk');
        $table->string('tempat_lahir');
        $table->string('tanggal_lahir');
        $table->string('tahun_masuk');
        
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
        Schema::dropIfExists('children');
    }
}
