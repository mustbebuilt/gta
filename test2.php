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

print_r($loaded);

echo "\n=== Environment variables ===\n";

echo "DB_CONNECTION: " . (getenv('DB_CONNECTION') ?: '<not set>') . "\n";
echo "DB_HOST: " . (getenv('DB_HOST') ?: '<not set>') . "\n";
echo "DB_PORT: " . (getenv('DB_PORT') ?: '<not set>') . "\n";
echo "DB_DATABASE: " . (getenv('DB_DATABASE') ?: '<not set>') . "\n";
echo "DB_USERNAME: " . (getenv('DB_USERNAME') ?: '<not set>') . "\n";

// Don't display the actual password
echo "DB_PASSWORD: " . (getenv('DB_PASSWORD') ? '<set>' : '<not set>') . "\n";

echo "</pre>";
