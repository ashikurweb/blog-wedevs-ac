<?php 
require 'functions.php';
// require 'router.php';

try {
    $host = 'localhost';
    $dbname = 'wedevs_ac';
    $username = 'valet';
    $password = 'valet';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    ]);

    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}


