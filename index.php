<?php require_once './db/conn.php'; ?>
<?php require_once './forms/contact.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Okonkwo Emmanuel - Web Developer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ico.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpeg" alt="" class="img-fluid ">
        <h1 class="text-light"><a href="index.html">Okonkwo Emmanuel</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Hi👋, I'm </h1>
      <h1>Emmanuel</h1>
      <p><span class="typed" data-typed-items="Developer, Freelancer, SEO Specialist"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4>Emmanuel Okonkwo</h4>
              <p><em>A highly dynamic and innovative individual who thrives on problem solving. He seeks to be
                part of a world-class, result-oriented, highly motivated team that values business ethics and
                professionalism in order to improve and enhance the organization’s set goals and professional excellence.</em></p>
              <ul>
                <li>No 1 Linco Lane Opposite First Maf Hospital, Okpuno Nnewichi Nnewi, Anambra State.</li>
                <li>090 666 996 33</li>
                <li>milestonetech96@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Technology, Computer Science </h4>
              <h5>2015 - 2021 (+1 for Covid)</h5>
              <p><em>Federal University Of Technology</em></p>
              
            </div>
            <div class="resume-item">
              <h4>First School Leaving Certificate </h4>
              <h5>2001 - 2007</h5>
              <p><em>Good Shepherd Primary School, Nnewi</em></p>
            </div>
            <div class="resume-item">
              <h4>West African Secondary School Certificate Examination</h4>
              <h5>2007 - 2013</h5>
              <p><em>St. Paul’s Seminary Ukpor</em></p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Front End Engineer Intern</h4>
              <h5>2021</h5>
              <p><em>Trail Group, Hamburg, Germany </em></p>
              <ul>
                <li>Implement UI designs, perform E2E compliance tests</li>
                <li>Corroborate with UI & Backend design team. </li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>IT Trainee</h4>
              <h5>July 2019 - January 2020</h5>
              <p><em>Airpeace Airlines Limited, Ikeja Lagos</em></p>
              <ul>
                <li>Learnt MVC Architecture with
                  PHP / Laravel</li>
                <li>Maintained Company Internal
                  Asset Registry Website (PHP
                  and Wordpress)</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Shoot me a message below, let's build something amazing!</p>
          
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>No 1 Linco Lane Opposite First Maf Hospital, Okpuno Nnewichi Nnewi, Anambra State.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>milestonetech96@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>090 666 996 33</p>
              </div>

             
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form id="sample_form" method="post" name="sec" >
                  <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input required type="text" name="name" class="form-control form_data" id="name" required>
                  <span id="name_error" class="text-danger"></span>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input required type="email" class="form-control form_data" name="email" id="email" required>
                  <span id="email_error" class="text-danger"></span>
                </div>
            </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input required type="text" class="form-control form_data" name="subject" id="subject" required>
                <span id="subject_error" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control form_data" name="message" rows="10" required></textarea>
                <span id="message_error" class="text-danger"></span>
            </div>
            <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center">
                <button type="button" name="submit" id="submit" class="btn btn-primary" onclick="save_data(); return false;">Send Message</button>
                <span id="message"></span>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div style="display: flex; justify-content: space-between" class="container">
      <div >
        <a href="https://zuri.team/"><img class="img-fluid img-rounded" src="./assets/img/zuri.jpeg" width="60px" height="60px" alt=""></a>
    </div>
    <div >
        <a href="https://hng.tech/"><img class="img-fluid img-rounded" src="./assets/img/ico.jpeg" width="60px" height="60px" alt=""></a>
        
      </div>
    <div >
        <a href="https://ingressive.org/"><img class="img-fluid img-rounded" src="./assets/img/i4gzuri.jpg" width="60px" height="120px" alt=""></a>
        
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/form.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>