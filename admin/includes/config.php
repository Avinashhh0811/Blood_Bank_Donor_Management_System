<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','postgres');
define('DB_PASS','new_password');
define('DB_NAME','bbdms');
// Establish database connection.
try
{$dbh = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$dbh->exec("SET NAMES 'UTF8'");

}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>