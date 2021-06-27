<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('teacher_id')->unsigned();
        //rest of fields then...

        $table->string('jenis_diklat');
        $table->string('nama_diklat');
        $table->string('penyelenggara');
        $table->string('tahun');
        $table->string('peran');

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
        Schema::dropIfExists('trainings');
    }
}
