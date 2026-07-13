<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailsToWorkInitiativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work_initiatives', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->text('gallery_images')->nullable();
            $table->string('slug')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_initiatives', function (Blueprint $table) {
            $table->dropColumn(['description', 'gallery_images', 'slug']);
        });
    }
}
