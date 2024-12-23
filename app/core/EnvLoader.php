<?php

namespace App\Core;

use Dotenv\Dotenv;

class EnvLoader
{
    public static function load($path)
    {
        $dotenv = Dotenv::createImmutable($path);
        $dotenv->load();
    }
}
