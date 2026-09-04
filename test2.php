<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<pre>";

echo ".env location: " . __DIR__ . "/.env\n";

if (file_exists(__DIR__ . '/.env')) {
    echo ".env file EXISTS\n";
} else {
    echo ".env file NOT FOUND\n";
}

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);

$loaded = $dotenv->safeLoad();

echo "\n=== Loaded .env values ===\n";


echo "\n=== Environment variables ===\n";

echo "DB_CONNECTION: " . (getenv('DB_CONNECTION') ?: '<not set>') . "\n";

echo "</pre>";
