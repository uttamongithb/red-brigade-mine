<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkInitiativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_initiatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('tagline')->nullable();
            $table->string('collaboration')->nullable();
            $table->string('image');
            $table->string('category'); // e.g. sexual_violence, economic_upliftment
            $table->string('type');     // e.g. ongoing, previous, upcoming
            $table->integer('status')->default(1);
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
        Schema::drop('work_initiatives');
    }
}
