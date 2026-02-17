<?php
include 'db-connection.php';

try {
    // Add Image column to courses table
    $sql = "ALTER TABLE courses ADD COLUMN Image VARCHAR(255) DEFAULT NULL";
    $conn->exec($sql);
    echo "Image column added successfully.<br>";

    // Update courses with image paths based on CourseName
    $imageMappings = [
        'Certificate in Design and Sewing Clothes Technology' => 'images/Certificate in Design and Sewing Clothes Technology.jpg',
        'Certificate in Film and Media Production' => 'images/Certificate in Film and Media Production.jpg',
        'Certificate in Catering and Hospitality' => 'images/Certificate in Catering and Hospitality.jpg',
        'Certificate in Entrepreneurship and Innovations' => 'images/Certificate in Entrepreneurship and Innovations.jpg',
        'Certificate in Engineering Basics' => 'images/Certificate in Engineering Basics.jpg',
        'Diploma in Mechanical Engineering' => 'images/Diploma in Mechanical Engineering.jpg',
        'Certificate in Information Technology' => 'images/Certificate in Information Technology.jpg',
        'Diploma in Information Technology' => 'images/Diploma in Information Technology.jpg',
        'Certificate in Computer Basics and Office Packages' => 'images/Certificate in Computer Basics and Office Packages.jpg',
        'Certificate in Computer Repair and Maintenance' => 'images/Certificate in Computer Repair and Maintenance.jpg',
        'Certificate in Graphic Designing' => 'images/Certificate in Graphic Designing.jpg',
        'Certificate in 3D Animation' => 'images/Certificate in 3D Animation.jpg',
        'Certificate in Mobile App Development' => 'images/Certificate in Mobile App Development.jpg',
        'Certificate in Website Design and Web Development' => 'images/Certificate in Website Design and Web Development.jpg',
        'Certificate in Motion Graphics' => 'images/Certificate in Motion Graphics.jpg',
        'Certificate in CCTV Camera Installation and Repair' => 'images/Certificate in CCTV Camera Installation and Repair.jpg',
        'Certificate in Artificial Intelligence' => 'images/Certificate in Artificial Intelligence.jpg',
        'Diploma in Design and Sewing Clothes Technology' => 'images/Diploma in Design and Sewing Clothes Technology.jpg',
        'Certificate in Carpentry and Joinery' => 'images/Certificate in Carpentry and Joinery.jpg',
        'Diploma in Carpentry and Joinery' => 'images/Diploma in Carpentry and Joinery.jpg',
        'Research Services' => 'images/Research Services.jpg',
        'Consultative Services' => 'images/Consultative Services.jpg',
        'Web Development' => 'images/Web Development.jpg',
        'Mechanical Engineering' => 'images/Mechanical Engineering.jpg',
    ];

    foreach ($imageMappings as $courseName => $imagePath) {
        $stmt = $conn->prepare("UPDATE courses SET Image = :image WHERE CourseName = :courseName");
        $stmt->bindParam(':image', $imagePath);
        $stmt->bindParam(':courseName', $courseName);
        $stmt->execute();
    }

    echo "Images updated successfully.<br>";

    // Add more courses if needed, but for now, assume existing are sufficient

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
