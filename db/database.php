<?php 
try {
    $host = 'localhost';
    $dbname = 'wedevs_ac';
    $username = 'valet';
    $password = 'valet';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}