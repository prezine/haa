<?php
    session_start();
    include_once './admin/app/connect.php';
    include_once './admin/app/controllers/Haa.php';
    include_once './admin/app/controllers/Database.php';
    include_once './admin/app/controllers/Product.php';
    $product = new Products($conn);
    $projectID = (isset($_GET['productID'])) ? $_GET['productID'] : Null ;
    $productinfo = $product->fetchSingleProducts($projectID);
    $productinfo = json_decode($productinfo, true);
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

  <title><?php echo $productinfo['project_name']; ?></title>
</head>

<body>

  <div class="qrt-app">
    <?php 
      $uri['projects'] = 'current-menu-item';
      $uri['home'] = $uri['about'] = $uri['contact'] = $uri['info'] = NULL;
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

            <div class="row">
              <div class="col-lg-12">

                <h2 class="qrt-mb-40"><?php echo $productinfo['project_name']; ?></h2>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php
                        $counter = $product->countProductmage($projectID);
                        for ($i=0; $i < $counter; $i++) { 
                            if ($i == 0) {
                                $o = '<li data-target="#carouselExampleIndicators" data-slide-to="'. $i .'" class="active"></li>';
                            } else {
                                $o = '<li data-target="#carouselExampleIndicators" data-slide-to="'. $i .'"></li>';
                            }
                            echo $o;
                        }
                    ?>
                  </ol>
                  <div class="carousel-inner">
                    <?php
                        $allImages = $product->fetchProductmage($projectID);
                        if ($allImages != 'null') {
                            $counter = 0;
                            foreach (json_decode($allImages, true) as $ai) {
                                if($counter == 0) {
                                  echo 
                                  '<div class="carousel-item active">
                                    <img class="d-block w-100" src="'. APP_STORAGE . $ai['image_url'] .'">
                                  </div>';
                                } else {
                                  echo 
                                  '<div class="carousel-item">
                                    <img class="d-block w-100" src="'. APP_STORAGE . $ai['image_url'] .'">
                                  </div>';
                                }
                                $counter = $counter + 1;
                            }
                        }
                    ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="qrt-just-text">
                  <p><?php echo $productinfo['project_desc']; ?></p>
                </div>

              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
              <div class="qrt-image-frame">
                <img src="./img/banners/project-cover.jpg" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint"><span></span></div>
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
