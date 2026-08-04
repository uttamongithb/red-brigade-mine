<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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

$groups = [
    'Covid Relief Work' => [],
    'Activity Highlights' => [],
    'Various Campaigns' => [],
    'Field Activities (WhatsApp)' => [],
    'GPS Map Camera Logs' => [],
    'Previous Works' => [],
    'Miscellaneous Images' => []
];

// Scan public/uploads/img
$imgDir = public_path('uploads/img');
if (file_exists($imgDir)) {
    $files = File::allFiles($imgDir);
    foreach ($files as $file) {
        $filename = $file->getFilename();
        $relPath = $file->getRelativePathname();
        $relPathUnix = str_replace('\\', '/', $relPath);
        
        if (!isset($dbImagesAssoc[$filename]) && !isset($dbImagesAssoc[$relPathUnix])) {
            if (strpos($filename, 'covid') !== false) {
                $groups['Covid Relief Work'][] = $relPathUnix;
            } elseif (strpos($relPathUnix, 'activity/') === 0) {
                $groups['Activity Highlights'][] = $relPathUnix;
            } elseif (strpos($relPathUnix, 'campains/') === 0) {
                $groups['Various Campaigns'][] = $relPathUnix;
            } elseif (strpos($filename, 'WhatsApp Image') !== false) {
                $groups['Field Activities (WhatsApp)'][] = $relPathUnix;
            } elseif (strpos($filename, 'GPSMapCamera') !== false) {
                $groups['GPS Map Camera Logs'][] = $relPathUnix;
            } else {
                // Ignore small static assets like 404.png, logo.png
                if (!in_array($filename, ['404.png', 'logo.png', 'logo_old.png', 'download.jpg', 'footer-logo.png', 'redbrigade-favicon.jpg', 'about-left-image.jpg', 'team_homepage.jpeg', 'who_we_are.jpeg', 'women_in_red.jpeg'])) {
                    $groups['Miscellaneous Images'][] = $relPathUnix;
                }
            }
        }
    }
}

// Scan public/uploads/news for prev_work
$newsDir = public_path('uploads/news');
if (file_exists($newsDir)) {
    $files = File::allFiles($newsDir);
    foreach ($files as $file) {
        $filename = $file->getFilename();
        if (strpos($filename, 'prev_work_') === 0 && !isset($dbImagesAssoc[$filename])) {
            $groups['Previous Works'][] = $filename;
        }
    }
}

$inserted = 0;
foreach ($groups as $title => $images) {
    if (empty($images)) continue;
    
    // Sort array
    sort($images);
    
    // Check if this title already exists in work_initiatives
    $existing = DB::table('work_initiatives')->where('title', $title)->first();
    
    if ($existing) {
        // Append to existing
        $existingGallery = json_decode($existing->gallery_images, true) ?: [];
        $newGallery = array_unique(array_merge($existingGallery, $images));
        DB::table('work_initiatives')
            ->where('id', $existing->id)
            ->update([
                'gallery_images' => json_encode(array_values($newGallery)),
                'updated_at' => now()
            ]);
        echo "Updated $title with " . count($images) . " images.\n";
        $inserted += count($images);
    } else {
        // Create new
        $mainImage = $images[0];
        $slug = Str::slug($title) . '-' . time();
        DB::table('work_initiatives')->insert([
            'title' => $title,
            'image' => $mainImage,
            'description' => "Auto-imported gallery for $title.",
            'gallery_images' => json_encode($images),
            'slug' => $slug,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        echo "Created $title with " . count($images) . " images.\n";
        $inserted += count($images);
    }
}

echo "Total images synced to work_initiatives: $inserted\n";

