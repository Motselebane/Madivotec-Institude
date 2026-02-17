<?php
// Connecting to the database
$servername = "localhost";
$username = "madivote";
$password = "p6Nxgl0HO7V:5(";
$dbname = "madivote_madivotec";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetching enrolled students
$query = $connection->query("SELECT * FROM students");
$students = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enrolled Students</title>
    <link rel="stylesheet" href="dashboard.css"> 
</head>
<body>
    <h1>Enrolled Students</h1>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th> 
            <th>Country</th>
            <th>Previous School</th>
            <th>Highest Qualification</th>
            <th>Qualification Image</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= htmlspecialchars($student['StudentID']) ?></td>
                <td><?= htmlspecialchars($student['Title']) ?></td>
                <td><?= htmlspecialchars($student['FirstName']) ?></td>
                <td><?= htmlspecialchars($student['LastName']) ?></td>
                <td><?= htmlspecialchars($student['Gender']) ?></td>
                <td><?= htmlspecialchars($student['DateOfBirth']) ?></td>
                <td><?= htmlspecialchars($student['Email']) ?></td>
                <td><?= htmlspecialchars($student['Phone']) ?></td>
                <td><?= htmlspecialchars($student['city']) ?></td> 
                <td><?= htmlspecialchars($student['country']) ?></td> 
                <td><?= htmlspecialchars($student['PreviousSchool']) ?></td>
                <td><?= htmlspecialchars($student['HighestQualification']) ?></td>
                <td>
                    <?php
                    $imageFileName = htmlspecialchars($student['qualification_image']);
                    $imagePath = "uploads/" . $imageFileName; // Adjust path based on your server structure
                    if (!empty($imageFileName) && file_exists($imagePath)): ?>
                        <img src="<?= $imagePath ?>" alt="qualification" width="100">
                    <?php else: ?>
                        No Image
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
