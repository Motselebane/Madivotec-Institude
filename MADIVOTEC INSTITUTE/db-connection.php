<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madivote_madivotec";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Debug line to ensure the connection is successful
   // echo "Connected successfully"; 
    
} catch(PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}

