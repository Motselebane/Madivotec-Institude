<?php
//connection
require_once 'db-connection.php';

// Fetch the course ID from the URL, if available
$courseID = isset($_GET['course_id']) ? $_GET['course_id'] : null;

// Fetch the course name based on the course ID if available
$courseName = '';
try {
    if ($courseID) {
        $stmt = $conn->prepare("SELECT CourseName FROM courses WHERE CourseID = :courseID");
        $stmt->bindParam(':courseID', $courseID, PDO::PARAM_INT);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);
        $courseName = $course['CourseName'] ?? '';
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Fetch all courses for the dropdown
$courses = [];
try {
    $stmt = $conn->prepare("SELECT CourseID, CourseName FROM courses");
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment Form</title>
    <link rel="stylesheet" href="FormStyles.css">
</head>
<body>
    <div class="form-container">
        <h2>Enroll Now</h2>
        <form action="FormSubmission.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <select id="title" name="title" required>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms">Ms</option>
                </select>
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <div>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">Male</label>
                </div>
                <div>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="form-group">
                <label for="previousSchool">Previous School:</label>
                <input type="text" id="previousSchool" name="previousSchool" required>
            </div>
            <div class="form-group">
                <label for="highestQualification">Highest Qualification:</label>
                <input type="text" id="highestQualification" name="highestQualification" required>
            </div>
            <div class="form-group">
                <label for="qualificationImage">Qualification Image:</label>
                <input type="file" id="qualificationImage" name="qualificationImage" accept="image/*">
            </div>
            <div class="form-group">
                <label for="course">Selected Course:</label>
                <select id="course" name="course" required>
                    <option value="">Select a course</option>
                    <?php foreach ($courses as $course): ?>
                        <option value="<?php echo htmlspecialchars($course['CourseID']); ?>" <?php echo ($courseID == $course['CourseID']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($course['CourseName']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
             <button type="submit">Submit</button>
           </form>
           
         
        </div>
   
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'db-connection.php';

    // validate the input
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
    $courseID = $_POST['course']; 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Handle file upload
    $uploadDir = 'uploads/';
    $fileName = basename($_FILES['qualificationImage']['name']);
    $uploadFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['qualificationImage']['tmp_name'], $uploadFile)) {
        // Insert data into the database
        try {
            $stmt = $conn->prepare("INSERT INTO enrollments (Title, FirstName, LastName, Gender, DateOfBirth, Email, Phone, City, Country, PreviousSchool, HighestQualification, QualificationImage, CourseID, Password) 
                                    VALUES (:title, :firstName, :lastName, :gender, :dob, :email, :phone, :city, :country, :previousSchool, :highestQualification, :qualificationImage, :courseID, :password)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':country', $country);
            $stmt->bindParam(':previousSchool', $previousSchool);
            $stmt->bindParam(':highestQualification', $highestQualification);
            $stmt->bindParam(':qualificationImage', $fileName);
            $stmt->bindParam(':courseID', $courseID, PDO::PARAM_INT); 
            $stmt->bindParam(':password', $password);

            $stmt->execute();
            echo "Enrollment successful!";
        } catch(PDOException $e) {
            echo "Database connection or query error: " . $e->getMessage();
        }
    } else {
        echo "File upload failed.";
    }

    $conn = null; // Close the connection
}
?>
