<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Emulate Apache's "mod_rewrite" behavior for the built-in PHP server.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// This legacy project stores many static assets at the project root instead of /public.
// Serve those files directly with extension-based MIME types.
if ($uri !== '/' && file_exists(__DIR__.$uri) && is_file(__DIR__.$uri)) {
    $ext = strtolower(pathinfo(__DIR__.$uri, PATHINFO_EXTENSION));
    $mimeMap = [
        'css' => 'text/css; charset=UTF-8',
        'js' => 'application/javascript; charset=UTF-8',
        'json' => 'application/json; charset=UTF-8',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'webp' => 'image/webp',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'eot' => 'application/vnd.ms-fontobject',
        'map' => 'application/json; charset=UTF-8',
    ];

    if (isset($mimeMap[$ext])) {
        header('Content-Type: '.$mimeMap[$ext]);
    }

    readfile(__DIR__.$uri);
    return true;
}

require_once __DIR__.'/public/index.php';
