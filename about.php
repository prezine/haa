<?php
  session_start();
  include_once './admin/app/connect.php';
  include_once './admin/app/controllers/Haa.php';
  include_once './admin/app/controllers/Database.php';
  include_once './admin/app/controllers/Product.php';
  $product = new Products($conn);
?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- mapbox css -->
  <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>About us | HAA</title>
</head>

<body>

  <div class="qrt-app">
    <?php 
      $uri['about'] = 'current-menu-item';
      $uri['home'] = $uri['projects'] = $uri['info'] = $uri['contact'] = NULL;
      include_once './widgets/preloader.php';
      include_once './widgets/cursor.php';
      include_once './widgets/topbar.php';
      include_once './widgets/leftbar.php';
    ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row qrt-p-0-40">
              <div class="col-lg-12">

                <div class="qrt-page-cover">
                  <img src="./img/banners/night.jpg" alt="our office">
                  <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Country:</h5><span>Nigeria</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">City:</h5><span>Port Harcourt</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Foundation:</h5><span>Jan, 20**</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">Harcourt Adukeh <br>Associates</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p><strong>Harcourt Adukeh Associates</strong> is one of the foremost architectural practices in Nigeria. It has a reputation for creating modern, aspirational buildings and spaces across a variety of sectors. We have experience in a wide range of projects that cover a wide range of building types, work stages and localities.</p>

                <p>We work across scales from the minor works to the large scale buildings. We seek to explore, develop, produce and deliver integrated and sustainable proposals and solutions.</p>

              </div>
              <div class="col-lg-12">

                <blockquote>
                  "As an artist or an architect, I have the opportunity to address wrongs and try to correct them - Samuel Mockbee"
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">Our Philosophy</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p><strong>Harcourt Adukeh Associates</strong> has always utilized teams of qualified, highly motivated individuals working together to create functional and aesthetically pleasing space for the use and employment of all people.</p>

                <p>The TEAM concept utilized by HAA calls for the assembly of a number of diverse talents, combining the knowledge and skill of  Designers, Planners, Engineers, Quantity Surveyors and Environmentalists.</p>

                <p>The project architect is given the responsibility of coordinating a project from concept to completion. His job is to develop the input of the principal, coordinate the talents of the entire team and provide a continuity of development for each new project.</p>

                <p>This approach combines the personal service of a project architect and his concern for the client's interest with the experience and special skills of a team tailored to handle each project's needs. This has provided a proven performance base for interpretation where client's dream becomes reality.</p>

              </div>
            </div>
            
            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">0</span>
                  </div>
                  <h5>Years Experience</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">0</span>
                  </div>
                  <h5>Finished Projects</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">0</span>
                  </div>
                  <h5>Happy Customers</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">0</span>
                  </div>
                  <h5>Honors &amp; Awards</h5>
                </div>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-12">

                <div class="swiper-container qrt-brands-slider" style="overflow: visible">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="./img/img/clients/Seal_of_the_President_of_Nigeria.svg.png" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="./img/img/clients/bayelsa.jpg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="./img/img/clients/genesis.png" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="./img/img/clients/agip.jpg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="./img/img/clients/british-council.png" alt="brand">
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">

                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="./contact"><span>Let's discuss</span></a>
                </div>

              </div>
            </div>

          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-show">
              <div class="qrt-image-frame">
                <img src="./img/banners/office-cover.jpg" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint">
                  <span></span>
                </div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">Our thoughts</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">Harcourt Adukeh Associates is one of the foremost architectural practices in Nigeria. It has a reputation for creating modern, aspirational buildings and spaces across a variety of sectors. We have experience in a wide range of projects that cover a wide range of building types, work stages and localities.<br>

                  We work across scales from the minor works to the large scale buildings.</div>
                  <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in touch</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- jquery js -->
  <script src="js/plugins/bootstrap.min.js"></script>
  <!-- jquery js -->
  <script src="js/plugins/popper.min.js"></script>
  <!-- anime js -->
  <script src="js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="js/plugins/overscroll.min.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>
  <!-- mapbox js -->
  <script src="js/plugins/mapbox.min.js"></script>

  <!-- main js -->
  <script src="js/main.js"></script>

</body>

</html>
