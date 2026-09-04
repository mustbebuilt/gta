<?php
$mailHost = getenv('MAIL_HOST');
$mailPassword = getenv('MAIL_PASSWORD');
$basePath = getenv('BASE_PATH') ?: "/";
$host = getenv('DB_HOST');  // Replace with your MySQL host, e.g., 'localhost' or an IP address
$dbname = getenv('DB_DATABASE');  // Replace with your MySQL database name
$username = getenv('DB_USERNAME');  // Replace with your MySQL username
$password = getenv('DB_PASSWORD');  // Replace with your MySQL password


try {
    // Create a PDO connection to MySQL
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname;charset=utf8", $username, $password);

    // Set error mode to exception for better debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Enable foreign key checks (optional, depending on your needs)
    $pdo->exec("SET foreign_key_checks = 1;");  // This is to enable foreign key checks in MySQL

} catch (PDOException $e) {
    // Handle the error (optional: log it elsewhere or display a message)
    echo "Connection failed: " . $e->getMessage();
}
