    <?php get_header('lp');
/*Template Name: Gaming Lincese Landing Page */
   ?>
   <style type="text/css">
       .thumb img {
    height: auto;
}
#navbar-menu{
    display: none !important;
}
input.wpcf7-form-control.wpcf7-tel.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-tel.form-control {
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
.choose-business{
	background: linear-gradient(to right, #15181D, #1D2027);
      color: white;
      padding: 50px 20px;
}
.services-style-one.icon_spc img {
    padding: 0 0px 15px;
    width: 50px;
    height: auto;
}
.section-title {
	text-align: center;
	color: var(--bg-gradient);
	font-weight: bold;
	font-size: 2rem;
  }
  .section-subtitle {
	text-align: center;
	font-size: 1.1rem;
	margin-bottom: 40px;
  }
  .divider {
	width: 60px;
	height: 3px;
	background-color: white;
	margin: 10px auto 30px;
  }
  .info-card {
	background: rgba(255, 255, 255, 0.1);
	border-radius: 12px;
	padding: 25px;
	text-align: left;
	transition: transform 0.3s ease;
	height: 100%;
  }
  .info-card:hover {
	transform: translateY(-5px);
  }
  .info-icon {
	font-size: 80px;
	margin-bottom: 15px;
	color: #DF0A0A;
  }
  .info-title {
	font-weight: 700;
	font-size: 1.2rem;
	margin-bottom: 10px;
    color: #ffffff;
  }
  .info-text {
	font-size: 0.95rem;
	color: #ffffff;
  }
  
  .disclaimer-body{
	background-color: #ebecec;
      padding: 50px 15px;
  }

   
    .disclaimer-box {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      padding: 30px;
      max-width: 900px;
      margin: auto;
      text-align: center;
    }
    .disclaimer-title {
      font-weight: 600;
      margin-bottom: 15px;
      color: #000;
    }
    .disclaimer-text {
      font-size: 0.95rem;
      color: #333;
      line-height: 1.6;
    }

	.banner-thumb {
		position: relative;
		background-size: cover;
		background-position: center;
		z-index: 1;
	  }
	  
	  .banner-thumb::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(to right, rgba(0, 0, 0, 0.6), transparent);
		z-index: 2;
	  }
      .item-flex-footer{
	display: flex;
	flex-direction: column;

}

.item-flex-footer li {
	margin-left: 0;
}

.item-flex-footer li:first-child {
	margin: 0;
}

.item-flex-footer li i {
	margin-right: 10px;
	font-weight: 100;
	font-size: 24px;
	color: #DF0A0A;
}
.custom-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.6em 1.5em;
    border: 2px solid black;
    border-radius: 25px;
    font-size: clamp(0.9rem, 2.5vw, 1.2rem); /* Responsive font-size */
    transition: all 0.3s ease;
    text-decoration: none;
    color: black;
}

.custom-button i {
    margin-right: 8px;
}

.custom-button:hover {
    background-color: black;
    color: white;
}

.services-style-two .thumb .title h3 {
    padding: 10px 25px !important;
}
.services-style-two .thumb .title h3 {
    margin: 0;
    padding: 0 25px;
    font-weight: 600;
    color: #fff;
}
	   
.center-shape {
    z-index: -999999 !important;
}

ul.item-flex.d-inline-flex.align-items-center {
    z-index: 9999999 !important;
}
	   
	   
	   
@media (min-width: 1200px) {
    nav.navbar.navbar-style-one.validnavs.navbar-fixed.no-background {
        box-shadow: inherit;
        top: 60px;
    }
}
	   .form-group.comments textarea,
	   .textarea{
		   border: 2px solid #e8e8e8 !important; 
		   padding-left: 10px !important;
	   }
   </style>
    <!-- Start Banner Area 
    ============================================= -->
    <?php if ( have_rows( 'banner_section_1' ) ) : ?>
    <?php while ( have_rows( 'banner_section_1' ) ) : the_row(); ?>
    <div class="banner-area banner-style-one shadow navigation-custom-large zoom-effect overflow-hidden text-light">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <?php $banner_image_1 = get_sub_field( 'banner_image_1' ); ?>
        <?php if ( $banner_image_1 ) : ?>
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(<?php echo esc_url( $banner_image_1['url'] ); ?>);"></div>
                    <?php endif; ?>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content" style="padding-top: 20px; padding-bottom: 20px">
                                    <h1><?php the_sub_field( 'banner_sub-title_1' ); ?></h1>
                                    <?php the_sub_field( 'main_heading_1' ); ?>
                                    <div class="button mt-40">
                                        <?php $banner_button_1 = get_sub_field( 'banner_button_1' ); ?>
                                        <?php if ( $banner_button_1 ) : ?>
                                        <a class="btn-animation" href="<?php echo esc_url( $banner_button_1['url'] ); ?>"><i class="fas fa-arrow-right"></i> <span><?php echo esc_html( $banner_button_1['title'] ); ?></span></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape -->
                    <div class="banner-shape-bg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/4.png" alt="Shape">
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-1.png" alt="anim 1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-2.png" alt="anim 2">
        </div>
        <div class="container">
            <div class="row align-center">
                <div class="about-style-one col-xl-6 col-lg-5">
                    <h2 class="h4 sub-heading"><?php the_sub_field( 'sub-title' ); ?></h2>
                   <?php the_sub_field( 'title' ); ?>                    
                   <?php the_sub_field( 'content' ); ?>

                    <?php $read_more_button = get_sub_field( 'read_more_button' ); ?>
        <?php if ( $read_more_button ) : ?>
          <div class="custom-button-wrapper mt-40">
            <a class="custom-button btn-animation" style=" border: 2px solid black; padding: 10px; border-radius: 25px;" href="<?php echo esc_url( $read_more_button['url'] ); ?>" target="<?php echo esc_attr( $read_more_button['target'] ); ?>"><i class="fas fa-arrow-right"></i><?php echo esc_html( $read_more_button['title'] ); ?></a>
            </div>
       <?php endif; ?>
                   
                </div>
                <div class="about-style-one col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-thumb">
                        <?php $image = get_sub_field( 'image' ); ?>
                         <?php if ( $image ) : ?>
                        <img class="wow fadeInRight" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo  $image['alt']; ?>">
                        <?php endif; ?>
                         <?php if ( have_rows( 'about_card' ) ) : ?>
            <?php while ( have_rows( 'about_card' ) ) : the_row(); ?>
                        
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
             <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="300ms">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-3.png" alt="anim 3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-4.png" alt="anim 4">
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

    <!-- Start Why Choose Us
    ============================================= -->
    <?php if ( have_rows( 'call_to_action' ) ) : ?>
    <?php while ( have_rows( 'call_to_action' ) ) : the_row(); ?>
        <?php $title5 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title5 ) !== '' ) : ?>
    <div class="choose-us-style-one-area default-padding text-light">
        <?php $background_image = get_sub_field( 'background_image' ); ?>
        <?php if ( $background_image ) : ?>
        
        <div class="cover-bg" style="background-image: url(<?php echo esc_url( $background_image['url'] ); ?>);"></div>
        <?php endif; ?>
        <div class="shape-left-top">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/17.png" alt="Shape">
        </div>
        <div class="text-invisible">Netstorm</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-80">
                    <div class="choose-us-style-one">
                        <h2 class="title mb-35"><?php the_sub_field( 'title' ); ?></h2>

                            <?php the_sub_field( 'content' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Why Choose Us -->

     <!-- Start Servics Style One 
    ============================================= -->
    <?php if ( have_rows( 'section_-_6_option_with_icon' ) ) : ?>
    <?php while ( have_rows( 'section_-_6_option_with_icon' ) ) : the_row(); ?>
         <?php $section_3_title = get_sub_field( 'section_3_title' ); ?>
        <?php if ( trim( $section_3_title ) !== '' ) : ?>
    <div class="services-style-one-area icon_img " style="padding-top: 80px; padding-bottom: 80px;">
        <div class="center-shape" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/5.png);"></div>
        <div class="container">
            <div class="site-heading text-center">
                        <!-- <h4 class="sub-heading">Our Process</h4>
                        <h2 class="title"><?php the_sub_field( 'section_3_title' ); ?></h2>-->
				        <?php the_sub_field( 'section_3_title' ); ?>
                        <div class="devider"></div>
                    </div>
            <div class="row align-center">
                <div class="col-lg-12 pl-50 pl-md-15 pl-xs-15">
                    <div class="tab-content134 services-tab-content" id="nav-tabContent2">

                        <!-- Tab Single Item -->
                        <div class="tab-pane fade show active" id="tab001" role="tabpanel" aria-labelledby="nav-id-1">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp">
                                    <div class="services-style-one">
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
                                        <h3><a href="#"> <?php the_sub_field( 'tab_1_title' ); ?></a></h3>
                                        <?php the_sub_field( 'tab_1_content' ); ?>
                                        

                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="services-style-one">
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
                                        <h3><a href="#"> <?php the_sub_field( 'tab_2_title' ); ?></a></h3>
                                        <?php the_sub_field( 'tab_2_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="services-style-one">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_3');

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
                                        <h3><a href="#"> <?php the_sub_field( 'tab_3_title' ); ?></a></h3>
                                        <?php the_sub_field( 'tab_3_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="services-style-one">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('tab_4_icon');

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
                                        <h3><a href="#"> <?php the_sub_field( 'tab_4_title' ); ?></a></h3>
                                        <?php the_sub_field( 'tab_4_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one ">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_5');

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
                                        <h3><a href="#"> <?php the_sub_field( 'tab_5_title' ); ?></a></h3>
                                        <?php the_sub_field( 'tab_5_content' ); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('icons_6');

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
                                        <h3><a href="#"> <?php the_sub_field( 'tab_6_title' ); ?></a></h3>
                                        <?php the_sub_field( 'tab_6_content' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
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

     <!-- Start Services 
    ============================================= -->
    <?php if ( have_rows( 'section_-_service_options' ) ) : ?>
    <?php while ( have_rows( 'section_-_service_options' ) ) : the_row(); ?>
        <?php $section_11_title = get_sub_field( 'section_11_title' ); ?>
        <?php if ( trim( $section_11_title ) !== '' ) : ?>
    <div class="services-style-two-area bottom-less bg-cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/27.png); padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <p class="sub-heading"><?php the_sub_field( 'section_11_sub_title' ); ?></p>
                        <h2 class="title"><?php the_sub_field( 'section_11_title' ); ?></h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Item -->
                <div class="col-md-6 col-lg-3 mb-30">
                    <div class="services-style-two active">
                        <div class="thumb">
                            <?php $section_11_tab_image_1 = get_sub_field( 'section_11_tab_image_1' ); ?>
        <?php if ( $section_11_tab_image_1 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_1['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_1['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
                               
                                    <!-- <i class="flaticon-budget"></i> -->
                                    <h3><?php the_sub_field( 'section_11_tab_1_title' ); ?></h3>
                                
                            </div>
                        </div>
                        <div class="info">
                            <?php the_sub_field( 'section_11_tab_content_1' ); ?>
                            <div class="button">
                                <?php $tab_link_1 = get_sub_field( 'tab_link_1' ); ?>
		<?php if ( $tab_link_1 ) : ?>
			<a href="<?php echo esc_url( $tab_link_1['url'] ); ?>"><?php echo esc_html( $tab_link_1['title'] ); ?></a>
		<?php endif; ?>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-6 col-lg-3 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_2 = get_sub_field( 'section_11_tab_image_2' ); ?>
        <?php if ( $section_11_tab_image_2 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_2['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_2['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
								
                                    <!-- <i class="flaticon-bar-chart"></i> -->
                                    <h3><?php the_sub_field( 'section_11_tab_2_title' ); ?></h3>
                               
								
                            </div>
                        </div>
                        <div class="info">
                            <?php the_sub_field( 'section_11_tab_content_2' ); ?>
                            <div class="button">
                                <?php $tab_link_2 = get_sub_field( 'tab_link_2' ); ?>
		<?php if ( $tab_link_2 ) : ?>
			<a href="<?php echo esc_url( $tab_link_2['url'] ); ?>"><?php echo esc_html( $tab_link_2['title'] ); ?></a>
		<?php endif; ?>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-6 col-lg-3 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_3 = get_sub_field( 'section_11_tab_image_3' ); ?>
        <?php if ( $section_11_tab_image_3 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_3['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_3['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
								
                                    <h3><?php the_sub_field( 'section_11_tab_3_title' ); ?></h3>
                                
                            </div>
                        </div>
                        <div class="info">
                           <?php the_sub_field( 'section_11_tab_content_3' ); ?>
                            <div class="button">
                                <?php $tab_link_3 = get_sub_field( 'tab_link_3' ); ?>
		<?php if ( $tab_link_3 ) : ?>
			<a href="<?php echo esc_url( $tab_link_3['url'] ); ?>"><?php echo esc_html( $tab_link_3['title'] ); ?></a>
		<?php endif; ?>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                  <!-- Single Item -->
                <div class="col-md-6 col-lg-3 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_4 = get_sub_field( 'section_11_tab_image_4' ); ?>
        <?php if ( $section_11_tab_image_4 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_4['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_4['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
								
                                    <!-- <i class="flaticon-credit-cards"></i> -->
                                    <h3><?php the_sub_field( 'section_11_tab_4_title' ); ?></h3>
                               
                            </div>
                        </div>
                        <div class="info">
                           <?php the_sub_field( 'section_11_tab_content_4' ); ?>
                            <div class="button">
                                <?php $tab_link_4 = get_sub_field( 'tab_link_4' ); ?>
		<?php if ( $tab_link_4 ) : ?>
			<a href="<?php echo esc_url( $tab_link_4['url'] ); ?>"><?php echo esc_html( $tab_link_4['title'] ); ?></a>
		<?php endif; ?>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services -->

    <!--Why Choose Us-->
    <?php if ( have_rows( 'why_choose_us' ) ) : ?>
	<?php while ( have_rows( 'why_choose_us' ) ) : the_row(); ?>
        <?php $w_title_1 = get_sub_field( 'w_title_1' ); ?>
        <?php if ( trim( $w_title_1 ) !== '' ) : ?>
            <div class="about-style-one-area default-padding choose-business">
              <div class="container">
                 <h2 class="section-title"><?php the_sub_field( 'w_title_1' ); ?></h2>
                 <div class="divider"></div>
                  <p class="section-subtitle">
                        <?php the_sub_field( 'w_sub-title' ); ?>
                  </p>

                  <div class="row g-4">
                     <div class="col-md-6 col-lg-3">
                         <div class="info-card h-100">
                         <div class="info-icon"> <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('tab_1_icons');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '" style="font-size: 50px; margin-bottom: 22px;"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;" />';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning" style="font-size: 50px; margin-bottom: 22px;"></span>';
                                            }
                                            ?></div>
                                            <div class="info-title"><?php the_sub_field( 'tab_1_title' ); ?></div>
                                            <div class="info-text">
                                               <?php the_sub_field( 'tab_1_content' ); ?>
                                            </div>
                                    </div>
                         </div>
                <div class="col-md-6 col-lg-3">
                         <div class="info-card h-100">
                         <div class="info-icon"> <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('tab_2_icons');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '" style="font-size: 50px; margin-bottom: 22px;"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning" style="font-size: 50px; margin-bottom: 22px;"></span>';
                                            }
                                            ?></div>
                                            <div class="info-title"><?php the_sub_field( 'tab_2_title' ); ?></div>
                                            <div class="info-text">
                                               <?php the_sub_field( 'tab_2_content' ); ?>
                                            </div>
                                    </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                         <div class="info-card h-100">
                         <div class="info-icon"> <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('tab_3_icons');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '" style="font-size: 50px; margin-bottom: 22px;"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning" style="font-size: 50px; margin-bottom: 22px;"></span>';
                                            }
                                            ?></div>
                                            <div class="info-title"><?php the_sub_field( 'tab_3_title' ); ?></div>
                                            <div class="info-text">
                                               <?php the_sub_field( 'tab_3_content' ); ?>
                                            </div>
                                    </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                         <div class="info-card h-100">
                         <div class="info-icon"> <?php
                                            // Get the icon field value (change 'icon_field' to your actual ACF field name)
                                            $icon_field = get_sub_field('tab_4_icons');

                                            if ( $icon_field ) {
                                                
                                                // Case 1: If it's a Dashicon (string starting with 'dashicons')
                                                if ( is_string($icon_field) && strpos($icon_field, 'dashicons') !== false ) {
                                                    echo '<span class=" dashicons ' . esc_attr($icon_field) . '" style="font-size: 50px; margin-bottom: 22px;"></span>';

                                                // Case 2: If it's an image from media library (array with URL)
                                                } elseif ( is_array($icon_field) && isset($icon_field['url']) ) {
                                                    echo '<img src="' . esc_url($icon_field['url']) . '" alt="' . esc_attr($icon_field['alt']) . '" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';

                                                // Case 3: If it's a direct URL (user entered/pasted)
                                                } elseif ( filter_var($icon_field, FILTER_VALIDATE_URL) ) {
                                                    echo '<img src="' . esc_url($icon_field) . '" alt="Icon" class="custom-icon" style="font-size: 50px; margin-bottom: 22px;"/>';
                                                }

                                            } else {
                                                // Optional: fallback
                                                echo '<span class="dashicons dashicons-warning" style="font-size: 50px; margin-bottom: 22px;"></span>';
                                            }
                                            ?></div>
                                            <div class="info-title"><?php the_sub_field( 'tab_4_title' ); ?></div>
                                            <div class="info-text">
                                               <?php the_sub_field( 'tab_4_content' ); ?>
                                            </div>
                                    </div>
                         </div>
        </div>

        </div>
        </div>

     <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>   

  <!-- Start Contact Us 
    ============================================= -->
    <?php if ( have_rows( 'lp_form' ) ) : ?>
    <?php while ( have_rows( 'lp_form' ) ) : the_row(); ?>
        <?php $lp_heading = get_sub_field( 'lp_heading' ); ?>
        <?php if ( trim( $lp_heading ) !== '' ) : ?>
    <div class="contact-style-one-area overflow-hidden default-padding bg-gray">

        <div class="contact-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/37.png" alt="shape 37">
        </div>
       
        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info"><?php the_sub_field( 'lp_heading' ); ?>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p class="title" style="font-size: 20px;">Phone</p>
                                    <a href="tel:<?php echo get_option('phone'); ?>">+ <?php echo get_option('phone'); ?></a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <p class="title" style="font-size: 20px;">Address</p>
                                    <p>
                                        <?php echo get_option('address'); ?>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one" id="contact">
                        <?php the_sub_field( 'lp_form_heading' ); ?>
                        <?php echo do_shortcode('[contact-form-7 id="b81173f" title="Enquiry form LP"]'); ?>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Contact -->

    <!--Disclaimer
    ============================================= -->
    <?php if ( have_rows( 'disclaimer' ) ) : ?>
	<?php while ( have_rows( 'disclaimer' ) ) : the_row(); ?>
        <?php $disclaimer_title = get_sub_field( 'disclaimer_title' ); ?>
        <?php if ( trim( $disclaimer_title ) !== '' ) : ?>
   <div
      class="contact-style-one-area overflow-hidden default-padding disclaimer-body"
    >
      <div class="disclaimer-box">
        <p class="disclaimer-title sub-title"><?php the_sub_field( 'disclaimer_title' ); ?></p>
        <p class="disclaimer-text">
         <?php the_sub_field( 'disclaimer_content' ); ?>
        </p>
      </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Contact -->


    
    <!-- End Projects Area -->

  

    <?php get_footer('lp'); ?>