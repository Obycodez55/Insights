<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('/images/icon_2.jpeg') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <header class="header">
        <nav>
            <div class="image-container">
                <a href="<?= base_url('/') ?>">
                    <img src="<?= base_url('/images/banner.jpeg') ?>" alt="Logo" width="100">
                </a>
            </div>
            <div class="nav">
                <div><a href="<?= base_url('/') ?>">Home</a></div>
                <div><a href="<?= base_url('/about') ?>">About</a></div>
                <div><a href="<?= base_url('/contact') ?>">Contact</a></div>
                <div><a href="<?= base_url('/shop') ?>">Shop</a></div>
                <div><a href="<?= base_url('/blog') ?>">Blog & Updates</a></div>
            </div>
        </nav>
    </header>
    <main class="p-6">