<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->id();
            $table->string('graduate_id')->nullable();
            $table->string('names')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('cause')->nullable();
            $table->string('level_of_drugs')->nullable();
            $table->integer('districts_id')->unsigned();
            $table->integer('sectors_id')->unsigned();
            $table->integer('villages_id')->unsigned();
            $table->integer('cells_id')->unsigned();
            $table->date('entry_time')->nullable();
            $table->date('release_time')->nullable();
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
        Schema::dropIfExists('graduates');
    }
}
