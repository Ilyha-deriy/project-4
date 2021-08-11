<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = '127.0.0.1';
$db = 'mybase';
$user = 'Iluha Derii';
$pass = '3256';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$stmt = $pdo->query('SELECT id, title FROM articles');
while ($row = $stmt->fetch()) {
    echo $row['title'] . "\n";
}
?>