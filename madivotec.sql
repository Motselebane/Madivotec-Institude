-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2026 at 08:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madivotec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AdminID`, `Username`, `Password`) VALUES
(1, 'admin', '$2y$10$0wzUvqhI7SjhdZMLAMs13e4gIgmqIjHqPf50zdv9.X7CM.qdDbqFi');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseCategory` varchar(100) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `CourseDescription` varchar(350) NOT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `Fee` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseCategory`, `CourseName`, `CourseDescription`, `Duration`, `Fee`) VALUES
(1, 'IT', 'Web Development', 'Learn to build websites', '3 Months', 'TZS 708,500, USD 300'),
(2, 'Engineering', 'Mechanical Engineering', 'Introduction to mechanical engineering principles', '3 Years', NULL),
(5, 'DE', 'Certificate in Engineering Basics', 'A certificate course covering the basics of engineering principles.', '6 Months', NULL),
(6, 'DE', 'Diploma in Mechanical Engineering', 'An advanced diploma in mechanical engineering.', '1 Year', NULL),
(7, 'DeCoTeDi', 'Certificate in Information Technology', 'A foundational course in Information Technology.', '3 Months', NULL),
(8, 'DeCoTeDi', 'Diploma in Information Technology', 'An advanced diploma in IT covering various technologies.', '36 weeks', 'TZS 650,000'),
(9, 'DeCoTeDi', 'Certificate in Computer Basics and Office Packages', 'A certificate course covering basic computer skills and office software.', '12 weeks', 'TZS 495,000'),
(10, 'DeCoTeDi', 'Certificate in Computer Repair and Maintenance', 'A course teaching skills for computer repair and maintenance.', '12 weeks', 'TZS 495,000'),
(11, 'DeCoTeDi', 'Certificate in Graphic Designing', 'Graphic designers create visual concepts to communicate ideas that inspire, inform or captivate consumers. The graphic design industry has been evolved with the requirement of more presentable designs due to which we have updated the program with the latest tools and technologies so that students can create outstanding artworks. This program is div', '12 weeks', 'TZS 495,000'),
(12, 'DeCoTeDi', 'Certificate in 3D Animation', 'A course providing skills in 3D animation.', '12 weeks', 'TZS 495,000'),
(13, 'DeCoTeDi', 'Certificate in Mobile App Development', 'A course focused on developing mobile applications.', '12 weeks', 'TZS 495,000'),
(14, 'DeCoTeDi', 'Certificate in Website Design and Web Development', 'A comprehensive course on website design and development.', '12 weeks', 'TZS 495,000'),
(15, 'DeCoTeDi', 'Certificate in Motion Graphics', 'A course focusing on creating motion graphics.', '12 weeks', 'TZS 495,000'),
(16, 'DeCoTeDi', 'Certificate in CCTV Camera Installation and Repair', 'A course teaching CCTV camera installation and repair.', '36 weeks', 'TZS 650,000'),
(17, 'DeCoTeDi', 'Certificate in Artificial Intelligence', 'An introductory course to artificial intelligence concepts.', '3 Months', NULL),
(18, 'DeRCAS', 'Research Services', 'A service offering detailed research methodologies and applications.', NULL, NULL),
(19, 'DeRCAS', 'Consultative Services', 'Consultative services focused on advancement and sustainability practices.', NULL, NULL),
(20, 'Short Courses', 'Certificate in Design and Sewing Clothes Technology', 'A short course providing basic skills in design and sewing technology.', '16 weeks', 'TZS 445,000'),
(21, 'Short Courses', 'Certificate in Film and Media Production', 'This course is designed to teach you the ins and outs of professional cinematography and the art of making motion pictures. While there are plenty of video courses, it’s hard to find a comprehensive course that teaches you everything you’d want to know about shooting video. This course provides a foundation in critical media analysis while empoweri', '3 Months', 'TZS 940,000, USD 330'),
(22, 'Short Courses', 'Certificate in Catering and Hospitality', 'There is a high demand for skilled and knowledgeable people in all areas of the catering and hospitality industry, especially in the hotel, food, beverage, and accommodations sectors. You will learn about a variety of topics – cookery, accommodations management, food and beverage management, specialized marketing, conferencing and banqueting, and f', '16 weeks', 'TZS 495,000'),
(23, 'Short Courses', 'Certificate in Entrepreneurship and Innovations', 'A course on entrepreneurship focusing on starting, growing, and scaling a business.', '36 weeks', 'TZS 895,000'),
(100, 'DeVMD', 'Certificate in Design and Sewing Clothes Technology', 'A course designed to provide practical skills in design and sewing technology.', '16 weeks', 'TZS 445,000'),
(200, 'DeVMD', 'Diploma in Design and Sewing Clothes Technology', 'An advanced program focusing on the comprehensive aspects of design and sewing.', '1 Year', NULL),
(300, 'DeVMD', 'Certificate in Carpentry and Joinery', 'A foundational course in carpentry and joinery.', '6 Months', NULL),
(400, 'DeVMD', 'Diploma in Carpentry and Joinery', 'Develop knowledge and practical skill in areas of carpentry, including blueprint reading, residential and commercial construction, framing, finishing, stair manufacture, surveying, fine woodworking, commercial building practices, and more. Spend 1/3 of each week in a hands-on carpentry lab setting.', '36 weeks', 'TZS 895,000'),
(401, 'Computing', 'computer science', 'A degree course ', '4 years', '40 USD');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `EnrollmentID` int(11) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `CourseID` int(11) DEFAULT NULL,
  `EnrollmentDate` date DEFAULT curdate(),
  `Status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`EnrollmentID`, `StudentID`, `CourseID`, `EnrollmentDate`, `Status`) VALUES
(1, 2, 1, '2024-08-10', 'Approved'),
(2, 3, 2, '2024-08-11', 'Approved'),
(4, 6, 16, '2024-08-13', 'Rejected'),
(5, 7, 16, '2024-08-13', 'Approved'),
(6, 8, 12, '2024-08-13', 'Approved'),
(7, 9, 16, '2024-08-14', 'Pending');

--
-- Triggers `enrollments`
--
DELIMITER $$
CREATE TRIGGER `before_insert_enrollment` BEFORE INSERT ON `enrollments` FOR EACH ROW BEGIN
  IF NEW.EnrollmentDate IS NULL THEN
    SET NEW.EnrollmentDate = CURRENT_DATE();
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentID` int(11) NOT NULL,
  `Title` varchar(10) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `PreviousSchool` varchar(100) DEFAULT NULL,
  `HighestQualification` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `qualification_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentID`, `Title`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`, `Email`, `Phone`, `PreviousSchool`, `HighestQualification`, `password`, `city`, `country`, `qualification_image`) VALUES
(1, 'Mr', 'John', 'Doe', 'Male', '1990-01-01', 'john.doe@example.com', '1234567890', 'High School', 'High School Diploma', NULL, '', '', NULL),
(2, 'Mr', 'Lethole', 'Motselebane', 'Male', '2024-08-23', 'letholemotselebane@gmail.com', '50592402', 'Sefika high school', 'LGCSE certificate', NULL, '', '', NULL),
(3, 'Mrs', 'Mapaseka', 'Motselebane', 'Female', '2008-03-21', 'mapasekamotselebane@gmail.com', '59383930', 'Tsoelo-pele', 'PSLE', '$2y$10$a8NAWb.kYC1T1ZZPWZ9rAO3OjAn52BCftfKlp0tRlg5vxmAvJy3..', '', '', NULL),
(4, 'Ms', 'Lerato', 'Nakeli', 'Female', '2024-08-22', 'lerato@gmail.com', '5', 'Tsoelo-pele', 'LGCSE certificate', '$2y$10$DZei3.1xkLjVmewf4gl5eeeUt.3.BbZ/ZPfUe6rdHrLM7LOqd5Fpm', 'Maseru', 'Lesotho', 'shoe1.jpeg'),
(6, 'Mr', 'Neo', 'Piti', 'Male', '2024-08-23', 'neopiti@gmail.com', '+266 50592402', 'Leqele High school', 'LGCSE certificate', '$2y$10$5tW98/hDEz5vJn80ts2ICuivWo2v.3sqWNBtIJGu8VK/upeRUVwNy', 'Maseru', 'Lesotho', 'belt1.jpeg'),
(7, 'Mr', 'Pule', 'Koali', 'Male', '1999-11-24', 'koali@gmail.com', '+266 50566643', 'Leqele', 'LGCSE certificate', '$2y$10$C8Jxcpd93i87Ys26dqELduR33I2hIkO4SgYzWGtgzk1BBVJBs.wPy', 'Mafeteng', 'Lesotho', 'belt6.jpeg'),
(8, 'Mr', 'Sello', 'Sello', 'Male', '2000-06-14', 'sello@gmail.com', '+266 59994343', 'Qoaling High school', 'LGCSE certificate', '$2y$10$K7yusiLsEYrhCrg9v4WU8OwPGarQ.3azdwQzka5tNuZ.7nI6ER862', 'Leribe', 'Lesotho', 'pant7.jpeg'),
(9, 'Mr', 'Lee', 'Lee', 'Male', '2024-08-23', 'lee@gmail', '+27 3332434', 'Sefika High school', 'LGCSE certificate', '$2y$10$qZVYzX8gW7fuytvCnh10x.RHWRUZBH0bJixCDcBkQD/BIkmjEFTKm', 'Maseru', 'Lesotho', 'had4.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`EnrollmentID`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `EnrollmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `students` (`StudentID`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
