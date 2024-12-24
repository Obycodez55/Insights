<?php
// run_migrations.php

require_once __DIR__ . '/includes/db.php';

// Load all SQL migration files from the migrations directory
$files = glob(__DIR__ . '/migrations/*.sql');

// Sort files to ensure migrations run in order
natsort($files);

foreach ($files as $file) {
    echo "Running migration: " . basename($file) . "\n";

    // Load the SQL commands from the file
    $sql = file_get_contents($file);

    if (mysqli_multi_query($conn, $sql)) {
        do {
            // Flush results to avoid "commands out of sync" error
        } while (mysqli_next_result($conn));
        echo "Successfully executed: " . basename($file) . "\n";
    } else {
        echo "Error in migration " . basename($file) . ": " . mysqli_error($conn) . "\n";
    }
}

mysqli_close($conn);
