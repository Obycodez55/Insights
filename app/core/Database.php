<?php

namespace App\Core;

use mysqli;

class Database
{
    public static function connect()
    {
        $host = $_ENV['DB_HOST'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];
        $dbname = $_ENV['DB_NAME'];

        $conn = new mysqli($host, $user, $password, $dbname);

        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
