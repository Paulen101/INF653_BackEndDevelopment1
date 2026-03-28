<?php
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        if (file_exists('view/error.php')) {
            include('view/error.php');
        } else {
            include('../view/error.php');
        }
        exit();
    }
?>
