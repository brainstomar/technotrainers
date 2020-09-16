<?php 
session_start(); 
// var_dump($_SESSION['loggedin']);
// die;

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

<body>

    <!-- ======= Header ======= -->
    <!-- """""""""my code modification" -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.php">Techno-Trainers</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <!-- <li><a href="about.html">About</a></li> -->
                    <li><a href="blogs.php">Blogs</a></li>
                    <!-- <li><a href="trainers.html">Trainers</a></li> -->
                    <li><a href="https://techno-trainers.yoo7.com/">Forum</a></li>
                    <li><a href="courses.php">Next Batches</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Sign in</a></li>
                    <li><a href="Announcements.php" class="Announcements">
                            <!-- <img src="{% static 'assets/img/about.jpg' %}" /> -->
                            <img src="assets/img/Bell.jpg" class="img-fluid" alt="">
                        </a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

            <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

        </div>
    </header>

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
                    <p>Course Detail</p>
                </div>

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <a href="iRPA_DETAIL.php">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item" href="iRPA_DETAIL.php">
                                <!-- <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." href="iRPA_DETAIL.html"> -->

                                <div class="course-content" >


                                    <h3><a href="iRPA_DETAIL.php" class="d-flex justify-content-between align-items-center mb-3">Current Batch</a></h3>
                                    <p>You can join the current batch which is on-going and cover missed classed by Videos.</p>
                                    <p class="d-flex justify-content-between align-items-center mb-3">
                                        Start Date:  3rd Aug 2020<br>
                                        Expected End Date:  10th Oct 2020<br>
                                        Weekdays 7-8 AM India time<br>
                                        Duration : 40 Hours</p>

   

                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    </a>
                    <a href="UI5_B.php">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item" href="iRPA_DETAIL.php">
                                <!-- <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." href="iRPA_DETAIL.html"> -->

                                <div class="course-content" >


                                    <h3><a href="iRPA_DETAIL.php" class="d-flex justify-content-between align-items-center mb-3">Next Batch
                                    </a></h3>
                                    <p>Wait for next available LIVE batch</p>
                                    <p class="d-flex justify-content-between align-items-center mb-3">
                                        Expected Start Date: 10th Oct 2020<br>
                                        Timings will be Weekdays 7-8 AM IST<br>
                                        Duration: 20 Hours<br></p>


                                </div>
                            </div>
                        </div> 
                    </a>
                    <a href="UI5_B.php">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item" href="iRPA_DETAIL.php">
                                <!-- <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." href="iRPA_DETAIL.html"> -->

                                <div class="course-content" >


                                    <h3><a href="iRPA_DETAIL.php" class="d-flex justify-content-between align-items-center mb-3">Video Recordings</a></h3>
                                    <p>Start your learning instantly with our video mode of training.</p>
                                    <p class="d-flex justify-content-between align-items-center mb-3">
                                        Please make the payment and get the access of videos,<br>
                                        Access will last fro 8 months from the day of payment.<br>
                                         Check course screenshot below.</p>



                                </div>
                            </div>
                        </div> 
                    </a>
                </div>

                <!-- <a href="FIORI_CDS.html">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><a href="FIORI_CDS.html" class="learn-more-btn">SAP CDS with FIORI Elements</a></h4>

                    <p class="price">$115</p>
                  </div>

                  <h3><a href="FIORI_CDS.html">SAP CDS with FIORI Elements</a></h3>
                  <p>With CDS & FIORI Elements, you can explore reporting applications, with beautiful user interfaces,
                    Dashboard & UX strategies.
                    Our Participants will deeply understand, & implement list report , analytical list page & over view
                    page
                    in FIORI elements.
                  </p>

                </div>
              </div>
            </div> End Course Item
        </a>

         <a href="course-details.html">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>SAP CPI </h4>
                  <p class="price">$115</p>
                </div>

                <h3><a href="course-details.html">SAP Cloud Platfom Intigration</a></h3>
                <p>This course is designed for integration designers and developers with design and development
                  responsibilities for building integration from and to Cloud applications.
                  This course includes intensive hands-on exercises to get a fundamental understanding of SAP CP
                  Integration. Participants will learn i.a. how to create integration flows.
                </p>

              </div>
            </div>
          </div>  End Course Item-->
                <!-- </a> -->

                <!-- </div> -->

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
                            <strong>Phone:</strong> +19- 9974345983<br>
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