<?php
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    header("Location: student-login.php"); // Redirect to login page if not logged in
    exit;
}

// Include the database connection file
include 'db-connection.php';

try {
    // Fetching student data
    $studentID = $_SESSION['student_id'];
    $query = $conn->prepare("
        SELECT s.StudentID, s.FirstName, s.LastName, s.Email, e.CourseID, e.EnrollmentDate, e.Status 
        FROM students s 
        JOIN enrollments e ON s.StudentID = e.StudentID 
        WHERE s.StudentID = ?
    ");
    $query->execute([$studentID]);
    $studentData = $query->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <?php if (!empty($studentData)): ?>
        <h1>Welcome, <?= htmlspecialchars($studentData[0]['FirstName'] . ' ' . $studentData[0]['LastName']) ?></h1>
        <h2>Your Enrollment Details:</h2>
        <table>
            <tr>
                <th>Course ID</th>
                <th>Enrollment Date</th>
                <th>Status</th>
            </tr>
            <?php foreach ($studentData as $data): ?>
                <tr>
                    <td><?= htmlspecialchars($data['CourseID']) ?></td>
                    <td><?= htmlspecialchars($data['EnrollmentDate']) ?></td>
                    <td><?= htmlspecialchars($data['Status']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No enrollment details found.</p>
    <?php endif; ?>
</body>
</html>
