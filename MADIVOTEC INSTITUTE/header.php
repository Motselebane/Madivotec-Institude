<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        /* Header Styling */
        header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Back Button Styling */
        .back-button {
            margin-right: 20px; /* Space between the back button and the logo */
        }

        .back-button a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        .back-button a:hover {
            color: #0056b3;
        }

        /* Logo and School Name Styling */
        .logo {
            display: flex;
            align-items: center;
            margin-left: 0; /* Remove margin-left to align with the back button */
        }

        .logo img {
            height: 50px; /* Adjust the height of the logo */
            width: auto;
            margin-right: 0; /* No space between the logo and text */
        }

        .school-name {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 10px; /* Adjust if needed */
        }

        .school-name p {
            font-size: 18px;
            margin: 0; /* Remove margin around the text */
            line-height: 1.2; /* Adjust line height if needed */
        }

        .school-name hr {
            width: 100%; /* Full width of the container */
            border: 0;
            border-top: 1px solid #333; /* Style the line under the text */
            margin: 5px 0 0; /* Space between text and line */
        }

        /* Navigation Links */
        nav {
            display: flex;
            justify-content: flex-end;
            flex-grow: 1; /* Allow navigation to take available space */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
            align-items: center;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        nav ul li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Back Button -->
        <div class="back-button">
            <a href="javascript:history.back()">&#8592; Back</a> <!-- Simple back button -->
        </div>

        <!-- Logo and School Name -->
        <div class="logo">
            <a href="index.php">
                <img src="images/MADIVOTEC_LOGO.png" alt="Website Logo">
                <div class="school-name">
                    <p class="no-space">MADIVoTEC<br>INSTITUTE</p>
                    <hr>
                </div>
            </a>
        </div>

        <!-- Navigation Links on the Right -->
        <nav>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="Index.php/#about">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact/#contact">Contact</a></li>
                <!-- Add more links as needed -->
            </ul>
        </nav>
    </header>
</body>
</html>
