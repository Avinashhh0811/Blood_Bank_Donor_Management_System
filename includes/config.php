<?php
// DB credentials
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_USER', 'postgres');
define('DB_PASS', 'new_password');
define('DB_NAME', 'bbdms');

// Establish database connection
try {
    $dbh = new PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// Set client encoding to UTF-8
$dbh->exec("SET NAMES 'UTF8'");

} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
