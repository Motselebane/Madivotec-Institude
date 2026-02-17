<?php
// Start session to check if the admin is logged in (if using session-based authentication)
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: adminLogin.php');
    exit;
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseCategory = $_POST['courseCategory'];
    $courseName = $_POST['courseName'];
    $courseDescription = $_POST['courseDescription'];
    $duration = $_POST['Duration']; 
    $fee = $_POST['Fee'];           

    // Include the database connection file
    include 'db-connection.php';

    try {
        // Prepare SQL to insert a new course
        $sql = "INSERT INTO courses (CourseCategory, CourseName, CourseDescription, Duration, Fee) VALUES (:courseCategory, :courseName, :courseDescription, :duration, :fee)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':courseCategory', $courseCategory);
        $stmt->bindParam(':courseName', $courseName);
        $stmt->bindParam(':courseDescription', $courseDescription);
        $stmt->bindParam(':duration', $duration); 
        $stmt->bindParam(':fee', $fee);           

        // Execute the statement
        if ($stmt->execute()) {
            $successMessage = "Course added successfully!";
        } else {
            $errorMessage = "Failed to add course. Please try again.";
        }
    } catch (PDOException $e) {
        $errorMessage = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Course</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="container">
        <h2>Add New Course</h2>
        
        <?php if (isset($successMessage)): ?>
            <div class="success-message"><?php echo htmlspecialchars($successMessage); ?></div>
        <?php endif; ?>

        <?php if (isset($errorMessage)): ?>
            <div class="error-message"><?php echo htmlspecialchars($errorMessage); ?></div>
        <?php endif; ?>

        <form action="AddCourses.php" method="POST">
            <div class="form-group">
                <label for="courseCategory">Course Category:</label>
                <input type="text" id="courseCategory" name="courseCategory" required>
            </div>
            <div class="form-group">
                <label for="courseName">Course Name:</label>
                <input type="text" id="courseName" name="courseName" required>
            </div>
            <div class="form-group">
                <label for="courseDescription">Course Description:</label>
                <textarea id="courseDescription" name="courseDescription" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Duration">Duration:</label>
                <input type="text" id="Duration" name="Duration" required>
            </div>
            <div class="form-group">
                <label for="Fee">Fee:</label>
                <input type="text" id="Fee" name="Fee" required>
            </div>
            <button type="submit">Add Course</button>
        </form>
    </div>
</body>
</html>
