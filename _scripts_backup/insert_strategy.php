<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

$table = 'strategy';
$dir = 'uploads/strategy';
$col = 'image';

$fullDir = public_path($dir);
$extensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'jfif'];

$dbImagesRaw = DB::table($table)->pluck($col)->toArray();
$dbImages = array_map('basename', $dbImagesRaw);

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
            $desc = "Auto-imported image from $filename";
            
            $data = [
                'name' => $name, // Fixed from 'title' to 'name'
                'description' => $desc,
                'image' => $filename,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ];
            
            try {
                DB::table($table)->insert($data);
                $insertedCount++;
                echo "Inserted $filename into $table.\n";
            } catch (\Exception $e) {
                echo "Failed to insert $filename into $table: " . $e->getMessage() . "\n";
            }
        }
    }
}

echo "Successfully inserted $insertedCount images into $table.\n";
