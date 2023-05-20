<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MORGANS</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="/images/morgans.jpg" />

    <!-- inject:css -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              {{-- <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">}}
                  {{-- <ul class="navbar-top-left-menu">
                    <li class="nav-item">
                      <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/aboutus.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Write for Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">In the Press</a>
                    </li>
                  </ul>
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Sign in</a>
                    </li>
                  </ul>
                </div>
              </div> --}}
              <br>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
      <a class="navbar-brand text-white" href="#">
        <img src="/images/morgans.jpg" alt="" class="mr-2">
      </a>
                  </div>
                  <div>
                    <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/posts?category=magazine">MAGAZINE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/posts?category=politik">Politics</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/posts?category=lifestyle">Lifestyle</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/posts?category=edukasi">Education</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/posts?category=travel">Travel</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                    <a href="https://www.instagram.com/dhikicyc_/" target="_blank">
                     <i class="mdi mdi-instagram"></i>
                    </a>

                    </li>
                    <li>
                    <a href="https://api.whatsapp.com/send?phone=085870448438" target="_blank">
                    <i class="mdi mdi-whatsapp"></i>
                    </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>

        @yield('container')

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <b><a class="navbar-brand text-white" href="#">MORGANS</a></b>
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Berita Seluruh Dunia
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                    <a href="https://www.instagram.com/dhikicyc_/" target="_blank">
                     <i class="mdi mdi-instagram"></i>
                    </a>
                    </li>
                    <li>
                    <a href="https://api.whatsapp.com/send?phone=085870448438" target="_blank">
                    <i class="mdi mdi-whatsapp"></i>
                    </a>

                    </li>
                  </ul>
                </div>



                {{-- <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Magazine</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Business</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Sports</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Arts</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Politics</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                </div> --}}

              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      {{-- Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a> --}}
                    </div>
                    <div class="fs-14 font-weight-600">
                      © 2023 <a href="https://www.omah-ti.com/" target="_blank" class="text-white"> Adhiki Cahyacita Eknanda</a>. All rights reserved.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="/js/demo.js"></script>
    <script src="/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
