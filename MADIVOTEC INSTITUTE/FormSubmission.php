<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Getting form parameters
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $previousSchool = $_POST['previousSchool'];
    $highestQualification = $_POST['highestQualification'];
    $qualificationImage = $_FILES['qualificationImage']['name'];
    $course = $_POST['course'];
    $password = $_POST['password']; 

   // Include the database connection file
    include 'db-connection.php';
    $studentStatement = null;
    $enrollmentStatement = null;

    try {
        

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // file upload for qualification image
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($qualificationImage);
        move_uploaded_file($_FILES['qualificationImage']['tmp_name'], $targetFile);

        // Inserting student details into the 'students' table
        $studentSql = "INSERT INTO students (Title, FirstName, LastName, Gender, DateOfBirth, Email, Phone, City, Country, PreviousSchool, HighestQualification, Qualification_Image, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $studentStatement = $conn->prepare($studentSql);
        $studentStatement->execute([$title, $firstName, $lastName, $gender, $dob, $email, $phone, $city, $country, $previousSchool, $highestQualification, $qualificationImage, $hashedPassword]);

        // Getting the generated StudentID
        $studentID = $conn->lastInsertId();

        if ($studentID > 0) {
            // Inserting enrollment details into the 'enrollments' table
            $enrollmentSql = "INSERT INTO enrollments (StudentID, CourseID, EnrollmentDate, Status) VALUES (?, ?, ?, ?)";
            $enrollmentStatement = $conn->prepare($enrollmentSql);
            $enrollmentDate = date('Y-m-d');
            $status = 'Pending';
            $enrollmentStatement->execute([$studentID, intval($course), $enrollmentDate, $status]);

            if ($enrollmentStatement->rowCount() > 0) {
                // Displaying success message if enrollment is successful
                echo "Application successful!";
            } else {
                // Displaying error message if enrollment fails
                echo "Error occurred during enrollment.";
            }
        } else {
            // Displaying error message if student insertion fails
            echo "Error occurred while inserting student details.";
        }
    } catch (PDOException $e) {
        // Displaying error message if there is a database connection or query error
        echo "Database connection or query error: " . $e->getMessage();
    } finally {
        // Closing resources
        if ($studentStatement !== null) {
            $studentStatement = null;
        }
        if ($enrollmentStatement !== null) {
            $enrollmentStatement = null;
        }
        if ($connection !== null) {
            $connection = null;
        }
    }
    header("Location: Index.php");
}

