<?php 
session_start(); 
// var_dump($_SESSION['loggedin']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Techno - Trainers - Next Gen Trainings</title>
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

  <!-- <link rel="import" href="header.html"> -->
</head>

<body>



  <!-- """""""""my code modification" -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <a href="index.php" ><img src="assets/img/finallogo.jpeg" alt="" style="width:22%;height:10%;"></a>
    <h1 class="logo mr-auto"><a href="index.php"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <!-- <li><a href="about.html">About</a></li> -->
          <!-- <li><a href="blogs.html">Blogs</a></li>
           <li><a href="trainers.html">Trainers</a></li> -->
          <!-- <li><a href="https://techno-trainers.yoo7.com/">Forum</a></li> --> 
          <li><a href="courses.php">Next Batches</a></li>
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


  <!-- """""""""my code modification" -->




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <!-- <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2><p>We are team of talanted trainers </p><p>
         helping you to shape up the future</p></h2>
      <a href="pricing.html" class="btn-get-started">Get Started</a>
    </div> -->

    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Why Techno Trainers?</h1>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Real time practice while class </h2>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Live intractive Trainings </h2>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Whatsapp Group for participants </h2>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Video recording shared on same day </h2>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Topics coverd / contents shared on daily basis </h2>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Weekly assignment for practice</h2>
      <h2><img src="assets/img/Blue.png" height="30" width="30" >&nbsp;&nbsp;Real time practice while class </h2>
      </h2>
    
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <br>
            <div class="container">
              <div class="card">
              <div class="card-body">
              At Techno-Trainers, we believe and trust in providing quality training at affordable prices, our prime objective is customer satisfaction.
      we give our best in providing the candidates and train them about what exactly the current market demands.
      we have successfully delivered trainings in various SAP Modules focusing on Niche Platforms with best quality and affordability.
      Along with the training with complete hands - on, we provide study Material, Assignments with solution documents.
              </div>
            </div>
            </div>
            <br><br>
            
            <div class="container">
              <div class="card">
                <div class="card-body">
                <b>Below are the key highlights:</b>
                <br>
                  <ul> 
                   <li>
                   Recordings are provided on the same day of trainings. 
                   </li>
                   <li>
                   WhatsApp group of all the participants is created. 
                   </li>
                   <li>
                   Study Material provided of every topic covered in the course Content. 
                   </li>
                   <li>
                   Assignment and solution documents are provided. 
                   </li>
                   <li>
                   Sessions are purely live and interactive. 
                   </li>
                   <li>
                   Topics covered in the content are purely designed after detailed study understanding the current market and trends.
                   </li>

                  </ul>
                </div>
              </div>
            </div>

        <br><br><br><br>




            
    <!-- ======= Popular Courses Section ======= 
   
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Discover Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <a href="iRPA.php">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item" href="iRPA.php">
                <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." href="iRPA.php">
    
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4><a href="iRPA.php" class="learn-more-btn  text-md-left">iRPA</a></h4>

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
            </div> <!-- End Course Item
          </a>
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
            </div> <!-- End Course Item
          </a>
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
            </div> <!-- End Course Item
          </a>
        </div>

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
            </div> <!-- End Course Item
        </a>

        <a href="course-details.php">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
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
          </div> <!-- End Course Item
        </a>

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
              <strong>Phone:</strong> +966-5459 07701<br>
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
        <a href="https://twitter.com/trainers_techno" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Techno-Trainers-101584548368417/?modal=admin_todo_tour" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/techno_trainers/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC8tFmtRwJo5fD0uPmi7bNCw" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.linkedin.com/feed/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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