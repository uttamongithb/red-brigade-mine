<?php

use Illuminate\Support\Facades\File;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$viewsDir = resource_path('views');
$files = File::allFiles($viewsDir);

$dynamicImages = [];
$hardcodedImages = [];

foreach ($files as $file) {
    if ($file->getExtension() !== 'php') continue; // only blade.php
    
    $content = file_get_contents($file->getPathname());
    $relativePath = $file->getRelativePathname();
    
    // Find all <img src="..."> 
    preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $content, $matches);
    
    if (!empty($matches[1])) {
        foreach ($matches[1] as $src) {
            // Check if $src contains a blade variable or php echo with a variable
            if (strpos($src, '$') !== false || strpos($src, '{{') !== false || strpos($src, '}}') !== false || strpos($src, '->') !== false) {
                $dynamicImages[] = "File: $relativePath -> $src";
            } else {
                $hardcodedImages[] = "File: $relativePath -> $src";
            }
        }
    }
}

echo "=== DYNAMIC IMAGES (Coming from DB/Variables) ===\n";
foreach ($dynamicImages as $img) {
    echo "$img\n";
}

echo "\n=== HARDCODED IMAGES (Local/Static paths) ===\n";
foreach ($hardcodedImages as $img) {
    echo "$img\n";
}
