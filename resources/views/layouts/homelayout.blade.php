<!doctype html>
<html lang="en">

<head>
  <title>Covid | @yield('titleContent')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2926/2926534.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon-covid/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <!-- // Loader Start -->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <!-- // Loader End -->

    <!-- // Header Start -->
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Covid<span class="text-primary">.</span> </a>
            </div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
                <li class="has-children {{ Request::is('prevention*') ? 'active' : '' }}">
                  <a href="/prevention" class="nav-link">Prevention</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Stay at home</a></li>
                    <li><a href="#" class="nav-link">Keep social distancing</a></li>
                    <li><a href="#" class="nav-link">Wear facemask</a></li>
                    <li><a href="#" class="nav-link">Wash your hands</a></li>
                  </ul>
                </li>
                <li class="{{ Request::is('symptoms') ? 'active' : '' }}"><a href="/symptoms" class="nav-link">Symptoms</a></li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="nav-link">About</a></li>
                <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact" class="nav-link">Contact</a></li>
                <li ><p><a href="/login" class="nav-link btn btn-primary-outline">Login</a></p></li>
                <li><p><a href="/register" class="nav-link btn btn-primary ">Register</p></a></li>

              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
              class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a>
          </div>

        </div>
      </div>

    </header>
    <!-- // Header End -->



    @yield('homeContent')


    <!-- // Footer Start -->
    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About</h2>
            <p>We are committed to providing a safe and easy COVID-19 vaccination solution. Our goal is to ensure better
              health and protection for everyone.</p>
            <div class="my-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Symptoms</a></li>
                  <li><a href="#">Prevention</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">About Coronavirus</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Helpful Link</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Helathcare Professional</a></li>
                  <li><a href="#">LGU Facilities</a></li>
                  <li><a href="#">Protect Your Family</a></li>
                  <li><a href="#">World Health</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Resources</h2>
                <ul class="list-unstyled">
                  <li><a href="#">WHO Website</a></li>
                  <li><a href="#">CDC Website</a></li>
                  <li><a href="#">Gov Website</a></li>
                  <li><a href="#">DOH Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a
                    href="#" target="_blank">Aliyan Amir </a><i class="icon-heart text-danger" aria-hidden="true"></i>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </small></p>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  </div>
  <!-- // Footer End -->

  <!-- .site-wrap -->

  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('frontend/js/aos.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.sticky.js')}}"></script>
  <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('frontend/js/main.js')}}"></script>


</body>

</html>