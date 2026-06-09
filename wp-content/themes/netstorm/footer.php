 <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="footer-shape">
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/7.png" alt="Shape">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/9.png" alt="Shape">
            </div>
        </div>
        <div class="container">
            <div class="f-items relative pt-70 pb-120 pt-xs-0 pb-xs-50">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-item pr-50 pr-xs-15">
                        <div class="f-item about">
                            <img class="logo" src="<?php echo get_option('footer_logo'); ?>" alt="Logo">
                            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <div class="opening-hours">
                                <?php dynamic_sidebar( 'footer-1' ); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <div class="f-item link">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <div class="f-item link">
                             <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                         <?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-item">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                        <div class="f-item newsletter">
                            <form method="post" action="https://netstormstg.wpenginepowered.com/wp-admin/admin-ajax.php?action=tnp&na=s">
                            <input type="hidden" name="nlang" value="">
                                <input class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="Email" required form-control>
                                <button class="tnp-submit" type="submit" value="Subscribe" style=""> Subscribe</button>  
                            </form>
                            <!-- <div class="tnp tnp-subscription f-item newsletter">
<form method="post" action="https://netstormstg.wpenginepowered.com/wp-admin/admin-ajax.php?action=tnp&na=s">
<input type="hidden" name="nlang" value="">
<div class="tnp-field tnp-field-email"><label for="tnp-1">Email</label>
<input class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="" required form-control></div>
<div class="tnp-field tnp-field-button" style="text-align: left"><input class="tnp-submit" type="submit" value="Subscribe" style="">
</div>
</form>
</div> -->
                        </div>
                      <!--   <ul class="footer-social">
                            <li>
                                <a href="<?php echo get_option('facebook_url'); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_option('twitter_url'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_option('youtube_url'); ?>">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_option('linkedin_url'); ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p><?php echo get_option('copyright'); ?></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                             <li>
                                <a href="<?php echo site_url(); ?>/terms/">Terms and Conditions</a>
                            </li> 
                            <li>
                                <a href="<?php echo site_url(); ?>/privacy-policy/">Privacy</a>
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
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/modernizr.custom.13711.js" async></script>
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