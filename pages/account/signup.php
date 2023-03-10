<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../../assets/css/animate.css" rel="stylesheet">
  <link href="../../assets/css/aos.css" rel="stylesheet">
  <link href="../../assets/css/icons/icons.css" rel="stylesheet">
  <link href="../../assets/css/boxicons/css/boxicons.css" rel="stylesheet">
  <link href="../../assets/css/remixicon/remixicon.css" rel="stylesheet">
  <!-- <link href="../../assets/css/swiper-bundle.min.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="../../assets/css/custom.css">
  <link href="../../assets/css/main.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="account.css">
</head>

<body>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="../home/index.html" class="logo me-auto"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../home/index.html">Home</a></li>
              <li><a href="#">Log out</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../about/about.html">About Us</a></li>
              <li><a href="../about/meet-the-team.html">Meet the Team</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="../courses/courses.html"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../courses/course-details.html">Basics of Computing</a></li>
              <li><a href="../courses/course-details-1.html">MS Word, Excel & Powerpoint</a></li>
              <li><a href="../courses/course-details-2.html">Web Development</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Tutors</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../tutors/trainers.html">See Tutors</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Tutorial</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../events/events.html">Upcoming Tutorials</a></li>
              <li><a href="../events/previous-events.html">Previous Tutorials</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pricing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../pricing/pricing.html">See Pricing</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Contact Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../contact/contact.html">Send a Message</a></li>
              <li><a href="../contact/meet-us.html">Meet Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="../services/our-services.html"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../services/services-1.html">Microsoft Tools</a></li>
              <li><a href="../services/services-2.html">Web Development</a></li>
              <li><a href="../services/services-3.html">IT Training</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../profile/viewprofile.html">View Profile</a></li>
              <li><a href="../profile/editprofile.html">Edit Profile</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../account/signup.php">Sign Up</a></li>
              <li><a href="../account/login.php">Login</a></li>
            </ul>
          </li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../account/signup.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main>
    <div id="signup-login" data-aos="fade-left">
      <h2>Sign Up</h2>
    </div>
    <div id="signup-login-form" data-aos="zoom-in">
        <form action="../../backend/register_a.php" method="post" novalidate enctype="multipart/form-data">
          <input type="text" name="full-name" id="name" placeholder="Full Name" required><br><br>
          <input type="email" name="email" id="email" placeholder="Email" required><br><br>
          <input type="password" name="password" id="password" placeholder="Password" required><br><br>
          <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required><br><br>
          <div id="profile-picture">
            <p id="text">Profile Picture</p>
            <input type="file" name="file" class="file" placeholder="image"><br><br>
          </div>
          
          <button type="submit"><strong>Sign Up</strong></button><br><br>
          <p style="text-align: center;">Already have an account? <a href="login.php" style="color: #20BEC1;">Log in</a></p>
        </form>
    </div>
  </main>  <!--End main-->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="../home/index.html" class="logo me-auto"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>
            <p>
              Babcock University<br>
              Ilishan-Remo, Ogun State<br>
              NIgeria <br><br>
              <strong>Phone:</strong> +234 9059033185<br>
              <strong>Email:</strong> literatehq@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../home/index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../about/about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/our-services.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../contact/contact.html">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/services-1.html">Microsoft Tools</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/services-2.html">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../services/services-3.html">IT Training</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Enter your email below to subscribe to our newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          Designed by <strong style="color: #20BEC1;">Group 9</strong>
        </div>
      </div>
      <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../../assets/js/aos.js"></script>
  <script src="../../assets/js/custom.js"></script>
  <script src="../../assets/js/swiper-bundle.min.js"></script>
  <script src="../../assets/css/php-email-form/validate.js"></script>

  <script src="../../assets/js/main.js"></script>

</body>

</html>