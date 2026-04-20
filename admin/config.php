<?php
// Database configuration
$host = 'localhost';
$db_name = 'your_database_name';
$username = 'your_database_username';
$password = 'your_database_password';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Security settings
define('SECURE_KEY', 'your_secure_key'); // Change this to a unique value!
if (!defined('SECURE_KEY')) { die('Invalid access!'); }
?>