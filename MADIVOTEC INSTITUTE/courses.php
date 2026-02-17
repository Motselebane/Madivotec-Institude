<?php
// Include the database connection file
include 'db-connection.php';

try {
    // Fetch courses from the database
    $sql = "SELECT CourseID, CourseCategory, CourseName, CourseDescription, Duration, Fee FROM courses";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all results
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | MADIVoTEC Institute</title>
    <link rel="stylesheet" href="coursesStyle.css">
</head>
<body>
    <header>
        <h1>Welcome to MADIVoTEC Institute</h1>
    </header>

    <section id="course-header">
        <h2>Intensive Training Courses</h2>
        <p>We deliver intensive training courses to teach you the skills you need in the shortest possible period of time...</p>
    </section>

    <section class="horizontal-panel">
        <?php
        if (!empty($courses)) {
            foreach ($courses as $course) {
                $courseID = htmlspecialchars($course['CourseID']);
                $courseName = htmlspecialchars($course['CourseName']);
                $description = htmlspecialchars($course['CourseDescription']);
                $duration = htmlspecialchars($course['Duration']);
                $fee = htmlspecialchars($course['Fee']);
                
                // Generating image path based on the course name
                $sanitizedCourseName = str_replace(' ', ' ', $courseName);
                $imagePath = "images/" . $sanitizedCourseName . ".jpg";
            

                echo '<div class="course-card">';
                echo '<img src="' . $imagePath . '" alt="' . $courseName . '">';
                echo '<div class="course-card-content">';
                echo '<h3 class="course-card-title">' . $courseName . '</h3>';
                echo '<p class="course-card-description">' . $description . '</p>';
                echo '<p class="course-card-duration"><strong>Duration:</strong> ' . $duration . '</p>';
                echo '<p class="course-card-fee"><strong>Fee:</strong> ' . ($fee ? $fee : 'Contact us for details') . '</p>';
                echo '<form action="Enrollment-Form.php" method="GET">';
                echo '<input type="hidden" name="courseID" value="' . $courseID . '">';
                echo '<button type="submit" class="register-button">Register Now</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No courses available at the moment.</p>';
        }
        ?>
    </section>
    

</body>
</html>
