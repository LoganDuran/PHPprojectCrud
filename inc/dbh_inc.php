<?php

$dsh = "mysql:host=localhost;dbname=php-trening";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsh, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}