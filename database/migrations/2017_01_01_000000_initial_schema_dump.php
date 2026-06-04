<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialSchemaDump extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('blog')) {
            Schema::create('blog', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->text('image');
                $table->string('date', 255);
                $table->text('slug');
                $table->text('description');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contact')) {
            Schema::create('contact', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('lastname', 255)->nullable();
                $table->string('email', 255);
                $table->text('msg');
                $table->string('mobile', 20);
                $table->string('state', 255)->nullable();
                $table->string('district', 255)->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('donate')) {
            Schema::create('donate', function (Blueprint $table) {
                $table->increments('id');
                $table->string('fast_name', 255);
                $table->string('last_name', 255);
                $table->string('email', 255);
                $table->string('mobile', 20);
                $table->text('address');
                $table->double('amount');
                $table->string('city', 255);
                $table->string('state', 255);
                $table->string('zip', 255);
                $table->integer('status')->default(0);
                $table->string('transId', 255);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('gallery')) {
            Schema::create('gallery', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('type', 50);
                $table->text('image');
                $table->text('embed')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('news')) {
            Schema::create('news', function (Blueprint $table) {
                $table->increments('id');
                $table->string('type', 255)->default('event');
                $table->string('name', 255);
                $table->text('slug')->nullable();
                $table->string('date', 255);
                $table->string('time_interval', 255);
                $table->string('city', 255);
                $table->text('image');
                $table->text('description');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('product')) {
            Schema::create('product', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->text('image');
                $table->text('description');
                $table->string('slug', 255)->default('');
                $table->integer('service');
                $table->integer('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('service')) {
            Schema::create('service', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->text('image');
                $table->text('description');
                $table->integer('status')->default(1);
                $table->string('slug', 255);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('slider')) {
            Schema::create('slider', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->text('image');
                $table->integer('status')->default(1);
                $table->text('description');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('testimonial')) {
            Schema::create('testimonial', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->text('image');
                $table->text('description');
                $table->string('type', 255)->default('Executive');
                $table->integer('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 250);
                $table->string('password', 255);
                $table->string('email', 255);
                $table->string('number', 12);
                $table->text('address');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop logic if needed
    }
}
