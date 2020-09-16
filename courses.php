<?php
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Mentor Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color:#F8F8F8;">

  <!-- ======= Header ======= -->
  <!-- """""""""my code modification" -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <a href="index.php" ><img src="assets/img/finallogo.jpeg" alt="" style="width:22%;height:auto;"></a>

      <h1 class="logo mr-auto"><a href="index.php"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <!-- <li><a href="about.html">About</a></li> -->
          <!-- <li><a href="blogs.html">Blogs</a></li> -->
          <!-- <li><a href="trainers.html">Trainers</a></li> -->
          <!-- <li><a href="https://techno-trainers.yoo7.com/">Forum</a></li> -->
          <li class="active"><a href="courses.php"  >Next Batches</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php if($_SESSION['loggedin']): ?>
          <li><a href="logout.php">Logout</a></li>
          <?php else: ?>
          <li><a href="login.php">Sign in</a></li>
          <?php endif; ?>   
          <li><a href="Announcements.php" class="Announcements">
              <!-- <img src="{% static 'assets/img/about.jpg' %}" /> -->
              <!-- <img src="assets/img/Bell.jpg" class="img-fluid" alt=""> -->
            </a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

    </div>
  </header>
<br>
  <!-- """""""""my code modification" -->
  <!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
   
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Discover Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100" >
          <a href="iRPA.php">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item" href="iRPA.php">
                <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." href="iRPA.php">

                <div class="course-content" style="background-color:white;">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>iRPA</h4>
                    <p class="price">$115.00</p>
                  </div>
                  <h3><a href="iRPA.php">iRPA -
                      SAP Intelligent Robotic Process Automation</a></h3>
                  <p>Automate your business by emulating your users. ... Automate repetitive manual processes by
                    creating,
                    scheduling, managing, and monitoring intelligent bots.
                    With SAP Intelligent Robotic Process Automation services,you can redirect resources toward
                    high-value
                    activities and processes. </p>

                </div>
              </div>
            </div> <!-- End Course Item-->
          </a>



          <a href="course-details.php">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content" style="background-color:white;">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>SAP CPI </h4>
                  <p class="price">$115</p>
                </div>

                <h3><a href="course-details.php">SAP Cloud Platfom Intigration</a></h3>
                <p>This course is designed for integration designers and developers with design and development
                  responsibilities for building integration from and to Cloud applications.
                  This course includes intensive hands-on exercises to get a fundamental understanding of SAP CP
                  Integration. Participants will learn i.a. how to create integration flows.
                </p>

              </div>
            </div>
          </div> 
        </a>
          <!---
          <a href="UI5_B.php">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="course-item">

                <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><a href="UI5_B.php">SAP UI5 & FIORI</a></h4>
                    <p class="price">$115</p>
                  </div>

                  <h3><a href="course-details.php">SAP UI5 & FIORI (Basic)</a></h3>
                  <p>SAP UI5 is a next generation Mobility module in SAP,
                    it helps business to migrate their complete business cycle on-to mobiles & portable devices
                    (Mobiles & Tablets, desktops and smart devices).

                  </p>

                </div>

              </div>
            </div> 
          </a>
          --->
         <!-- End Course Item-->
         <!--
          <a href="UI5_B.php">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>SAP UI5 & FIORI (Advance)</h4>
                    <p class="price">$115</p>
                  </div>

                  <h3><a href="course-details.php">SAP UI5 & FIORI (Advance)</a></h3>
                  <p>We provide participants to explore on functionalities like file upload, Batch operations, smart
                    controls and annotations in UI5 & oData Gate way services.</p>

                </div>
              </div>
            </div> 
          </a>
          --->
          <!-- End Course Item-->
        </div>

          <!---
        <a href="FIORI_CDS.php">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><a href="FIORI_CDS.php" class="learn-more-btn">SAP CDS with FIORI Elements</a></h4>

                    <p class="price">$115</p>
                  </div>

                  <h3><a href="FIORI_CDS.php">SAP CDS with FIORI Elements</a></h3>
                  <p>With CDS & FIORI Elements, you can explore reporting applications, with beautiful user interfaces,
                    Dashboard & UX strategies.
                    Our Participants will deeply understand, & implement list report , analytical list page & over view
                    page
                    in FIORI elements.
                  </p>

                </div>
              </div>
            </div> 
        </a>
            --->
            <!-- End Course Item-->

      </div>


      </div>
    </section><!-- End Popular Courses Section -->
        


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Techno Trainer</h3>
            <p>
              Brians Cubes Innovation Labs<br>
              Gift-city , Gandhinagar<br>
              Gujarat<br><br>
              <strong>Phone:</strong>+966 5459 07701 <br>
              <strong>Email:</strong> info@techno-trainers.com<br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact"></div>
          <div class="col-lg-4 col-md-6 footer-contact"></div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Forum</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Next Batches</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>



        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">


      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>