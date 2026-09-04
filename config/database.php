<?php

$mailHost = getenv('MAIL_HOST');
$mailPassword = getenv('MAIL_PASSWORD');

$basePath = getenv('BASE_PATH') ?: '/';

$host = getenv('DB_HOST');
$port = getenv('DB_PORT') ?: '3306';
$dbname = getenv('DB_DATABASE');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

try {

    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

    $pdo = new PDO(
        $dsn,
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    // Enable foreign key checks
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
} catch (PDOException $e) {

    // Log the real error rather than exposing database details
    error_log("Database connection failed: " . $e->getMessage());

    die("Unable to connect to the database.");
}
