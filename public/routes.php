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
    "/about" => [
        'file' => __DIR__ . '/../views/about.php',
        'title' => 'About Us',
        'description' => 'Learn more about our company'
    ],
    "/contact" => [
        'file' => __DIR__ . '/../views/contact.php',
        'title' => 'Contact Us',
        'description' => 'Get in touch with us'
    ],
    '/blog' => [
        'file' => __DIR__ . '/../views/blog.php',
        'title' => 'Blog & Updates',
        'description' => 'Read our latest blog posts and updates'
    ],
    '/cart' => [
        'file' => __DIR__ . '/../views/cart.php',
        'title' => 'Cart',
        'description' => 'View your cart'
    ]
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
