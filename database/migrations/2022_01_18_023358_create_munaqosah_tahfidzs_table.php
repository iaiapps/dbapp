<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunaqosahTahfidzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('munaqosah_tahfidzs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('class_id');
            $table->string('recommended_by');
            $table->integer('juz');
            $table->string('exam_status');
            $table->string('register_date')->nullable();
            $table->string('exam_date')->nullable();
            $table->integer('kelancaran')->nullable();
            $table->integer('fasohah_makhroj')->nullable();
            $table->integer('tajwid')->nullable();
            $table->string('grade')->nullable();
            $table->string('results')->nullable();
            $table->string('examiner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('munaqosah_tahfidzs');
    }
}
