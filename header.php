<?php 
session_start(); 
// var_dump($_SESSION['loggedin']);
// die;

?>

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
          <li><a href="events.php">Forum</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li class="drop-down"><a href="">Courses</a>
            <ul>
              <li><a href="#">iRPA</a></li>
              <li class="drop-down"><a href="#">ABAP</a>
                <ul>
                  <li><a href="#">ABAP Webdynpro</a></li>
                  <li><a href="#">ABAP S4 Hana</a></li>
                  <li><a href="#">OO ABAP</a></li>
                  <li><a href="#">BRM</a></li>
                  <li><a href="#">HR ABAP</a></li>
                </ul>
              </li>
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
              <li><a href="#">SAP PI/PO</a></li>
              <li><a href="#">SAP UI5</a></li>
              <li><a href="#">SAP CPI / HCI</a></li>
              <!-- <li><a href="#">Deep Drop Down 5</a></li> -->
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
  
        </ul>
      </nav><!-- .nav-menu -->
  
      <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->
  
    </div>
  </header>