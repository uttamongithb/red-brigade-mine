<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

$tables = ['blog', 'gallery', 'news', 'product', 'service', 'slider', 'testimonial', 'strategy', 'education_cards', 'work_initiatives'];

$dbImages = [];

foreach ($tables as $table) {
    if (!Illuminate\Support\Facades\Schema::hasTable($table)) continue;
    $records = DB::table($table)->get();
    foreach ($records as $record) {
        if (isset($record->image) && !empty($record->image)) {
            $dbImages[] = basename($record->image);
            $dbImages[] = str_replace('\\', '/', $record->image);
        }
        if (isset($record->gallery_images) && !empty($record->gallery_images)) {
            $decoded = json_decode($record->gallery_images, true);
            if (is_array($decoded)) {
                foreach ($decoded as $img) {
                    $dbImages[] = basename($img);
                    $dbImages[] = str_replace('\\', '/', $img);
                }
            } else {
                $images = explode(',', $record->gallery_images);
                foreach ($images as $img) {
                    $img = trim($img);
                    $dbImages[] = basename($img);
                    $dbImages[] = str_replace('\\', '/', $img);
                }
            }
        }
    }
}

$dbImages = array_unique($dbImages);
$dbImagesAssoc = array_flip($dbImages);

$imgDir = public_path('uploads');
$files = File::allFiles($imgDir);
$orphaned = 0;
$extensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'jfif'];

foreach ($files as $file) {
    $ext = strtolower($file->getExtension());
    if (!in_array($ext, $extensions)) continue;
    
    $filename = $file->getFilename();
    $relPath = $file->getRelativePathname();
    $relPathUnix = str_replace('\\', '/', $relPath);
    
    if (!isset($dbImagesAssoc[$filename]) && !isset($dbImagesAssoc[$relPathUnix])) {
        // Exclude some static generic ones again
        if (!in_array($filename, ['404.png', 'logo.png', 'logo_old.png', 'download.jpg', 'footer-logo.png', 'redbrigade-favicon.jpg', 'about-left-image.jpg', 'team_homepage.jpeg', 'who_we_are.jpeg', 'women_in_red.jpeg'])) {
            $orphaned++;
            // echo "Missing: $relPathUnix\n";
        }
    }
}

if ($orphaned === 0) {
    echo "SUCCESS: 100% of uploaded images are now in the Hostinger database!\n";
} else {
    echo "WARNING: $orphaned images are still orphaned.\n";
}
