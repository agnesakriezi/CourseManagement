<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendencs', function (Blueprint $table) {
            $table->id();
            $table->date('attendence_date');
            $table->boolean('attendence_status');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('student_id');
           
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendencs');
    }
};
