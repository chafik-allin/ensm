<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duration');
            $table->integer('credits');
            $table->string('language');
            $table->string('required_diploma');
            $table->string('level_validated');
            $table->longText('presentation');
            $table->longText('admission');
            $table->longText('program')->nullable();
            $table->longText('after')->nullable();
            $table->longText('contact')->nullable();
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
        Schema::dropIfExists('trainings');
    }
}
