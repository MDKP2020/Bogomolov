<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date')->nullable();

            $table->integer('course_id');
            $table->foreign('course_id')->references('course_id')->on('course');

            $table->integer('major_id');
            $table->foreign('major_id')->references('major_id')->on('major');

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
        Schema::dropIfExists('group');
    }
}
