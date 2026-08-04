<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

$mappings = [
    'blog' => ['table' => 'blog', 'dir' => 'uploads/blog', 'col' => 'image'],
    'gallery' => ['table' => 'gallery', 'dir' => 'uploads/gallery', 'col' => 'image'],
    'news' => ['table' => 'news', 'dir' => 'uploads/news', 'col' => 'image'],
    'product' => ['table' => 'product', 'dir' => 'uploads/product', 'col' => 'image'],
    'service' => ['table' => 'service', 'dir' => 'uploads/service', 'col' => 'image'],
    'slider' => ['table' => 'slider', 'dir' => 'uploads/slider', 'col' => 'image'],
    'testimonial' => ['table' => 'testimonial', 'dir' => 'uploads/testimonial', 'col' => 'image'],
    'strategy' => ['table' => 'strategy', 'dir' => 'uploads/strategy', 'col' => 'image'],
];

$extensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'jfif'];
$totalInserted = 0;

foreach ($mappings as $key => $map) {
    $table = $map['table'];
    $dir = $map['dir'];
    $col = $map['col'];
    
    $fullDir = public_path($dir);
    if (!file_exists($fullDir)) {
        continue;
    }
    
    // Get DB images
    $dbImagesRaw = DB::table($table)->pluck($col)->toArray();
    $dbImages = array_map('basename', $dbImagesRaw); // Just get basenames
    
    // Get File System images
    $files = File::files($fullDir);
    $insertedCount = 0;
    
    foreach ($files as $file) {
        $ext = strtolower($file->getExtension());
        if (in_array($ext, $extensions)) {
            $filename = $file->getFilename();
            
            if (!in_array($filename, $dbImages)) {
                $name = pathinfo($filename, PATHINFO_FILENAME);
                $name = str_replace(['-', '_'], ' ', $name);
                $name = Str::title($name);
                $slug = Str::slug($name);
                $dateStr = date('Y-m-d');
                $desc = "Auto-imported image from $filename";
                
                $data = [];
                
                if ($table == 'blog') {
                    $data = [
                        'name' => $name,
                        'image' => $filename,
                        'date' => $dateStr,
                        'slug' => $slug,
                        'description' => $desc,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'gallery') {
                    $data = [
                        'name' => $name,
                        'type' => 'image',
                        'image' => $filename,
                        'status' => 1,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'news') {
                    $data = [
                        'type' => 'news',
                        'name' => $name,
                        'slug' => $slug,
                        'date' => $dateStr,
                        'time_interval' => 'N/A',
                        'city' => 'Unknown',
                        'image' => $filename,
                        'description' => $desc,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'product') {
                    $data = [
                        'name' => $name,
                        'image' => $filename,
                        'description' => $desc,
                        'slug' => $slug,
                        'service' => 0,
                        'status' => 1,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'service') {
                    $data = [
                        'name' => $name,
                        'image' => $filename,
                        'description' => $desc,
                        'status' => 1,
                        'slug' => $slug,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'slider') {
                    $data = [
                        'name' => $name,
                        'image' => $filename,
                        'status' => 1,
                        'description' => $desc,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'testimonial') {
                    $data = [
                        'name' => $name,
                        'image' => $filename,
                        'description' => $desc,
                        'type' => 'General',
                        'status' => 1,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                } elseif ($table == 'strategy') {
                    $data = [
                        'title' => $name,
                        'description' => $desc,
                        'image' => $filename,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
                
                if (!empty($data)) {
                    try {
                        DB::table($table)->insert($data);
                        $insertedCount++;
                    } catch (\Exception $e) {
                        echo "Failed to insert $filename into $table: " . $e->getMessage() . "\n";
                    }
                }
            }
        }
    }
    echo "Inserted $insertedCount images into $table.\n";
    $totalInserted += $insertedCount;
}

echo "Total images successfully inserted into DB: $totalInserted\n";

