<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/.deploy-now/');
$dotenv->load();

echo "hello";
echo getenv('DB_CONNECTION');
echo "world";
