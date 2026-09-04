<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();

print_r($dotenv->safeLoad());

echo "hello";
echo getenv('DB_CONNECTION');
echo "world";
