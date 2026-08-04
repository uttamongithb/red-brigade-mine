<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$sliders = DB::table('slider')->orderBy('id', 'asc')->limit(10)->get();
foreach ($sliders as $s) {
    echo "ID: {$s->id} | Name: {$s->name} | Image: {$s->image} | Created: {$s->created_at}\n";
}
