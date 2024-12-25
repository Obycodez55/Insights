<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('/images/icon_2.jpeg') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <header class="header" id="header">
        <nav>
            <div class="image-container">
                <a href="<?= base_url('/') ?>">
                    <img src="<?= base_url('/images/banner_1.png') ?>" alt="Logo" width="100">
                </a>
            </div>
            <div class="nav">
                <div><a href="<?= base_url('/') ?>">Home</a></div>
                <div><a href="<?= base_url('/about') ?>">About</a></div>
                <div><a href="<?= base_url('/contact') ?>">Contact</a></div>
                <div><a href="<?= base_url('/shop') ?>">Shop</a></div>
                <div><a href="<?= base_url('/blog') ?>">Blog & Updates</a></div>
            </div>
            <div class="p-2 flex items-center justify-center basis[10%]">
                <a href="<?= base_url('/cart') ?>"><i class="fa-solid fa-cart-shopping fa-beat"></i></a>
            </div>
        </nav>
    </header>
    <main>