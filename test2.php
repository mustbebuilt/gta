<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

echo "hello";
echo getenv('MAIL_HOST');
echo 'DB_HOST: ' . (getenv('DB_HOST') ? 'SET' : 'NOT SET') . '<br>';
echo "world";
