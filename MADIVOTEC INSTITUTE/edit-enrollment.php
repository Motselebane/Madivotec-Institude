<?php
// Connecting to the database
include 'db_connection.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enrollmentID = $_POST['enrollment_id'];
    $status = $_POST['status'];

    // Prepare the update query
    $query = $connection->prepare("UPDATE enrollments SET Status = ? WHERE EnrollmentID = ?");
    $query->execute([$status, $enrollmentID]);

    echo "Enrollment status updated successfully!";
}

// Fetching enrollment data with student details
$query = $connection->query("
    SELECT e.EnrollmentID, s.FirstName, s.LastName, e.Status 
    FROM enrollments e 
    JOIN students s ON e.StudentID = s.StudentID
");
$enrollments = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Enrollment Status</title>
</head>
<body>
    <h1>Edit Enrollment Status</h1>
    <form method="POST" action="edit-enrollment.php">
        <label for="enrollment_id">Select Enrollment:</label>
        <select name="enrollment_id" id="enrollment_id">
            <?php foreach ($enrollments as $enrollment): ?>
                <option value="<?= $enrollment['EnrollmentID'] ?>">
                    <?= $enrollment['EnrollmentID'] ?> - <?= $enrollment['FirstName'] ?> <?= $enrollment['LastName'] ?> - <?= $enrollment['Status'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="status">New Status:</label>
        <select name="status" id="status">
            <option value="Pending">Pending</option>
            <option value="Approved">Approved</option>
            <option value="Rejected">Rejected</option>
        </select>
        <br><br>
        <button type="submit">Update Status</button>
    </form>
</body>
</html>
