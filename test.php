<?php
ini_set('display_errors', 1);
// echo getenv('APP_URL');
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once __DIR__ . '/config/footer.php';
require_once __DIR__ . '/config/database.php';

echo getenv('MAIL_HOST');

echo "Current directory is: " . __DIR__ . "<br>";
echo "Files found in root:<br>";
print_r(scandir(__DIR__));


// print_r($pdo