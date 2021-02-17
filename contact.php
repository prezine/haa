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

  <title>Contact | HAA</title>
</head>

<body>

  <div class="qrt-app">
    <?php 
      $uri['contact'] = 'current-menu-item';
      $uri['home'] = $uri['about'] = $uri['projects'] = $uri['info'] = NULL;
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
                  <div class="qrt-about-info qrt-info-lg">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Phone:</h5>
                          <a href="tel:+2348072090156" data-no-swup><span>+234 807 209 0156</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Fax:</h5>
                          <a href="tel:+2348072090157" data-no-swup><span>+234 807 209 0157</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Email:</h5>
                          <a href="mailto:info@haanig.com" data-no-swup><span>info@haanig.com</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Adress:</h5><a href="https://goo.gl/maps/MAa6Au5d9ZMgSfBV7" target="_blank" data-no-swup><span>15, Ahoada Road, <br>Rumuibekwe Housing Estate, <br>PH, Rivers State</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Get in touch</h3>

              </div>
              <div class="col-lg-12">

                <form id="form" class="qrt-contact-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="name" name="name" class="qrt-input" type="text" placeholder="Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="email" name="email" class="qrt-input" type="email" placeholder="Email" required>
                        <label for="email"><i class="fas fa-at"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <textarea id="message" name="text" class="qrt-input" placeholder="Message" required></textarea>
                        <label for="message"><i class="far fa-envelope"></i></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-mb-20">We promise not to disclose your personal information to third parties.</div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40">
                        <button class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale" type="submit"><span>Send message</span></button>
                      </div>
                    </div>

                  </div>
                </form>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

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
                  <h4>Learn more about us!</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="./about">
                    <span>About us</span>
                  </a>
                </div>

              </div>
            </div>

          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-map-frame">
              <div class="qrt-lock"><i class="fas fa-lock"></i></div>
              <div id="map" class="qrt-map"></div>
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
