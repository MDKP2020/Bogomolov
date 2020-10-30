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
            $table->string('name');
            $table->date('dateOfStartLearning');
            $table->date('dateOfEndLearning');

            //создание поля для связывания с таблицей group
            $table->integer('group_id')->unsigned()->default(1);
            //создание внешнего ключа для поля 'group_id', который связан с полем id таблицы 'group'
            $table->foreign('group_id')->references('id')->on('group');

            //создание поля для связывания с таблицей faculty
            $table->integer('faculty_id')->unsigned()->default(1);
            //создание внешнего ключа для поля 'faculty_id', который связан с полем id таблицы 'faculty'
            $table->foreign('faculty_id')->references('id')->on('faculty');

            //создание поля для связывания с таблицей course
            $table->integer('course_id')->unsigned()->default(1);
            //создание внешнего ключа для поля 'course_id', который связан с полем id таблицы 'course'
            $table->foreign('course_id')->references('id')->on('course');

            //создание поля для связывания с таблицей major
            $table->integer('major_id')->unsigned()->default(1);
            //создание внешнего ключа для поля 'major_id', который связан с полем id таблицы 'major'
            $table->foreign('major_id')->references('id')->on('major');

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
