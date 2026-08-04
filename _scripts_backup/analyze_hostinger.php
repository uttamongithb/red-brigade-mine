<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

$report = "# Detailed Image Analysis (Hostinger Database vs File System)\n\n";
$report .= "This report details exactly which images in your website's folder structure are missing from the Hostinger MySQL database.\n\n";

$extensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'jfif'];
$totalMissingFiles = 0;

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
    $missingInDb = [];
    $presentInDb = [];
    
    foreach ($files as $file) {
        $ext = strtolower($file->getExtension());
        if (in_array($ext, $extensions)) {
            $filename = $file->getFilename();
            if (!in_array($filename, $dbImages)) {
                $missingInDb[] = $filename;
            } else {
                $presentInDb[] = $filename;
            }
        }
    }
    
    $totalMissingFiles += count($missingInDb);
    
    $report .= "## Section: " . ucfirst($key) . " (`$dir`)\n";
    $report .= "- **Images currently in `$table` database table**: " . count($dbImagesRaw) . "\n";
    $report .= "- **Total image files in folder**: " . count($files) . "\n";
    $report .= "- **Files NOT in database (Orphaned)**: " . count($missingInDb) . "\n\n";
    
    if (count($missingInDb) > 0) {
        $report .= "### List of images missing from the `$table` table:\n";
        $report .= "```text\n";
        foreach ($missingInDb as $m) {
            $report .= "$m\n";
        }
        $report .= "```\n\n";
    }
}

// Write the report
file_put_contents('hostinger_analysis_report.md', $report);
echo "Analysis complete.\n";
