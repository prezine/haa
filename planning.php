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

  <title>About us - Planning | HAA</title>
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
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">HAALP</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>HAALP Consult focuses on the provision of spatial land-use planning, environmental and project management services in Nigeria. The company is based in Port Harcourt and grew out of Harcourt Adukeh Associates (HAA) a long-established company in Nigeria, with an outstanding reputation for the excellence of its professional architecture and design services.</p>

                <p> Working closely with HAA we are proud to offer our clients the highest standard of professional services using our technical expertise and creativity to provide practical and innovative analysis, plans and advice. We use our extensive experience in the Nigeria to assist public and private sector clients with the delivery of a wide range of projects.</p>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">Skills and Services</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>HAALP’s dedicated team of professionals is well-positioned to offer a multi-disciplinary service in a range of services, primarily focusing on:</p>

                <p>
                  <ul>
                    <li>Strategic Planning</li>
                    <li>Local planning and Community Development</li>
                    <li>Planning Regulations</li>
                    <li>Environmental Impact Assessment</li>
                    <li>Urban Design</li>
                    <li>University and Polytechnic Campus Master Plans</li>
                    <li>Sustainable Development</li>
                    <li>Stakeholder Consultation</li>
                    <li>Project Management</li>
                  </ul>
                </p>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">Why Choose HAALP Consult?</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>
                  <ul>
                    <li>In depth knowledge of the environment</li>
                    <li>A highly motivated team</li>
                    <li>Availability of complete office support systems</li>
                    <li>Federal and State, NES, TORPREC and oil industry registrations</li>
                    <li>Personal attention and commitment of expert staff.</li>
                  </ul>
                </p>

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
