<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtracurricularDataTable extends Migration
{ 
    public function up()
    {
        Schema::create('extracurricular_data', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id');
            $table->integer('student_id');
            $table->integer('extra_id');
            $table->string('optional')->nullable();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('extracurricular_data');
    }
}
