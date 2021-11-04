<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Revetive - Free Business Corporate Template By MACode ID</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>

  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="css/maicons.css">

  <link rel="stylesheet" href="vendor/animate/animate.css">

  <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="index.php" title="">
          <img src="images/logo.png" class="navbar-logo-img" alt="">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="services.php" class="nav-link" style="color:#FCA043">Services</a>
            </li>
            <li class="nav-item">
              <a href="orders.php" class="nav-link">My Orders</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <?php

                if(isset($_SESSION['username'])){
                  echo '<li class="nav-item">
                          <a href="account.php" class="nav-link">My Account</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a href="logout.php" class="nav-link">Log Out</a>
                        </li>';
                }
                else{
                  echo '<li class="nav-item">
                          <a href="login.php" class="nav-link">Log In</a>
                        </li>';
                  echo '<li class="nav-item">
                          <a href="register.php" class="nav-link">Register</a>
                        </li>';
                }
                ?>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <!-- <div class="subhead">Segera hadir di Jabodetabek</div> -->
          <h2 class="title-section">Our Services</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-6 col-md-6 col-lg-4 col-xl-4 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="images/img/icons/car_wash.png" alt="">
              </div>
              <h5>Car Wash Package</h5>
            </div>
            <p>- Two bucket method
              <br>- Wash mitt
              <br>- Microfiber towel
              <br>- Car shampoo
              <br>- Tire gel
              <br>- Engine degreaser and dressing
              <br>- Interior vacuum, cleaning, and protect &nbsp; &nbsp; quick detailer
            </p>
          </div>
          <div class="col-6 col-md-6 col-lg-4 col-xl-4 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="images/img/icons/interior_detailing.png" alt="">
              </div>
              <h5>Protection</h5>
            </div>
            <p>- Spray wax (shine wax): IDR 25000.00
              <br>- Silica spray (Quartmax): IDR 50000.00
              <br>- Paste wax (Meguiars Gold Glass Paste Wax): IDR 100000.00
            </p>
          </div>

          <div class="col-6 col-md-6 col-lg-4 col-xl-4 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="images/img/icons/exterior_detailing.png" alt="">
              </div>
              <h5>Additional</h5>
            </div>
            <p>- Tag remover: IDR XXX
              <br>- Clay: IDR XXX
              <br>- Engine Cleaning: IDR XXX
              <br>- Waterspot Remover: IDR XXX
              <br>- Glass Cleaning: IDR XXX
            </p>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Testimonials -->
    <!-- <div class="page-section"> -->
      <div class="container py-5">
        <div class="owl-carousel testimonial-carousel">
          <div class="card-testimonial">
            <div class="content">
            <img src="images/car-wash.png" class="navbar-logo-img" alt="">
              
            </div>
            <div class="author">
              <div class="avatar">
                <img src="images/img/person/person_1.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Sam Watson</div>
                <div class="author-info">Employee - Pitstop</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
            <img src="images/car-wash-2.png" class="navbar-logo-img" alt="">
             
            </div>
            <div class="author">
              <div class="avatar">
                <img src="images/img/person/person_2.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Edinson Alfa</div>
                <div class="author-info">Employee - Pitstop</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
            <img src="images/car-wash-3.png" class="navbar-logo-img" alt="">
              
            </div>
            <div class="author">
              <div class="avatar">
                <img src="images/img/person/person_3.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">May Halloway</div>
                <div class="author-info">Employee - Pitstop</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
            <img src="images/car-wash-4.png" class="navbar-logo-img" alt="">
              
            </div>
            <div class="author">
              <div class="avatar">
                <img src="images/img/person/person_1.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Sam Watson</div>
                <div class="author-info">Employee - Pitstop</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
            <img src="images/car-wash.png" class="navbar-logo-img" alt="">
             
            </div>
            <div class="author">
              <div class="avatar">
                <img src="images/img/person/person_2.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">Edinson Alfa</div>
                <div class="author-info">Employee - Pitstop</div>
              </div>
            </div>
          </div>

          <div class="card-testimonial">
            <div class="content">
            <img src="images/car-wash-2.png" class="navbar-logo-img" alt="">
              
            </div>
            <div class="author">
              <div class="avatar">
                <img src="images/img/person/person_3.jpg" alt="">
              </div>
              <div class="d-inline-block ml-2">
                <div class="author-name">May Halloway</div>
                <div class="author-info">Employee - Pitstop</div>
              </div>
            </div>
          </div>

        </div> <!-- .row -->
      </div> <!-- .container -->
    </div>
     <!-- .page-section -->

    <!-- <div class="page-section">
      <div class="container-fluid">
        <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
          <div class="py-3 px-5">
            <img src="images/img/clients/airbnb.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="images/img/clients/google.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="images/img/clients/mailchimp.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="images/img/clients/paypal.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="images/img/clients/stripe.png" alt="">
          </div>
        </div>
      </div> 
    </div>  -->
  </main>


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
        <a class="navbar-brand" href="index.php" title="">
          <img src="images/logo.png" class="navbar-logo-img" alt="">
        </a>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="warna-footer" style="color:white;">Contact Information</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: example@mail.com</p>
          <p>Phone: +00 112323980</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="warna-footer" >Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Career</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">News & Feed</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5 class="warna-footer" style="color:white;">Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>© Copyright PITSTOP. All Rights Reserved</p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>       

  
<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/wow/wow.min.js"></script>

<script src="vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="js/google-maps.js"></script>

<script src="js/theme.js"></script>

</body>
</html>