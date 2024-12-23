<?php
// Custom router for PHP's built-in server
if (php_sapi_name() === 'cli-server') {
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false; // Serve the requested file directly if it exists
    }
}

require_once __DIR__ . '/public/index.php';
