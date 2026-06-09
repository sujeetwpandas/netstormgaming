    <?php get_header();
/*Template Name: Home */
   ?>
   <style type="text/css">
       .thumb img {
    height: auto;
}
input.wpcf7-form-control.wpcf7-tel.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-tel.form-control {
    border-radius: 30px;
    padding: 15px;
}
input.wpcf7-form-control.wpcf7-submit.has-spinner.btn.circle.btn-light.mt-30.mt-md-15.mt-xs-10.btn-md.radius.animation {
  margin-top: 0;
  width: 100%;
}
div#wpcf7-f2380-o1 {
    margin-top: 30px;
}
.icon.new-icon {
    padding: 0 15px 0 0;
        width: 70px;
    height: auto;
}
.services-style-one.icon_spc img {
    padding: 0 0px 15px;
    width: 50px;
    height: auto;
}
	   .custom-btn {
    display: inline-block;
    background-color: #DF0A0A; 
    color: #fff; 
    padding: 15px 40px;
    border-radius: 50px; 
    font-size: 18px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
}

.custom-btn:hover {
    background-color: #fff; 
    color: #000; 
    border: 2px solid #000; 
}

.custom-btn:active {
    transform: scale(0.97); 
}

   </style>
    <!-- Start Banner Area 
    ============================================= -->
    <?php if ( have_rows( 'banner_section' ) ) : ?>
    <?php while ( have_rows( 'banner_section' ) ) : the_row(); ?>
    <div class="banner-area banner-style-one shadow navigation-custom-large zoom-effect overflow-hidden text-light">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <?php $banner_image = get_sub_field( 'banner_image' ); ?>
        <?php if ( $banner_image ) : ?>
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(<?php echo esc_url( $banner_image['url'] ); ?>);"></div>
                    <?php endif; ?>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7 offset-xl-5">
                                <div class="content">
                                    <?php the_sub_field( 'banner_sub-title' ); ?>
                                    <?php the_sub_field( 'main_heading' ); ?>
                                    <div class="button mt-40">
                                        <?php $banner_button = get_sub_field( 'banner_button' ); ?>
                                        <?php if ( $banner_button ) : ?>
                                        <a class="btn-animation" href="<?php echo esc_url( $banner_button['url'] ); ?>"><i class="fas fa-arrow-right"></i> <span><?php echo esc_html( $banner_button['title'] ); ?></span></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape -->
                    <div class="banner-shape-bg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/4.png" width="100%" height="auto" alt="Shape">
                    </div>
                    <!-- End Shape -->
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

        </div>  
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Main -->

    <!-- Start About 
    ============================================= -->
    <?php if ( have_rows( 'section_1' ) ) : ?>
    <?php while ( have_rows( 'section_1' ) ) : the_row(); ?>
        <?php $title1 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title1 ) !== '' ) : ?>
    <div class="about-style-one-area default-padding">
        <div class="shape-animated-left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-1.png" alt="Image Not Found">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-2.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">
                <div class="about-style-one col-xl-6 col-lg-5">
                    <div class="h4 sub-heading"><?php the_sub_field( 'sub-title' ); ?></div>
                   <?php the_sub_field( 'title' ); ?>                    
                   <?php the_sub_field( 'content' ); ?>

                    <?php $read_more_button = get_sub_field( 'read_more_button' ); ?>
        <?php if ( $read_more_button ) : ?>
            <a href="<?php echo esc_url( $read_more_button['url'] ); ?>" target="<?php echo esc_attr( $read_more_button['target'] ); ?>"><?php echo esc_html( $read_more_button['title'] ); ?></a>
        <?php endif; ?>
                    <!-- <div class="owner-info">
                        <div class="left-info">
                            <h4>Richard Garrett</h4>
                            <span>CEO & Founder</span>
                        </div>
                        <div class="right-info">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/signature.png" alt="Image Not Found">
                        </div>
                    </div> -->
                </div>
                <div class="about-style-one col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-thumb">
                        <?php $image = get_sub_field( 'image' ); ?>
        <?php if ( $image ) : ?>
                        <img class="wow fadeInRight" src="<?php echo esc_url( $image['url'] ); ?>" width="100%" height="auto" alt="Chips & Cards">
                        <?php endif; ?>
                        <?php if ( have_rows( 'about-card' ) ) : ?>
            <?php while ( have_rows( 'about-card' ) ) : the_row(); ?>
                        <div class="about-card wow fadeInUp" data-wow-delay="500ms">
                            <ul>
                                <li>
                                    <div class="icon new-icon">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_1');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                    </div>
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="<?php the_sub_field( 'counter_1' ); ?>" data-speed="2000"><?php the_sub_field( 'counter_1' ); ?></div>
                                            <div class="operator">%</div>
                                        </div>
                                        <span class="medium"><?php the_sub_field( 'title_1' ); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon new-icon">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_2');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                    </div>
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="<?php the_sub_field( 'counter_2' ); ?>" data-speed="2000"><?php the_sub_field( 'counter_2' ); ?></div>
                                            <div class="operator">+</div>
                                        </div>
                                        <span class="medium"><?php the_sub_field( 'title_2' ); ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       <?php endwhile; ?>
        <?php endif; ?>
                        <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="100ms">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-3.png" width="100%" height="auto" alt="Image Not Found">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-4.png" width="100%" height="auto" alt="Image Not Found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End About -->

    <!-- Start Servics Style One 
    ============================================= -->
    <?php if ( have_rows( 'section_2' ) ) : ?>
    <?php while ( have_rows( 'section_2' ) ) : the_row(); ?>
        <?php $title2 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title2 ) !== '' ) : ?>
    <div class="services-style-one-area default-padding bg-gray">
        <div class="triangle-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/10.png" width="100%" height="auto" alt="Shape">
        </div>
        <div class="center-shape" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/5.png);"></div>
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 mb-md-60">
                    <div class="service-nav-info">
                        <h4 class="sub-title"><?php the_sub_field( 'sub-title' ); ?></h4>
                        <h2><?php the_sub_field( 'title' ); ?></h2>
                        <div class="nav nav-tabs service-tab-navs" id="nav-tab" role="tablist">

                            <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('gaming_licenses_icons');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                <?php the_sub_field( 'gaming_licenses_tab_title_1' ); ?>
                            </button>
                            <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('other_services_icons');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                <?php the_sub_field( 'other_services_tab_title_2' ); ?>
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-50 pl-md-15 pl-xs-15">
                    <div class="tab-content services-tab-content" id="nav-tabContent">

                        <?php if ( have_rows( 'gaming_licenses_options' ) ) : ?>
                            <?php while ( have_rows( 'gaming_licenses_options' ) ) : the_row(); ?>
                        <!-- Tab Single Item -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('gaming_licenses_icons_1');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_1 = get_sub_field( 'link_1' ); ?>
                <?php if ( $link_1 ) : ?>
                    <a href="<?php echo esc_url( $link_1['url'] ); ?>" target="<?php echo esc_attr( $link_1['target'] ); ?>"><?php echo esc_html( $link_1['title'] ); ?></a>
                <?php endif; ?>
                                        </h4>
                                        <div class="info">
                                           <p> <?php the_sub_field( 'gaming_licenses_tab_1_content' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('gaming_licenses_icons_2');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_2 = get_sub_field( 'link_2' ); ?>
                <?php if ( $link_2 ) : ?>
                    <a href="<?php echo esc_url( $link_2['url'] ); ?>" target="<?php echo esc_attr( $link_2['target'] ); ?>"><?php echo esc_html( $link_2['title'] ); ?></a>
                <?php endif; ?></h4>
                                        <div class="info">
                                           <p> <?php the_sub_field( 'gaming_licenses_tab_2_content' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('gaming_licenses_icons_3');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_3 = get_sub_field( 'link_3' ); ?>
                <?php if ( $link_3 ) : ?>
                    <a href="<?php echo esc_url( $link_3['url'] ); ?>" target="<?php echo esc_attr( $link_3['target'] ); ?>"><?php echo esc_html( $link_3['title'] ); ?></a>
                <?php endif; ?></h4>
                                       <div class="info">
                                            <p><?php the_sub_field( 'gaming_licenses_tab_3_content' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('gaming_licenses_icons_4');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_4 = get_sub_field( 'link_4' ); ?>
                <?php if ( $link_4 ) : ?>
                    <a href="<?php echo esc_url( $link_4['url'] ); ?>" target="<?php echo esc_attr( $link_4['target'] ); ?>"><?php echo esc_html( $link_4['title'] ); ?></a>
                <?php endif; ?></h4>
                                        <p><?php the_sub_field( 'gaming_licenses_tab_4_content' ); ?></p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- End Tab Single Item -->

                        <!-- Tab Single Item -->
                        <?php if ( have_rows( 'other_services_options' ) ) : ?>
                            <?php while ( have_rows( 'other_services_options' ) ) : the_row(); ?>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('other_services_icons_1');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_1 = get_sub_field( 'link_1' ); ?>
                <?php if ( $link_1 ) : ?>
                    <a href="<?php echo esc_url( $link_1['url'] ); ?>" target="<?php echo esc_attr( $link_1['target'] ); ?>"><?php echo esc_html( $link_1['title'] ); ?></a>
                <?php endif; ?></h4>
                                        <div class="info">
                                            <p><?php the_sub_field( 'other_services_tab_1_content' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('other_services_icons_2');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_2 = get_sub_field( 'link_2' ); ?>
                <?php if ( $link_2 ) : ?>
                    <a href="<?php echo esc_url( $link_2['url'] ); ?>" target="<?php echo esc_attr( $link_2['target'] ); ?>"><?php echo esc_html( $link_2['title'] ); ?></a>
                <?php endif; ?></h4>
                                        <div class="info">
                                            <p><?php the_sub_field( 'other_services_tab_2_content' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('other_services_icons_3');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_3 = get_sub_field( 'link_3' ); ?>
                <?php if ( $link_3 ) : ?>
                    <a href="<?php echo esc_url( $link_3['url'] ); ?>" target="<?php echo esc_attr( $link_3['target'] ); ?>"><?php echo esc_html( $link_3['title'] ); ?></a>
                <?php endif; ?></h4>
                                       <div class="info">
                                            <p><?php the_sub_field( 'other_services_tab_3_content' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="services-style-one icon_spc">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('other_services_icons_4');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                        <h4><?php $link_4 = get_sub_field( 'link_4' ); ?>
                <?php if ( $link_4 ) : ?>
                    <a href="<?php echo esc_url( $link_4['url'] ); ?>" target="<?php echo esc_attr( $link_4['target'] ); ?>"><?php echo esc_html( $link_4['title'] ); ?></a>
                <?php endif; ?></h4>
                                        <p><?php the_sub_field( 'other_services_tab_4_content' ); ?></p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        <!-- End Tab Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Style One -->

    <!-- Start Process
    ============================================= -->
    <?php if ( have_rows( 'section_3' ) ) : ?>
    <?php while ( have_rows( 'section_3' ) ) : the_row(); ?>
        <?php $title3 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title3 ) !== '' ) : ?>
    <div class="process-style-one-area text-center default-padding">
        <div class="large-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/11.png" width="100%" height="auto" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading"><?php the_sub_field( 'sub_title' ); ?></h4>
                        <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one active">
                        <div class="thumb">
                            <?php $tab_1_image = get_sub_field( 'tab_1_image' ); ?>
                            <?php if ( $tab_1_image ) : ?>
                                <img src="<?php echo esc_url( $tab_1_image['url'] ); ?>" width="100%" height="auto" alt="<?php echo esc_attr( $tab_1_image['alt'] ); ?>" />
                            <?php endif; ?>
                            <span>01</span>
                        </div>
                        <h4><?php the_sub_field( 'tab_1_title' ); ?></h4>
                        <p>
                            <?php the_sub_field( 'tab_1_content' ); ?>
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one">
                        <div class="thumb">
                            <?php $tab_2_image = get_sub_field( 'tab_2_image' ); ?>
                                <?php if ( $tab_2_image ) : ?>
                                    <img src="<?php echo esc_url( $tab_2_image['url'] ); ?>" width="100%" height="auto" alt="<?php echo esc_attr( $tab_2_image['alt'] ); ?>" />
                                <?php endif; ?>
                            <span>02</span>
                        </div>
                        <h4><?php the_sub_field( 'tab_2_title' ); ?></h4>
                        <p>
                           <?php the_sub_field( 'tab_2_content' ); ?>
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one">
                        <div class="thumb">
                            <?php $tab_3_image = get_sub_field( 'tab_3_image' ); ?>
                            <?php if ( $tab_3_image ) : ?>
                                <img src="<?php echo esc_url( $tab_3_image['url'] ); ?>" width="100%" height="auto" alt="<?php echo esc_attr( $tab_3_image['alt'] ); ?>" />
                            <?php endif; ?>
                            <span>03</span>
                        </div>
                        <h4><?php the_sub_field( 'tab_3_title' ); ?></h4>
                        <p>
                           <?php the_sub_field( 'tab_3_content' ); ?>
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Process -->
    
    <!-- End Projects Area -->

    <!-- Start Request Call Back 
    ============================================= -->
    <?php if ( have_rows( 'call_to_action' ) ) : ?>
    <?php while ( have_rows( 'call_to_action' ) ) : the_row(); ?>
        <?php $title4 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title4 ) !== '' ) : ?>
        <?php $background_image = get_sub_field( 'background_image' ); ?>
        <?php if ( $background_image ) : ?>
        
    <div class="request-call-back-area text-light default-padding" style="background-image: url(<?php echo esc_url( $background_image['url'] ); ?>);">
        <?php endif; ?>
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
<!--                      <?php echo do_shortcode('[contact-form-7 id="96b3762" title="Call To Action"]'); ?> -->
					<a href="/contact-us/" class="custom-btn"><i class="fa fa-paper-plane"></i> Get in touch</a>
                </div>
                <div class="col-lg-6 text-end">
                    <?php if ( have_rows( 'achievements' ) ) : ?>
            <?php while ( have_rows( 'achievements' ) ) : the_row(); ?>
                    <div class="achivement-counter">
                        <ul>
                            <li>
                                <div class="icon new-icon">
                                    <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_1');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                </div>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="<?php the_sub_field( 'counter_1' ); ?>" data-speed="2000"><?php the_sub_field( 'counter_1' ); ?></div>
                                        <div class="operator">+</div>
                                    </div>
                                    <span class="medium"><?php the_sub_field( 'title_1' ); ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="icon new-icon">
                                    <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_2');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" />';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning"></span>';
                                            }
                                            ?>
                                </div>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="<?php the_sub_field( 'counter_2' ); ?>" data-speed="2000"><?php the_sub_field( 'counter_2' ); ?></div>
                                        <div class="operator">+</div>
                                    </div>
                                    <span class="medium"><?php the_sub_field( 'title_2' ); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?php endwhile; ?>
        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Request Call Back  -->


    <?php get_footer(); ?>