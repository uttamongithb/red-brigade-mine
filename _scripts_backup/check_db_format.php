<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$blogImagesDb = DB::table('blog')->pluck('image')->toArray();
echo "Images in blog table:\n";
print_r($blogImagesDb);
