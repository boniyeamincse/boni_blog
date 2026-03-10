<?php

/**
 * Router script for PHP built-in web server
 * Usage: php -S localhost:8000 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . '/public' . $uri;

if ($uri !== '/' && file_exists($file)) {
    return false; // serve the requested resource as-is.
}

// Otherwise, route everything to index.php
$_GET['url'] = ltrim($uri, '/');
require_once __DIR__ . '/public/index.php';
