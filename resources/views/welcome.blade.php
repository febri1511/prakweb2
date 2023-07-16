<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>THE QAF</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('theQAF/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('theQAF/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{ asset('theQAF/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('theQAF/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('theQAF/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theQAF/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theQAF/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theQAF/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theQAF/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('theQAF/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('theQAF/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <a>THE QAF</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('theQAF/frontend/#about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('theQAF/frontend/#services') }}">Services</a></li>
                    <li class="dropdown"><a href="{{ asset('theQAF/frontend/#portfolio') }}"><span>Produk</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ asset('theQAF/frontend/#portfolio-details') }}">Produk Details</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ asset('theQAF/frontend/#team') }}">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('theQAF/frontend/#contact') }}">Contact</a></li> --}}
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi Terbaik Untuk Rumah Anda</h1>
          <h2>Toko kami menyediakan semua barang yang anda butuhkan untuk mempercantik rumah anda</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img1" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset ('theQAF/assets/img/hero-img1.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    </section>
    <!-- End Hero -->

    <footer id="footer">

        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Gabung menjadi pelanggan setia kami, maka anda akan mendapatkan promo spesial</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Login">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>THE QAF</h3>
                <p>Jl.H.baing Kramatjati,Jakarta Timur, 13540
                Jl.H.baing Kramatjati <br>
                Jakarta Timur, 13540<br>
                  <strong>Phone:</strong> +24 5589 5545588 556<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Konsultasi Desain Interior</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Penawaran Diskon atau Promosi Khusus</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Pelanggan Responsif</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Purna Jual</a></li>

                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Berikut ini sosial media kami</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            <strong><span>THE QAF</span></strong>
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/theQAF-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="">Kelompok 3</a>
          </div>
        </div>
      </footer><!-- End Footer -->

      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset('theQAF/assets/vendor/aos/aos.js') }}"></script>
      <script src="{{ asset('theQAF/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('theQAF/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('theQAF/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('theQAF/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('theQAF/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
      <script src="{{ asset('theQAF/assets/vendor/php-email-form/validate.js') }}"></script>

      <!-- Template Main JS File -->
      <script src="{{ asset('theQAF/assets/js/main.js') }}"></script>

    </body>

    </html>
