<?php

require_once __DIR__ . '/../app/core/Router.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\ShopController;

$router = new Router();
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/shop', [ShopController::class, 'index']);
