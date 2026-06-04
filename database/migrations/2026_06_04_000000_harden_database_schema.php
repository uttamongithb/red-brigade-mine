<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HardenDatabaseSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 1. Fix 'news' table (Our Work / Events)
        if (Schema::hasTable('news')) {
            Schema::table('news', function (Blueprint $table) {
                // Change date to a sortable type if possible, or add a timestamp
                if (!Schema::hasColumn('news', 'created_at')) {
                    $table->timestamps();
                }
                // Index common search columns
                $table->index('type');
            });
        }

        // 2. Fix 'registerusers' table
        if (Schema::hasTable('registerusers')) {
            Schema::table('registerusers', function (Blueprint $table) {
                // Convert numeric mobile to string to preserve leading zeros
                if (Schema::hasColumn('registerusers', 'number')) {
                    $table->string('number', 20)->change();
                }
                if (Schema::hasColumn('registerusers', 'mobile')) {
                    $table->string('mobile', 20)->change();
                }
                if (!Schema::hasColumn('registerusers', 'created_at')) {
                    $table->timestamps();
                }
            });
        }

        // 3. Fix 'blog' table
        if (Schema::hasTable('blog')) {
            Schema::table('blog', function (Blueprint $table) {
                if (!Schema::hasColumn('blog', 'created_at')) {
                    $table->timestamps();
                }
                $table->index('slug');
            });
        }

        // 4. Fix 'slider', 'testimonial', 'gallery' status/type indexing
        $simpleTables = ['slider', 'testimonial', 'gallery', 'service', 'product'];
        foreach ($simpleTables as $tableName) {
            if (Schema::hasTable($tableName)) {
                Schema::table($tableName, function (Blueprint $table) use ($tableName) {
                    if (Schema::hasColumn($tableName, 'status')) {
                        $table->index('status');
                    }
                    if (!Schema::hasColumn($tableName, 'created_at')) {
                        $table->timestamps();
                    }
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Downgrade logic if needed
    }
}
