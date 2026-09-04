<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<pre>';

echo "PHP directory:\n";
echo __DIR__ . "\n\n";

echo "Checking for .env:\n";

$envFile = __DIR__ . '/.env';

if (file_exists($envFile)) {
    echo ".env EXISTS\n";
    echo "Path: " . $envFile . "\n";
    echo "Size: " . filesize($envFile) . " bytes\n";
} else {
    echo ".env DOES NOT EXIST\n";
}

echo "\nLoading Composer:\n";

require_once __DIR__ . '/vendor/autoload.php';

echo "Composer loaded.\n";

echo "\nLoading .env with phpdotenv:\n";

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();

echo "Dotenv loaded.\n";

echo "\nEnvironment variables:\n";

echo "DB_CONNECTION = " . (getenv('DB_CONNECTION') ?: '<not set>') . "\n";
echo "DB_HOST       = " . (getenv('DB_HOST') ?: '<not set>') . "\n";
echo "DB_PORT       = " . (getenv('DB_PORT') ?: '<not set>') . "\n";
echo "DB_DATABASE   = " . (getenv('DB_DATABASE') ?: '<not set>') . "\n";
echo "DB_USERNAME   = " . (getenv('DB_USERNAME') ?: '<not set>') . "\n";
echo "DB_PASSWORD   = " . (getenv('DB_PASSWORD') ? '<set>' : '<not set>') . "\n";

echo '</pre>';
