<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <header><h1><a href="Index.php">Home</a></h1></header>
    <div class="login-container">
        <h1>STUDENT LOGIN</h1>
        <form method="POST" action="studentLogin-handle.php">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" id="email" name="email"> 
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
        <?php
        // Displays error message if login fails
        if (isset($_SESSION['login_error'])) {
            echo "<p style='color: red;'>" . $_SESSION['login_error'] . "</p>";
            unset($_SESSION['login_error']);
        }
        ?>
    </div>
</body>
</html>
