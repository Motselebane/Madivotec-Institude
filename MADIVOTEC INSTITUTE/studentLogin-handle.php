<?php
// Start the session
session_start();

// Include the database connection file
include 'db-connection.php';

// Retrieve the email and password from the login form
$email = $_POST['email'];
$password = $_POST['password']; 

// Fetch the student record based on the email
$query = $conn->prepare("SELECT * FROM students WHERE Email = ?");
$query->execute([$email]);
$student = $query->fetch(PDO::FETCH_ASSOC);

if ($student) {
    // Verify the password against the hashed password stored in the database
    if (password_verify($password, $student['password'])) {
        // If the password matches, set session variables
        $_SESSION['student_logged_in'] = true;
        $_SESSION['student_email'] = $student['Email'];
        $_SESSION['student_id'] = $student['StudentID']; // Set the session ID 
        
        header("Location: StudentHome.php");
        exit;
    } else {
        // If the password doesn't match, set an error message
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: student-login.php"); // Redirect back to the login page
        exit;
    }
} 