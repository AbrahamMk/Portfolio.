<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("personal/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("personal/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("personal/assets/vendor/bootstrap/css/bootstrap.min.css") }}"  rel="stylesheet">
  <link href="{{ asset("personal/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}"  rel="stylesheet">
  <link href="{{ asset("personal/assets/vendor/boxicons/css/boxicons.min.css") }}"  rel="stylesheet">
  <link href="{{ asset("personal/assets/vendor/glightbox/css/glightbox.min.css") }}"  rel="stylesheet">
  <link href="{{ asset("personal/assets/vendor/remixicon/remixicon.css") }}"  rel="stylesheet">
  <link href="{{ asset("personal/assets/vendor/swiper/swiper-bundle.min.css") }}"  rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("personal/assets/css/style.css") }}"  rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="{{ route('index')}}">Abraham </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>Web Developer</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>A bit about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset("personal/assets/img/me.jpg") }}" class="img-fluid" alt="" style="border-radius: 50%;">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Web Developer</h3>
          <p class="fst-italic">
            I work both in front-ends and back-ends!
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                {{-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+251-9-84-72-13-93</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Addis Ababa, Ethiopia</span></li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>

    </div><!-- End About Me -->

   

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


        </div>

      </div>

    </div><!-- End Skills -->

   

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->



 



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>abrahammekonnen197@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+251-9-84-72-13-93</p>
          </div>
        </div>
      </div>

      

    </div>
  </section><!-- End Contact Section -->


  <!-- Vendor JS Files -->
  <script src="{{ asset("personal/assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("personal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("personal/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("personal/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("personal/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("personal/assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
  <script src="{{ asset("personal/assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("personal/assets/js/main.js") }}"></script>

</body>

</html>