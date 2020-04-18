<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('teacher_id');
            $table->bigInteger('class_id')->unsigned()->index();
            $table->foreign('class_id')->references('class_id')->on('classes')->onDelete('cascade');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('position');
            $table->date('joined_date');
            $table->string('teacher_profile');

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
        Schema::dropIfExists('teachers');
    }
}