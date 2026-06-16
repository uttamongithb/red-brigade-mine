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
        // Helper to check if index exists
        $indexExists = function ($table, $index) {
            $conn = DB::connection();
            $driver = $conn->getDriverName();
            if ($driver === 'sqlite') {
                $results = DB::select("PRAGMA index_list('$table')");
                foreach ($results as $row) {
                    if ($row->name === $index) return true;
                }
                return false;
            }
            $db = $conn->getDatabaseName();
            $results = DB::select("SELECT * FROM information_schema.statistics WHERE table_schema = '$db' AND table_name = '$table' AND index_name = '$index'");
            return count($results) > 0;
        };

        // 1. Fix 'news' table (Our Work / Events)
        if (Schema::hasTable('news')) {
            Schema::table('news', function (Blueprint $table) use ($indexExists) {
                if (!Schema::hasColumn('news', 'created_at')) {
                    $table->timestamps();
                }
                if (!$indexExists('news', 'news_type_index')) {
                    $table->index('type');
                }
            });
        }

        // 2. Fix 'registerusers' table
        if (Schema::hasTable('registerusers')) {
            Schema::table('registerusers', function (Blueprint $table) {
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
            Schema::table('blog', function (Blueprint $table) use ($indexExists) {
                if (Schema::hasColumn('blog', 'slug')) {
                    $table->string('slug', 255)->change();
                }
                if (!Schema::hasColumn('blog', 'created_at')) {
                    $table->timestamps();
                }
                if (!$indexExists('blog', 'blog_slug_index')) {
                    $table->index('slug');
                }
            });
        }

        // 4. Fix 'slider', 'testimonial', 'gallery' status/type indexing
        $simpleTables = ['slider', 'testimonial', 'gallery', 'service', 'product'];
        foreach ($simpleTables as $tableName) {
            if (Schema::hasTable($tableName)) {
                Schema::table($tableName, function (Blueprint $table) use ($tableName, $indexExists) {
                    if (Schema::hasColumn($tableName, 'status')) {
                        if (!$indexExists($tableName, "{$tableName}_status_index")) {
                            $table->index('status');
                        }
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
