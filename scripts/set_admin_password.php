<?php
$dsn = 'mysql:host=127.0.0.1;dbname=nirvana;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $email = 'nirvan@gmail.com';
    $newPassword = 'Admin@123';
    $hash = password_hash($newPassword, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare('UPDATE users SET password = :hash WHERE email = :email');
    $stmt->execute([':hash' => $hash, ':email' => $email]);
    echo "Updated password for $email\n";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
    exit(1);
}
