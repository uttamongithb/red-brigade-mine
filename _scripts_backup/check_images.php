<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

$tables = [
    'blog' => ['image'],
    'gallery' => ['image'],
    'news' => ['image'],
    'product' => ['image'],
    'service' => ['image'],
    'slider' => ['image'],
    'testimonial' => ['image'],
    'strategies' => ['image'],
    'strategy' => ['image'],
    'education_cards' => ['image'],
    'work_initiatives' => ['image', 'gallery_images']
];

$dbImages = [];

foreach ($tables as $table => $columns) {
    if (!Schema::hasTable($table)) {
        continue;
    }

    $records = DB::table($table)->get();
    foreach ($records as $record) {
        foreach ($columns as $column) {
            if (empty($record->$column)) continue;

            $images = [];
            if ($column == 'gallery_images') {
                $decoded = json_decode($record->$column, true);
                if (is_array($decoded)) {
                    $images = $decoded;
                } else {
                    $images = explode(',', $record->$column);
                }
            } else {
                $images = [$record->$column];
            }

            foreach ($images as $img) {
                $img = trim($img);
                if (empty($img)) continue;
                $dbImages[] = $img;
            }
        }
    }
}

$dbImages = array_unique($dbImages);
$dbImagesAssoc = array_flip($dbImages);

// Get all files in public directory (except bundles/css/js)
$publicFiles = File::allFiles(public_path());

$missingInDb = [];
$missingOnFile = [];
$totalFiles = 0;

$extensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'jfif'];

foreach ($publicFiles as $file) {
    $ext = strtolower($file->getExtension());
    if (in_array($ext, $extensions)) {
        $totalFiles++;
        $relPath = $file->getRelativePathname();
        $filename = $file->getFilename();
        
        // Sometimes DB stores relative paths, sometimes just filenames
        $found = false;
        foreach ($dbImages as $dbImg) {
            if (basename($dbImg) === $filename || $dbImg === $relPath || $dbImg === '/' . $relPath) {
                $found = true;
                break;
            }
        }
        
        if (!$found) {
            $missingInDb[] = $relPath;
        }
    }
}

// Check which DB images are missing on file system
foreach ($dbImages as $img) {
    if (!file_exists(public_path($img)) && !file_exists(public_path('images/'.$img)) && !file_exists(public_path('uploads/'.$img))) {
        // Also try to find by basename in case it's in a subdirectory
        $found = false;
        foreach ($publicFiles as $file) {
            if ($file->getFilename() === basename($img)) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $missingOnFile[] = $img;
        }
    }
}

$output = "Total distinct images in DB: " . count($dbImages) . "\n";
$output .= "Total image files in public: " . $totalFiles . "\n\n";

$output .= "Images on file system but MISSING IN DB:\n";
foreach ($missingInDb as $m) {
    $output .= "- $m\n";
}

$output .= "\nImages in DB but MISSING ON FILE SYSTEM:\n";
foreach ($missingOnFile as $m) {
    $output .= "- $m\n";
}

file_put_contents('image_check_results.log', $output);
echo "Check complete. Results written to image_check_results.log\n";
