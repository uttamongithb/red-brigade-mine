<?php
$host = '217.21.90.228';
$db   = 'u640982965_testing_red567';
$user = 'u640982965_testing_red567';
$pass = '87Tndghssdsf';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=3306";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connection successful!";
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}
