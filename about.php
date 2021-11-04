<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.php" class="navbar-brand">PIT<span class="text-primary">STOP</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="services.html" class="nav-link">Services</a>
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
    </nav> <!-- .navbar -->




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>BOLT Sports Shop is a project on E-Commerce Website. All products listed are fake. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. Well if you do like the website then visit
        <a href="http://www.techbarrack.com" target="_blank" rel="noopener noreferrer" title="Tech Barrack Solutions">Tech Barrack Solutions</a>.</p>

        <p>Why BOLT? I am a big fan of Usain Bolt. He is diligent and tries to surpass his previous achievements. And lastly, it was an instant thought. So went for it.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>


    


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
