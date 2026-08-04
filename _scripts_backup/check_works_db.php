<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

if (Schema::hasTable('work_initiatives')) {
    $works = DB::table('work_initiatives')->get();
    echo "Total work_initiatives in DB: " . $works->count() . "\n";
    foreach ($works as $work) {
        echo "ID {$work->id}: {$work->title}\n";
        echo "  Main Image: {$work->image}\n";
        echo "  Gallery Images: " . substr($work->gallery_images, 0, 100) . "...\n";
    }
} else {
    echo "Table work_initiatives does not exist.\n";
}
