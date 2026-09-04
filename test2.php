<?php
ini_set('display_errors', 1);
if (file_exists(__DIR__ . '/.env')) {
    echo ".env file exists at root.";
} else {
    echo "No .env file found at: " . __DIR__;
}

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();

print_r($dotenv->safeLoad());

echo "hello";
echo getenv('DB_CONNECTION');
echo "world";
