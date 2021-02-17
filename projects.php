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

  <title>Projects | HAA</title>
</head>

<body>

  <div class="qrt-app">
    <?php 
      $uri['projects'] = 'current-menu-item';
      $uri['home'] = $uri['about'] = $uri['info'] = $uri['contact'] = NULL;
      include_once './widgets/preloader.php';
      include_once './widgets/cursor.php';
      include_once './widgets/topbar.php';
      include_once './widgets/leftbar.php';
    ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-content-frame">
          <div class="qrt-left">

            <div class="qrt-filter qrt-mb-40">
              <?php
                  $allCategories = $product->fetchCategories();
                  if ($allCategories != 'null') {
                    foreach (json_decode($allCategories, true) as $ac) {
                      if ($ac['category_name'] == "All" || $ac['category_name'] == "ALL") {
                        echo 
                        '<a href="projects#" data-filter="*" class="qrt-work-category qrt-current qrt-filter-icon qrt-cursor-color qrt-cursor-scale">
                            <i class="fas fa-filter"></i>'. $ac['category_name'] .'
                          </a>';
                      } else {
                        echo 
                        '<a href="projects#" data-filter=".'. $ac['category_name'] .'" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">
                        '. $ac['category_name'] .'
                        </a>';
                      }
                    }
                  }
              ?>
            </div>

            <div class="qrt-masonry-grid qrt-3-col qrt-mb-40">
              <div class="qrt-grid-sizer"></div>

              <?php
                $displayProducts = $product->fetchProducts();
                if ($displayProducts != 'null') {
                    foreach (json_decode($displayProducts, true) as $ap) {
                    echo 
                    '<div class="qrt-masonry-grid-item '. $ap['project_category'] .'">
                      <div class="qrt-work-item"><a data-fancybox="works" href="'. APP_STORAGE . $ap['project_image'] .'" class="qrt-cursor-scale qrt-work-cover-frame"><img src="'. APP_STORAGE . $ap['project_image'] .'" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                          <div class="qrt-work-category"><span>'. $ap['project_category'] .'</span></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white">
                            <a href="./project?productID='. $ap['projectID'] .'">'. $ap['project_name'] .'</a>
                          </h4>
                          <a href="./project?productID='. $ap['projectID'] .'" class="qrt-cursor-scale qrt-work-more">
                            <i class="fas fa-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>';
                  }
                }
              ?>

            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4>
                    <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="./contact">
                      <span>Let's discuss</span>
                    </a>
                </div>
              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right">
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
