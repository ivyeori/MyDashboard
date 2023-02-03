<?php
// (A) LOGIN CHECKS
require "check.php";

// (B) LOGIN PAGE HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>MyDashboard - Login</title>
    
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
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Monsterrat:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/css/login.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  

</head>

<body>

  
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.php">MyDashboard</a></h1>
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="../index.php#services">Services</a></li>
          
          
         
          <li><a class="getstarted scrollto" href="#about">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <main id="main">
    <section class="inner-page">
    
    


      <div class="container">
        <div class="loginBox shadow p-3 mb-5 bg-white rounded"> 
      <form id="login-form" method="post" target="_self">
    
      <h3>Login <button class="btn bg-white" id="loadElement"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg></button></h3>
      <?php if (isset($failed)) { ?>
      <div class="alert alert-danger" role="alert">Invalid Mail or Password</div>
    <?php } ?>
      <label required for="user">User</label>
      <input type="text" name="user" required>
      <label for="password">Password</label>
      <input type="password" name="password" required>
      <input type="submit" value="Login">
    </form>
    
    
    <div class="container">
  <div id="elementContainer"></div>
</div>
    </div>
      </div>
      
    </section>

  </main>

  

    

    

  

 
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script>
  document.getElementById("loadElement").addEventListener("click", function(){
    var elementContainer = document.getElementById("elementContainer");
    if (elementContainer.innerHTML === "") {
      
      var elementHTML = "<div class='alert alert-info' role='alert'>User is admin and Password admin</div>";
      elementContainer.innerHTML = elementHTML;
    } else {
      elementContainer.innerHTML = "";
    }
  });
</script>   

 
  <script src="./assets/js/main.js"></script>

</body>

</html>