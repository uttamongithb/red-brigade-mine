<?php

use Illuminate\Support\Facades\File;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$filesToFind = ['ncc_1.jpeg', 'mission-one million-ongoing.jpeg', 'covid_1.jpeg', 'chikankari_1.jpeg'];
$foundLocations = [];

$allFiles = File::allFiles(base_path());

foreach ($allFiles as $file) {
    if (in_array($file->getFilename(), $filesToFind)) {
        $foundLocations[] = $file->getPathname();
    }
}

echo "Found locations:\n";
foreach ($foundLocations as $loc) {
    echo "- $loc\n";
}
