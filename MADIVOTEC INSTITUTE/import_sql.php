<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madivote_madivotec";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = file_get_contents('../../../Users/T/AppData/Local/Temp/MicrosoftEdgeDownloads/be7d77e0-49dc-4b95-b044-0abec7f00b26/madivotec.sql');
    $conn->exec($sql);
    echo "SQL file imported successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
