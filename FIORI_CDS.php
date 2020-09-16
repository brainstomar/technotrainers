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

    <title>Course Details - SAP UI5</title>
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
                    <!-- <li><a href="trainers.html">Trainers</a></li> -->
                    <!-- <li><a href="events.html">Forum</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li class="drop-down"><a href="">Courses</a>
            <ul>
              <li><a href="iRPA.html">iRPA</a></li>
              <li class="drop-down"><a href="#">ABAP</a>
                <ul>
                  <li><a href="#">ABAP Webdynpro</a></li>
                  <li><a href="#">ABAP S4 Hana</a></li>
                  <li><a href="#">OO ABAP</a></li>
                  <li><a href="#">BRM</a></li>
                  <li><a href="#">HR ABAP</a></li>
                </ul>
              </li> -->
                    <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
                    <!-- <li><a href="#">SAP PI/PO</a></li>
              <li><a href="#">SAP UI5</a></li>
              <li><a href="#">SAP CPI / HCI</a></li> -->
                    <!-- <li><a href="#">Deep Drop Down 5</a></li> -->
                    <!-- </ul>
          </li> -->
                    <li><a href="contact.php">Contact</a></li>
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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>SAP FIORI & CDS</h2>
                <p>CDS views are from a similar concept to ABAP dictionary views:
                    they provide pre-defined SQL queries to one or more database tables.
                    This allows for effectively and comfortably connecting to and accessing data.
                    However, an ABAP CDS view can do a lot more than an ABAP dictionary view
                </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Cource Details Section ======= -->
        <section id="course-details" class="irpa">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="assets/img/CDS.png" class="img-fluid" alt="" height="500" width="500">
                        <h5>This Course describes the functionality and usage of tools for Core Data Services (CDS)
                            within ABAP development for SAP HANA scenarios. In particular, it focuses on use cases for
                            creating, editing, testing, and analyzing ABAP CDS entities - starting from the
                            Eclipse-based IDE.

                        </h5>
                        <!-- <p>
                            Cloud deployment
                            Future-proof core for ongoing relevance
                            APIs that are designed to improve bot performance and continuity
                            Automation with prebuilt bots for SAP software
                        </p> -->
                    </div>
                    <div class="col-lg-4">

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Start Date</h5>
                            <p><a href="#">10th Oct 2020</a></p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Timings</h5>
                            <p>7:30 AM to 10:00 AM IST</p>
                            <!-- <p>(Saturday  & Sunday)</p> -->
                        </div>
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Course Type</h5>
                            <p>Weekend Course(SAT & SUN) </p>
                            <!-- <p>(Saturday  & Sunday)</p> -->
                        </div>
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Course Duration</h5>
                            <p>4 Weeks (20 hours)</p>
                        </div>
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Training Mode</h5>
                            <p>Online</p>
                        </div>


                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Course Fee</h5>
                            <p>$115.00</p>
                        </div>




                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5></h5>
                            <a href="https://rzp.io/l/mO8QpaN" class="btn-buy">Pay Now</a>
                        </div>



                    </div>
                </div>

            </div>
        </section><!-- End Cource Details Section -->

        <!-- ======= Cource Details Tabs Section ======= -->
        <section id="cource-details-tabs" class="cource-details-tabs">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">

                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                    Description</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">Audiance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">Course Content</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">Demo Video</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Description</h3>
                                        <h6>Automate repetitive manual processes by
                                            creating,
                                            scheduling,
                                            managing,
                                            and monitoring intelligent bots.
                                            With SAP Intelligent Robotic Process Automation (SAP Intelligent RPA)
                                            services, you can
                                            redirect resources toward high-value activities and processes</h6>
                                        <p>

                                            <!-- <iframe width="500" height="215"
                                                src="https://videos.cdn.sap.com/vod/2019/what-is-sap-intelligent-robotic-process-automation.mp4"
                                                frameborder="1"  allowfullscreen>
                                            </iframe> -->
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <!-- <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">

                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Audience</h3>
                                        <p>• Application Consultant</p>
                                        <p>• Business Process Architect</p>
                                        <p>• Business Process Owner/Team Lead/Power User</p>
                                        <p>• Developer</p>
                                        <p>• Development Consultant</p>
                                        <p>• Solution Architect</p>
                                        <p>• System Architect</p>
                                        <p>• Technology Consultant</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <!-- <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid"> -->
                                    </div>
                                </div>


                            </div>

                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Course Content</h3>
                                        <div class="divTable blueTable">
                                            <div class="divTableHeading">
                                                <div class="divTableRow">
                                                    <div class="divTableHead">Topic</div>
                                                    <div class="divTableHead">Duration (Hours)</div>

                                                </div>
                                            </div>
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong>&nbsp;What is CDS?
                                                        </strong>
                                                    </div>
                                                    <div class="divTableCell"><strong>2.5 Hrs</strong></div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp; &nbsp;SAP CDS overview
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;What are the
                                                        benefits of CDS ?
                                                    </div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;how is CDS used
                                                        in Real Time
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;Register the
                                                        oData services based on your CDS View
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>




                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong>Hands On CDS</strong>
                                                    </div>
                                                    <div class="divTableCell"><strong>2 Hrs</strong></div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;Tools for
                                                        creating CDS
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;Annotations in
                                                        CDS
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;Creating View in
                                                        CDS
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;Joins in CDS
                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;Associations in
                                                        CDS

                                                    </div>
                                                    <div class="divTableCell">&nbsp;</div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong> List report Application in SAP
                                                            Fiori using CDS
                                                        </strong>
                                                    </div>
                                                    <div class="divTableCell"><strong>2 Hrs
                                                        </strong></div>
                                                </div>
                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong> create Overview Page in SAP Fiori
                                                            using CDS
                                                        </strong>
                                                    </div>
                                                    <div class="divTableCell"><strong>3 Hrs
                                                        </strong></div>
                                                </div>

                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong>Create Analytical List Page in SAP
                                                            Fiori using CDS
                                                            tricks
                                                        </strong>


                                                    </div>
                                                    <div class="divTableCell"><strong>3.5 Hours</strong></div>
                                                </div>

                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong> Annotation Modeler in SAP Fiori
                                                            Apps
                                                        </strong>


                                                    </div>
                                                    <div class="divTableCell"><strong>3.5 Hours</strong></div>
                                                </div>

                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong>Deploy and SAP FIORI App in SAP
                                                            Fiori Launchpad
                                                        </strong>


                                                    </div>
                                                    <div class="divTableCell"><strong>3.5 Hours</strong></div>
                                                </div>

                                                <div class="divTableRow">
                                                    <div class="divTableCell"><strong>
                                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                        Total Hours
                                                        </strong>


                                                    </div>
                                                    <div class="divTableCell"><strong>20 Hours</strong></div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- <div class="blueTable outerTableFooter">
                                            <div class="tableFootStyle">
                                                <div class="links"><a href="#">&laquo;</a> <a class="active"
                                                        href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a
                                                        href="#">4</a> <a href="#">&raquo;</a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- " code to embed table" -->
                                        <!-- <p>* SAP Intelligent RPA Overview</p>
                                        <p>* SAP iRPA Components overview</p>
                                        <p>* Cloud Factory overview</p>
                                        <p>* Overview of Dekstop Agent and Desktop Studio</p>
                                        <p>* Setup and configuration of iRPA components</p>
                                        <p>* SAP Intelligent RPA Overview</p> -->
                                        <!-- <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                            quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima
                                            molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam.
                                            Soluta et harum voluptatem optio quae</p> -->
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <!-- <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Demo Class </h3>
                                        <p>This is just a demo class. For complete course please enroll now.</p>
                                        <p>

                                            <!-- <iframe width="500" height="215"
                                                src="https://videos.cdn.sap.com/vod/2019/what-is-sap-intelligent-robotic-process-automation.mp4"
                                                frameborder="1" auto>
                                            </iframe> -->
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <!-- <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid"> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                            quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                            recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui
                                            quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                       <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid"> -->
                            <!-- </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Cource Details Tabs Section -->
        <!-- End Cource Details Tabs Section -->

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

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

                    <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <!-- <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div> -->
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