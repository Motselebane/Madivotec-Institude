<?php
// Including the connection file
include 'db_connection.php';

// Counting the total number of students
$query = $conn->query("SELECT COUNT(*) as total FROM students");
$totalStudents = $query->fetch(PDO::FETCH_ASSOC)['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Total Students Enrolled</title>
</head>
<body>
    <h1>Total Students Enrolled</h1>
    <p>Total Number of Students: <?= htmlspecialchars($totalStudents) ?></p>
</body>
</html>
