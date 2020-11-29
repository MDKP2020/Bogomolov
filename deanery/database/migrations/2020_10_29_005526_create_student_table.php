<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreign('group_id')->references('group_id')->on('group');

            $table->date('actual_date');
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
        Schema::dropIfExists('student');
    }
}
