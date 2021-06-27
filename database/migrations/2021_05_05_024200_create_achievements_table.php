<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('student_id')->unsigned();
        //rest of fields then...

        $table->string('jenis_prestasi');
        $table->string('tingkat');
        $table->string('nama_prestasi');
        $table->string('tahun');
        $table->string('penyelenggara');
        $table->string('peringkat');

        $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('achievements');
    }
}
