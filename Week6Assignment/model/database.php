<?php
$dsn = "mysql:host=localhost;dbname=assignment_tracker";
$username = 'root';
$password = '';  // Default XAMPP password is empty

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Database connection failed: " . $e->getMessage());
}
