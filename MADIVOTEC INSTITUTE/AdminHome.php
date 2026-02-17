<?php
// Start the session
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> 
</head>
<body>
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="view-students.php">View Enrolled Students</a></li>
        <li><a href="edit-enrollment.php">Edit Enrollment Status</a></li>
        <li><a href="total-students.php">Total Number of Students Enrolled</a></li>
        <li><a href="AddCourses.php">Add course</a></li>
    </ul>

    <centre><a href="logout.php">Logout</a></centre>
</body>
</html>
