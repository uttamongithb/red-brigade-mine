<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationAndSkillsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('icon', 100);
            $table->text('description');
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        Schema::create('skills_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('icon', 100);
            $table->text('description');
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
        Schema::drop('education_cards');
        Schema::drop('skills_cards');
    }
}
