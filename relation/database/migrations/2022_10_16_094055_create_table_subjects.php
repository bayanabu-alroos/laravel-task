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
        Schema::create('subjects', function(Blueprint $table)
        {
            
            $table->integer('module');
            $table->integer('student_id');
            $table->foreign('student_id')->unsigned()->references('id')->on('students')->onDelete('cascade');
            $table->text('subject_name');
            $table->primary(array('module','student_id'));
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
        Schema::dropIfExists('table_subjects');
    }
};
