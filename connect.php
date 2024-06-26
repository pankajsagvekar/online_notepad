<?php

$host = 'localhost';
$db = 'notepad';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $password);
    if ($pdo) {
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
