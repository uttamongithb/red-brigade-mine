<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=nirvana', 'root', '');
$stmt = $pdo->query('SELECT id, LEFT(name,60) as name, image, date FROM blog ORDER BY id DESC LIMIT 8');
while($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $r['id'] . ' | ' . $r['name'] . ' | ' . $r['image'] . ' | ' . $r['date'] . PHP_EOL;
}
