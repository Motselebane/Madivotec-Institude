<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MADIVoTEC Institute</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>
    <div class="logo-container">
        <img src="images/MADIVOTEC_LOGO.png" alt="School Logo" class="logo">
        <div class="school-name">
            <p class="no-space">MADIVoTEC<br>INSTITUTE</p>
            <hr>
        </div>
    </div>
    <nav>
        <div class="hamburger" id="hamburger">
            <span><li><a href="Admin-login.php">Admin-Login</a></li></span>
            <span><li><a href="student-login.php">student-login</a></li></span>
            <span><li><a href="#about">About Us</a></li></span>
            <span> <li><a href="#contact">Contact Us</a></li></span>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="Admin-login.php">Admin-Login</a></li>
            <li><a href="student-login.php">student-login</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
       
        </ul>
    </nav>
</header>

<section id="hero">
    <div class="hero-text">
        <h1>Welcome to MADIVoTEC Institute</h1>
        <p>Enroll in one of our many courses and take the first step towards a brighter future.</p>
        <button onclick="location.href = 'Enrollment-Form.php'">Register Now</button>
    </div>
</section>

<!-- Programmes section -->
<section id="programmes" class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center mb-4">Programmes</h2>
    <p class="text-lg text-gray-700 mb-8 text-center">Our institute offers a wide range of programmes across various departments:</p>

    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h3 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">Department of Vocational, Manufacturing and Design (DeVMD)</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Design and Sewing Clothes Technology</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Diploma in Design and Sewing Clothes Technology</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Carpentry and Joinery</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Diploma in Carpentry and Joinery</div>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h3 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">Department of Engineering (DE)</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Engineering Basics</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Diploma in Mechanical Engineering</div>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h3 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">Department of Computer, Technology and Digital Innovations (DeCoTeDi)</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Information Technology</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Diploma in Information Technology</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Computer Basics and Office Packages</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Computer Repair and Maintenance</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Graphic Designing</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in 3D Animation</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Mobile App Development</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Website Design and Web Development</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Motion Graphics</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in CCTV Camera Installation and Repair</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Certificate in Artificial Intelligence</div>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h3 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">Department of Research, Consultation, Advancement and Sustainability (DeRCAS)</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Research Services</div>
            <div class="bg-gray-100 p-4 rounded-md hover:bg-gray-200 transition duration-300">Consultative Services</div>
        </div>
    </div>
</section>

<!-- Short Courses Section -->
<section id="short-courses">
    <h2>Short Courses</h2>

    <div class="card">
        <h3>Certificate in Design and Sewing Clothes Technology</h3>
        <p class="description">
           This course is designed to equip students with the foundational skills needed for the fashion and garment industry. Students will learn the art of designing and sewing clothes, including pattern making, fabric selection, and garment construction. The course combines both creative design and practical sewing techniques, allowing students to bring their fashion ideas to life. Upon completion, students will be prepared for entry-level positions in fashion design, tailoring, or to start their own clothing line
        </p>
        <button class="read-more">Read More</button>
    </div>

    <div class="card">
        <h3>Certificate in Film and Media Production</h3>
        <p class="description">
        This course offers a comprehensive introduction to the world of film and media production. Students will gain hands-on experience in scriptwriting, cinematography, video editing, and sound production. The course covers the entire production process from pre-production planning to post-production editing. Graduates will be equipped with the skills necessary to work in various roles within the film and media industry, including as a filmmaker, editor, or media content creator.
        </p>
        <button class="read-more">Read More</button>
    </div>

    <div class="card">
        <h3>Certificate in Catering and Hospitality</h3>
        <p class="description">
        This course provides students with the essential knowledge and skills required for a successful career in the catering and hospitality industry. The curriculum covers food preparation, menu planning, kitchen management, and customer service. Students will also learn about the principles of hospitality and how to deliver exceptional dining experiences. Whether aspiring to work in a restaurant, hotel, or start a catering business, graduates will be well-prepared to excel in the dynamic field of catering and hospitality.
        </p>
        <button class="read-more">Read More</button>
    </div>

    <div class="card">
        <h3>Certificate in Entrepreneurship and Innovations</h3>
        <p class="description">
        This course is designed for aspiring entrepreneurs who want to develop their business ideas and turn them into successful ventures. The curriculum covers essential topics such as business planning, marketing, finance, and innovation strategies. Students will learn how to identify business opportunities, create value, and manage the challenges of starting and growing a business. The course also emphasizes creativity and innovation, encouraging students to think outside the box and develop innovative solutions for the marketplace
        </p>
        <button class="read-more">Read More</button>
    </div>
</section>

<style>
    .card {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f8f9fa;
    }

    .description {
        height: 3em;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        transition: height 0.3s ease;
    }

    .description.expanded {
        height: auto;
        white-space: normal;
    }

    .read-more {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }
</style>

<script>
    document.querySelectorAll('.read-more').forEach(button => {
        button.addEventListener('click', () => {
            const description = button.previousElementSibling;
            description.classList.toggle('expanded');
            button.textContent = description.classList.contains('expanded') ? 'Read Less' : 'Read More';
        });
    });
</script>


<!-- Admissions section -->
<section id="admissions">
    <h2>Admissions Guidelines</h2>
    <p>The following are requirements for admission to the MADIVoTEC Certificates and Diploma Program 
Admissions Application form available online.
A telephone interview may constitute part of the admissions process at the request of the Admissions and Review Committee or of the applicant.
A curriculum vitae/resume that provides an overview of education, work, and other professional activities.-apply for those who have been employed
A certificate of secondary/Colleges or its equivalent from a recognized school/college.
Student Entry Requirements for Online Courses: fee as indicated in the course, Internet Access and Data Smart Device i.e. Smart Phone, tablet or computer
.</p>
    <p><a href="FeeStructure.php" style="color:#007bff; ">Click Here for Fee Structure</a></p>
    <p>Scholarship...</p>
</section>
<section id="apply">
    <h2>Apply</h2>
    <p>New Student...</p>
    <p>MADIVoTEC Student Cabinet...</p>
</section>
<section id="contact">
    <h2>Contact</h2>    
    <p> please call toll free at <strong>+266 56688867</strong></p>
    <p> send your request online via our email: <a href="mailto:MADIVoTECInstitute@gmail.com" style="color: #007bff; ">MADIVoTECInstitute@gmail.com</a></p>
    <p><a href="FeeStructure.php" style="color: #007bff; ">Click Here for Fee Structure</a></p>

</section>
<!-- About us section -->
<section id="about">
<h1>About MADIVoTEC Institute</h1>

<p>MADIVoTEC Institute is a leading community college in Arusha, Tanzania, preparing students for the global economy with practical and experiential learning opportunities.</p>
        <p>MADIVoTEC Institute is an integral institute of the Malengo Development Foundation of Arusha, Tanzania, with a campus in Usa-river Arusha. We consistently rank as one of Arusha’s leading community colleges, offering a range of certificate and diploma programs, short courses, and consultation services.</p>

        <h2>Our Mission</h2>
        <p>Our mission is to provide relevant, practical, and experiential learning opportunities that prepare our students for success in the global economy.</p>

        <h2>Leadership</h2>
        <p>Our institute is led by a team of experienced professionals dedicated to academic excellence and student success.</p>

        <h2>Collaborators and Partners</h2>
        <p>We collaborate with various industry partners to provide our students with real-world learning experiences.</p>

        <h2>Alumnae</h2>
        <p>Our alumnae are making a significant impact in various fields across the globe, contributing to the development of their communities.</p>
</section>

<footer>   
    <p>&copy; 2024 MADIVoTEC Institute. All Rights Reserved.</p>
     <p>Developed by Motselebane</p>
</footer>

<script>
    document.getElementById('hamburger').addEventListener('click', function () {
        document.getElementById('nav-links').classList.toggle('active');
    });
</script>
</body>
</html>
