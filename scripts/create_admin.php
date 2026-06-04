<?php
$dsn = 'mysql:host=127.0.0.1;dbname=nirvana;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $email = 'admin@local.test';
    $name = 'admin';
    $passwordPlain = 'Admin@1234';
    $hash = password_hash($passwordPlain, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare('INSERT INTO users (name,email,password,number,address,remember_token,created_at,updated_at) VALUES (:name,:email,:password,:number,:address,:token,NOW(),NOW())');
    $stmt->execute([':name'=>$name,':email'=>$email,':password'=>$hash,':number'=>'',':address'=>'',':token'=>'']);
    echo "Inserted admin user $email\n";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
    exit(1);
}
