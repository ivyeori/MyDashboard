<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mydashboard - Index | Deine Moderne Lösung Zum Arbeiten</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="assets/img/favicon.svg" rel="icon">
  

  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.svg" alt="">
        <span>Mydashboard</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li><a class="getstarted scrollto" href="./login"><?php
    if (isset($_COOKIE['PHPSESSID'])) {
      echo "Dashboard";
    } else {
      echo "Login";
    }
  ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Deine Lösung für produktiveres Arbeiten.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Mit MyDashBoard kannst du deinen Arbeitsalltag vereinfachen.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
    

    

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          
          <p>Einfache Einrichtung für Alle!</p>
        </header>

        

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Die Einrichtung von MyDashBoard benötigt nur 3 Schritte</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Schritt 1</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Schritt 2</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Fertig!</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Erstell dir einen Account</h4>
                </div>
                <p>Dies erfolgt in wenigen Schritten, damit Du es einfach hast! Du brauchst eine E-Mail und es kann schon losgehen!</p>
                
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Verbinde deine Accounts</h4>
                </div>
                <p>Verbinde deine Accounts, damit wir Dir besser helfen können beim Arbeiten. Egal ob Google oder Microsoft Accounts, du kannst alles bei uns anlegen.</p>
                
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Du kannst jetzt einfach loslegen</h4>
                </div>
                <p>Ab jetzt kannst du MyDashboard einfach nutzen. Egal ob privat oder auf der Arbeit, du wirst produktiver im Alltag!</p>
                
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        

      </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          
          <p>Was bietet MyDashBoard?</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-mail-line icon"></i>
              <h3>Mail Manager</h3>
              <p>Du kannst einfach deinen Gmail, Outlook oder Deinen Arbeits Mail Account verknüpfen!</p>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-file-cloud-line icon"></i>
              <h3>Cloud Manager</h3>
              <p>Bei MyDashBoard kannst du einfach deine Cloud hinzufügen. Egal ob iCloud oder Google Drive.</p>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-message-2-line icon"></i>
              <h3>Chat Funktion</h3>
              <p>Um dich mit deinen Arbeitskollegen zu unterhalten, bieten wir eine Chat Funktion. So hast du alles in einem Dashboard!</p>
              
            </div>
          </div>

         

        </div>

      </div>

    </section><!-- End Services Section -->

    

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
         
          <p>Häufige Fragen</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  Bleibt MyDashboard für immer kostenlos?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse " data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                  Für Privatkunden bleibt MyDashboard immer kostenlos! Firmen können sich ein besonderes Angebot einholen.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                  Wie einfach ist die Einrichtung von MyDashboard?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                  Die Einrichtung kann schon über 3 Schritten erfolgen!
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mydashboard</span></strong>. All Rights Reserved | Designed by fdai7636
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="ri-arrow-drop-up-line"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>