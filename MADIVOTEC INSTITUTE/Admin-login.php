
<?php
// Starting the session
session_start();

// Check if the admin is already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
<div class="login-container">
    <header><h1><a href="Index.php">Home</a></h1></header>
    <h1>LOGIN</h1>
    <form method="POST" action="login-handle.php">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="admin">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
</div>
    <?php
    // Displays error message if login fails
    if (isset($_SESSION['login_error'])) {
        echo "<p style='color: red;'>" . $_SESSION['login_error'] . "</p>";
        unset($_SESSION['login_error']);
    }
    ?>
</body>
</html>
