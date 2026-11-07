<?php

/**
 * Example configuration for database connection
 * Copy this file to config.php and update the values.
 */

$host = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";
$port = "8889";
$dsn = "mysql:host=$host;port=$port;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);