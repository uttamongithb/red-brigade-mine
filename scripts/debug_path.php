<?php
require 'bootstrap/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Public Path: " . public_path() . "\n";
$img = 'uploads/slider/Redbrigade-lucknow.jpg';
echo "Full Path: " . public_path($img) . "\n";
echo "Exists: " . (file_exists(public_path($img)) ? "YES" : "NO") . "\n";
