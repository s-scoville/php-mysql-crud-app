<?php

/**
 * Configuration for database connection
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