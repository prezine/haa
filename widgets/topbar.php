<div class="qrt-top-bar">
  <!--<a href="./" class="qrt-symbol qrt-cursor-scale qrt-anima-link">
    <img src="img/logo-sm.svg" alt="Symbol">
  </a>-->
  <a href="./" class="qrt-logo qrt-cursor-color qrt-cursor-scale qrt-anima-link">
    <img src="./img/logo.gif" alt="Haa Logo">
  </a>
  <div class="qrt-menu">
    <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
      <nav>
        <ul>
          <li class="<?php echo $uri['home'] ?>"><a class="qrt-mobile-fix" href="./">Home</a></li>
          <li class="<?php echo $uri['about'] ?>">
            <a class="qrt-mobile-fix" href="./about">About</a>
            <ul>
              <li><a href="./about">Philosophy</a></li>
              <li><a href="./planning">Planning</a></li>
              <li><a href="./#">Careers</a></li>
              <li><a href="./#">Additional Services</a></li>
            </ul>
          </li>
          <li class="<?php echo $uri['projects'] ?>">
            <a class="qrt-mobile-fix" href="./projects">Projects</a>
            <ul>
              <?php
                  $allCategories = $product->fetchCategories();
                  if ($allCategories != 'null') {
                      foreach (json_decode($allCategories, true) as $ac) {
                          echo 
                          '<li>
                              <a href="./projects">'. $ac['category_name'] .'</a>
                          </li>';
                      }
                  }
              ?>
            </ul>
          </li>
          <li class="<?php echo $uri['info'] ?>"><a class="qrt-mobile-fix" href="./info">Info</a></li>
          <li class="<?php echo $uri['contact'] ?>"><a class="qrt-mobile-fix" href="./contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="qrt-buttons">
    <a href="./contact" class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20"><span>Send request</span></a>
    <div class="qrt-menu-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
    <div class="qrt-search-btn qrt-cursor-color qrt-cursor-scale"><i class="fas fa-search"></i></div>
    <div class="qrt-info-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
  </div>
  <div class="qrt-search">
    <form>
      <input type="text" placeholder="Enter search query">
    </form>
  </div>
  <div class="qrt-info" id="qrt-scroll-info">
    <div class="qrt-info-frame">
      <ul class="qrt-table">
        <li>
          <h5>Country</h5><span>Nigeria</span>
        </li>
        <li>
          <h5>City</h5><span>Port Harcourt</span>
        </li>
        <li style="text-align: right;">
          <h5>Street</h5><span>15, Ahoada Road, <br> Rumuibekwe Housing Estate, <br> PH, Rivers State</span>
        </li>
        <li>
          <h5>Email</h5>
          <span>
            <a class="qrt-cursor-scale qrt-cursor-color" href="mailto:info@haanig.com" data-no-swup>info@haanig.com</a>
          </span>
        </li>
        <li>
          <h5>Phone</h5>
          <span>
            <a class="qrt-cursor-scale qrt-cursor-color" href="tel:+2348072090156" data-no-swup> +234 807 209 0156</a>
          </span>
        </li>
        <li>
          <h5>Fax</h5>
          <span>
            <a class="qrt-cursor-scale qrt-cursor-color" href="tel:+2348072090157" data-no-swup>+234 807 209 0157</a>
          </span>
        </li>
      </ul>
      <div class="qrt-divider"></div>
      <div class="qrt-social-links">
        <div class="qrt-social-links">
          <h5 class="qrt-mb-40">We are social</h5>
          <ul class="qrt-social-list">
            <li><a href="#" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a></li>
            <li><a href="#" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="qrt-divider"></div>
      <div class="qrt-subscribe">
        <h5 class="qrt-mb-40">Subscribe our newsletter</h5>
        <form>
          <input type="text" placeholder="Email">
          <button type="submit" class="qrt-btn qrt-btn-sm"><i class="far fa-paper-plane"></i></button>
        </form>
      </div>
      <div class="qrt-divider"></div>
      <div class="qrt-copy">
        <!-- author ( Please! Do not delete it. You are awesome! :) -->
        <div>&copy; Copyright Harcourt Adukeh Associates.</div>
      </div>
    </div>
  </div>
</div>