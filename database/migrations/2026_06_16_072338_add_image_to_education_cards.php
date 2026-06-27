<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToEducationCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('education_cards', function (Blueprint $table) {
            $table->string('image', 255)->nullable()->after('icon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('education_cards', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
