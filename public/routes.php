<?php
// Define routes
$routes = [
    '/' => [
        'file' => __DIR__ . '/../views/home.php',
        'title' => 'Home || Adebayo',
        'description' => 'Welcome to the homepage'
    ],
    '/shop' => [
        'file' => __DIR__ . '/../views/shop.php',
        'title' => 'Shop',
        'description' => 'Browse our products'
    ],
];

// Match route
$uri = strtok($_SERVER['REQUEST_URI'], '?');
if (array_key_exists($uri, $routes)) {
    $route = $routes[$uri];
    $title = $route['title'];
    $description = $route['description'];
    include $route['file'];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
