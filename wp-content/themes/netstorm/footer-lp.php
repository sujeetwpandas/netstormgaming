   <footer class="bg-dark text-light">
      <div class="footer-shape">
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/7.png" alt="Shape" />
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/9.png" alt="Shape" />
        </div>
      </div>
      <div class="container">
        <div class="f-items relative pt-40 pb-50 pt-xs-0 pb-xs-50">
          <div class="row justify-content-center">
            <div class="col-md-4 footer-item pr-50 pr-xs-15">
              <div class="f-item about">
                <img
                  class="logo"
                  src="<?php echo get_option('footer_logo'); ?>"
                  alt="Logo"
                  style="width: 200px; height: 150px"
                />
              </div>
            </div>

            <div class="col-md-4 footer-item">
              <h2 class="widget-title">Contact Us</h2>
              <div class="opening-hours">
                <ul class="item-flex-footer" style="flex-direction: column">
                  <li>
                    <i class="fas fa-map-marker-alt"></i> <?php echo get_option('address'); ?>
                  </li>
                  <li>
                     <a href="tel: <?php echo get_option('phone'); ?>"><i class="fas fa-phone-alt"></i> + <?php echo get_option('phone'); ?></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 footer-item">
              <!-- <h4 class="widget-title">Business Hours</h4>
              <div class="opening-hours">
                <ul>
                  <li>
                    <div class="working-day">Monday to Friday</div>
                    <div class="marker"></div>
                    <div class="working-hour">9.00 am to 5.00 pm</div>
                  </li>
                  <li>
                    <div class="working-day">Saturday and Sunday</div>
                    <div class="marker"></div>
                    <div class="working-hour">CLOSED</div>
                  </li>
                </ul>
              </div> -->
               <?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
                             <div class="opening-hours" style="margin-top: 0;">
                                <?php dynamic_sidebar( 'footer-5' ); ?>
                            </div>
                            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <p>
                <?php echo get_option('copyright'); ?>
              </p>
            </div>
            <div class="col-lg-6 text-end">
              <ul>
                <li>
                  <a href="<?php echo site_url(); ?>/terms/">Terms & Conditions</a>
                </li>
                <li>
                  <a href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
 <?php wp_footer(); ?>
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.appear.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.easing.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/modernizr.custom.13711.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/progress-bar.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/circle-progress.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/isotope.pkgd.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.nice-select.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/count-to.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.scrolla.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/YTPlayer.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/TweenMax.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/rangeSlider.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-ui.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/validnavs.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" defer></script>
  </body>
</html>
