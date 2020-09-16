<?php 
  //creating connection to database
  require_once "config.php";

// Define variables and initialize with empty values
$name = $email = $subject = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  // echo "INSERT INTO `contact` (`name`, `email`,`subject`, `message`) VALUES (`$name`, `$email`,`$subject`, `$message`)";
  // die;
  $result1 = mysqli_query($conn,"INSERT INTO `contact` (`name`, `email`,`subject`, `message`) VALUES ('$name', '$email','$subject', '$message')");  
  
        if($result1){
            // Redirect to login page
            header("location:contact.php");
        } else{
            echo "Something went wrong. Please try again.";
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Mentor Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
      <a href="index.php" ><img src="assets/img/finallogo.jpeg" alt="" style="width:22%;height:10%;"></a>

          <h1 class="logo mr-auto"><a href="index.php"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
              <ul>
                  <li ><a href="index.php">Home</a></li>
                  <!-- <li><a href="about.html">About</a></li> -->
                  <li><a href="courses.php">Next Batches</a></li>
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
                  <li  class="active"><a href="contact.php">Contact</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>For Any technical details / queries , we are open 24 X 7 to help you out.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://goo.gl/maps/DwMk2ViNQtdqHKKY6" frameborder="0" allowfullscreen></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14671.28841878143!2d72.6833!3d23.176692!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ba592c66b8ee212!2sGift%20City!5e0!3m2!1sen!2sbg!4v1599387553797!5m2!1sen!2sbg" width="600"
        style="border:0; width: 100%; height: 350px;"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Brians Cubes Innovation Labs </p>
                <p>Gift City , Gandhinagar. Gujarat</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@techno-trainers.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+966 5459 07701</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="contact.php"  method="POST" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
              <strong>Phone:</strong> +966 5459 07701<br>
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