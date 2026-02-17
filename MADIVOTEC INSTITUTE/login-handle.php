<?php
// Start the session
session_start();

   // database connection file
    include 'db-connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch the admin from the database
    $query = $conn->prepare("SELECT * FROM admins WHERE Username = ?");
    $query->execute([$username]);
    $admin = $query->fetch(PDO::FETCH_ASSOC);


        // Verify the password for the admin
        if (password_verify($password, $admin['Password'])) {
            // Set session variables
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['Username'];

            // Redirect to the admin dashboard
            header("Location: AdminHome.php");
            exit;
        } else {
            // Setting error message
            $_SESSION['login_error'] = "Invalid username or password.";
            header("Location: login.php");
            exit;
        }
       
}
