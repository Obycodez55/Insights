<?php
// Define routes
$routes = [
    '/' => __DIR__ . '/../views/home.php',
    '/shop' => __DIR__ . '/../views/shop.php',
];

// Match route
$uri = strtok($_SERVER['REQUEST_URI'], '?');
if (array_key_exists($uri, $routes)) {
    include $routes[$uri];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
