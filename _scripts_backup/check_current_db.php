<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

try {
    $config = DB::connection()->getConfig();
    echo "Currently connected to Database:\n";
    echo "Host: " . $config['host'] . "\n";
    echo "Database: " . $config['database'] . "\n";
    echo "Username: " . $config['username'] . "\n";
    
    // Test the connection
    DB::connection()->getPdo();
    echo "\nConnection status: SUCCESSFUL!\n";
} catch (\Exception $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
