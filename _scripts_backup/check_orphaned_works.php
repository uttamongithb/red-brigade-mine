<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

$works = DB::table('work_initiatives')->get();
$dbImages = [];

foreach ($works as $work) {
    if (!empty($work->image)) {
        $dbImages[] = $work->image;
    }
    if (!empty($work->gallery_images)) {
        $decoded = json_decode($work->gallery_images, true);
        if (is_array($decoded)) {
            $dbImages = array_merge($dbImages, $decoded);
        }
    }
}

$dbImages = array_unique($dbImages);
$dbImagesAssoc = array_flip($dbImages);

$imgDir = public_path('uploads/img');
$files = File::allFiles($imgDir);
$orphaned = [];

foreach ($files as $file) {
    $filename = $file->getFilename();
    $relPath = $file->getRelativePathname();
    $relPathUnix = str_replace('\\', '/', $relPath);
    
    // Check if filename or relPath is in DB
    if (!isset($dbImagesAssoc[$filename]) && !isset($dbImagesAssoc[$relPathUnix])) {
        $orphaned[] = $relPathUnix;
    }
}

echo "Total images in public/uploads/img: " . count($files) . "\n";
echo "Total orphaned images: " . count($orphaned) . "\n";
echo "Orphaned examples:\n";
foreach (array_slice($orphaned, 0, 20) as $o) {
    echo "- $o\n";
}
