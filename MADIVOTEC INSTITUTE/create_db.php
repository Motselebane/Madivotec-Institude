<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS madivote_madivotec";
    $conn->exec($sql);
    echo "Database created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
