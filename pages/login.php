<?php
// (A) LOGIN CHECKS
require "check.php";

// (B) LOGIN PAGE HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page Demo</title>
    <link href=".\assets\css\1-login.css" rel="stylesheet">
  </head>
  <body>
    <?php if (isset($failed)) { ?>
    <div id="login-bad">Invalid email or password.</div>
    <?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mydashboard - Support</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Monsterrat:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body>

  
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">MyDashboard</a></h1>
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="./index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="./index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="./index.html#services">Services</a></li>
          
          
          <link rel="stylesheet" href="./assets/css/login.css">
          <li><a class="getstarted scrollto" href="#about">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <main id="main">
    <section class="inner-page">
    
    


      <div class="container">
        <div class="loginBox"> 
      <form id="login-form" method="post" target="_self">
      <h3>Login</h3>
      <?php if (isset($failed)) { ?>
      <div class="alert alert-danger" role="alert">Invalid Mail or Password</div>
    <?php } ?>
      <label required for="user">User</label>
      <input type="text" name="user" required>
      <label for="password">Password</label>
      <input type="password" name="password" required>
      <input type="submit" value="Login">
    </form>
    
    <div class="alert alert-info" role="alert">User is joe and Password 123456</div>
    </div>
      </div>
      
    </section>

  </main>

  

    

    

  

 
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>