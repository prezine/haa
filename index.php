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

  <title>Home | HAA</title>
  <style id="smooth-scrollbar-style">
    [data-scrollbar] {
      display: block;
      position: relative;
    }

    .scroll-content {
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }

    .scrollbar-track {
      position: absolute;
      opacity: 0;
      z-index: 1;
      background: rgba(222, 222, 222, .75);
      -webkit-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none;
      -webkit-transition: opacity 0.5s 0.5s ease-out;
              transition: opacity 0.5s 0.5s ease-out;
    }
    .scrollbar-track.show,
    .scrollbar-track:hover {
      opacity: 1;
      -webkit-transition-delay: 0s;
              transition-delay: 0s;
    }

    .scrollbar-track-x {
      bottom: 0;
      left: 0;
      width: 100%;
      height: 8px;
    }
    .scrollbar-track-y {
      top: 0;
      right: 0;
      width: 8px;
      height: 100%;
    }
    .scrollbar-thumb {
      position: absolute;
      top: 0;
      left: 0;
      width: 8px;
      height: 8px;
      background: rgba(0, 0, 0, .5);
      border-radius: 4px;
    }
    </style>
</head>

<body>

  <div class="qrt-app"> 
    <?php 
      $uri['home'] = 'current-menu-item';
      $uri['about'] = $uri['projects'] = $uri['info'] = $uri['contact'] = NULL;
      include_once './widgets/preloader.php';
      include_once './widgets/cursor.php';
      include_once './widgets/topbar.php';
      include_once './widgets/leftbar.php';
    ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="swiper-container qrt-main-slider">
          <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
          </div>
          <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i class="fas fa-arrow-right"></i></div>
          </div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="./img/img/E_MG_4758-2.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architects + <!--<span style="color:#ff7043">+</span>--> <br> Planners</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="./about" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="./img/img/BANQUET_HALL_YENAGOA_.JPG" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architects + <br> Planners</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="./about" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="./img/img/LE_MERIDIEN (3).JPG" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architects + <br> Planners</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="./about" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="./img/img/OFFICE BLOCK OPOL 6resized.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architects + <br> Planners</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="./about" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="./img/img/5.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architects + <br> Planners</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="./about" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="qrt-content-frame">

          <div class="qrt-left">
            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">HAA </h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>Harcourt Adukeh Associates is one of the foremost architectural practices in Nigeria. It has a reputation for creating modern, aspirational buildings and spaces across a variety of sectors. We have experience in a wide range of projects that cover a wide range of building types, work stages and localities.</p>

                <p><a href="./about" style="color:#ff7043">Read More <i class="fas fa-arrow-right"></i></a></p>

              </div>
              <div class="qrt-divider"></div>
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">HAALP</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>HAALP Consult focuses on the provision of spatial land-use planning, environmental and project management services in Nigeria. The company is based in Port Harcourt and grew out of Harcourt Adukeh Associates (HAA) a long-established company in Nigeria, with an outstanding reputation for the excellence of its professional architecture and design services.</p>

                <p><a href="./planning" style="color:#ff7043">Read More <i class="fas fa-arrow-right"></i></a></p>

              </div>
              
              <div class="col-lg-12">

                <blockquote>
                  Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
                </blockquote>

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

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="qrt-masonry-grid qrt-3-col qrt-mb-40">
                
                <img src="./img/projects/A1 BOARDS 21.jpg" alt="" width="100%">

              </div>
            </div>

            <!--<div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Testimonials</h3>

              </div>
              <div class="col-lg-12">

                <div class="swiper-container qrt-testimonials-slider swiper-container-horizontal" style="overflow: visible">
                  <div class="swiper-wrapper" style="transform: translate3d(-696px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-prev" style="width: 676px; margin-right: 20px;">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="img/testimonials/t1.jpg" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">Paul Trueman</h4>
                            <div class="qrt-el-suptitle">Chief Architect</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                          were also
                          indispensable in managing the practical side of the build.
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="width: 676px; margin-right: 20px;">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="img/testimonials/t2.jpg" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">Emma Newman</h4>
                            <div class="qrt-el-suptitle">Chief Architect</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          We engaged Paul Trueman of quarty Studio to manage the planning process and to design and manage a full renovation and remodelling of our 1930s house. We really enjoyed working with Paul. We would not hesitate to
                          recommend Paul and Quarty.
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 676px; margin-right: 20px;">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="img/testimonials/t3.jpg" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">Viktoria freeman</h4>
                            <div class="qrt-el-suptitle">Chief Architect</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                          were also
                          indispensable in managing the practical side of the build.
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li class="qrt-empty"><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

              </div>
              <div class="col-6">

                <div class="swiper-testi-pagination qrt-cursor-color qrt-cursor-scale swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>

              </div>
              <div class="col-6">

                <div class="qrt-slider-nav">
                  
                  <div class="qrt-slider-prev qrt-testi-prev qrt-cursor-color qrt-cursor-scale" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><i class="fas fa-arrow-left"></i></div>
                  
                  <div class="qrt-slider-next qrt-testi-next qrt-cursor-color qrt-cursor-scale" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-arrow-right"></i></div>

                </div>

              </div>
            </div>-->

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
