<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false)->after('address');
        });

        // Set existing admin users to is_admin = 1
        // Targets the seeder-created admin and any user with 'admin' in their email
        DB::table('users')
            ->where('email', 'newadmin@redbrigade.org')
            ->orWhere('email', 'admin@local.test')
            ->orWhere('email', 'LIKE', '%admin%')
            ->update(['is_admin' => true]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
        });
    }
}
