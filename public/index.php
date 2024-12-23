<?php

require_once __DIR__ . '/../composer_vendor/autoload.php';
require_once __DIR__ . '/../app/core/EnvLoader.php';


use App\Core\EnvLoader;

EnvLoader::load(__DIR__ . '/../');

require_once __DIR__ . '/../routes/web.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-xl">Welcome to My Website</h1>
    </header>
    <main class="p-6">
        <h2 class="text-lg text-blue-700">Home Page</h2>
        <p>Enjoy your stay!</p>
    </main>
    <footer class="bg-gray-800 text-white p-4 mt-6">
        <p>&copy; <?= date('Y'); ?> My Website</p>
    </footer>
    <script>
        $(document).ready(function() {
            console.log("jQuery is working!");
        });
    </script>
</body>
</html>
