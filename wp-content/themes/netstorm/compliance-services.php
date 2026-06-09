             <?php get_header();
/*Template Name: Compliance Services */
   ?>
   <style type="text/css">
       .default-padding1 .container {
    margin-right: 0;
}
.default-padding2 .container {
    margin-left: 0;
}
.pdlft {
    padding-left: 0;
}
.pdrgt {
    padding-right: 0;
}
.requirements_img img {
    border-radius: unset;
}
.pdbt {
    align-content: center;
}
.pdlt {
    padding-left: 45px;
}
.pdrt {
    padding-right: 45px;
}
.feature-style-two a:hover {
    color: #df0a0a;
}
   </style>
        <!-- Start Breadcrumb 
    ============================================= -->
    <?php if ( have_rows( 'banner_section' ) ) : ?>
    <?php while ( have_rows( 'banner_section' ) ) : the_row(); ?>
        <?php $banner_image = get_sub_field( 'banner_image' ); ?>
        <?php if ( $banner_image ) : ?>
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light " style="background-image: url(<?php echo esc_url( $banner_image['url'] ); ?>);">
        <?php endif; ?>
        <div class="breadcrum-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sbnr1.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php the_sub_field( 'title' ); ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li> Gaming licenses</li>
                        <li><?php the_sub_field( 'title' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Breadcrumb -->
            <!-- Start Aobut 
    ============================================= -->
    <?php if ( have_rows( 'section-_left_image_1' ) ) : ?>
    <?php while ( have_rows( 'section-_left_image_1' ) ) : the_row(); ?>
    <div class="about-style-two-area overflow-hidden bg-contain default-padding bg-gray" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/29.png);">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-5 about-style-two">
                    <div class="thumb">
                        <?php $second_image_800x900 = get_sub_field( 'second_image_800x900' ); ?>
        <?php if ( $second_image_800x900 ) : ?>
                        <img src="<?php echo esc_url( $second_image_800x900['url'] ); ?>" alt="Image Not Found">
                        <?php endif; ?>
                        <?php $first_image_400x400 = get_sub_field( 'first_image_400x400' ); ?>
        <?php if ( $first_image_400x400 ) : ?>
                        <img src="<?php echo esc_url( $first_image_400x400['url'] ); ?>" alt="Image Not Found">
                        <?php endif; ?>
                        <div class="experience">
                            <h2><strong><?php the_sub_field( 'years_experience' ); ?></strong> Years experience</h2>
                        </div>
                        <div class="shape">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-5.png" alt="Shape">
                        </div>
                    </div>
                </div>

                <div class="about-style-two col-lg-6 offset-lg-1">
                    <div class="site-heading">
                        <!-- <h4 class="sub-heading">Our Process</h4> -->
                        <h2 class="title"><?php the_sub_field( 'section_2_title' ); ?></h2>
                        <div class="devider"></div>
                    </div>
                    <?php the_sub_field( 'section_2_content' ); ?>
                </div>

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End About -->
    <!-- Start Servics Style One 
    ============================================= -->
    <?php if ( have_rows( 'section_-_6_option_with_icon' ) ) : ?>
    <?php while ( have_rows( 'section_-_6_option_with_icon' ) ) : the_row(); ?>
    <div class="services-style-one-area default-padding">
        <div class="center-shape" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/5.png);"></div>
        <div class="container">
            <div class="site-heading text-center">
                        <!-- <h4 class="sub-heading">Our Process</h4> -->
                        <h2 class="title"><?php the_sub_field( 'section_3_title' ); ?></h2>
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
                                        <?php $tab_1_icon = get_sub_field( 'tab_1_icon' ); ?>
                                        <?php if ( $tab_1_icon ) : ?>
                                            <img src="<?php echo esc_url( $tab_1_icon['url'] ); ?>" alt="<?php echo esc_attr( $tab_1_icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <i class="flaticon-personal"></i>
                                        <h4><a href="#"> <?php the_sub_field( 'tab_1_title' ); ?></a></h4>
                                        <?php the_sub_field( 'tab_1_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="services-style-one">
                                        <?php $tab_2_icon = get_sub_field( 'tab_2_icon' ); ?>
                                        <?php if ( $tab_2_icon ) : ?>
                                            <img src="<?php echo esc_url( $tab_2_icon['url'] ); ?>" alt="<?php echo esc_attr( $tab_2_icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <i class="flaticon-career"></i>
                                        <h4><a href="#"> <?php the_sub_field( 'tab_2_title' ); ?></a></h4>
                                        <?php the_sub_field( 'tab_2_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="services-style-one">
                                        <?php $tab_3_icon = get_sub_field( 'tab_3_icon' ); ?>
                                        <?php if ( $tab_3_icon ) : ?>
                                            <img src="<?php echo esc_url( $tab_3_icon['url'] ); ?>" alt="<?php echo esc_attr( $tab_3_icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <i class="flaticon-group"></i>
                                        <h4><a href="#"> <?php the_sub_field( 'tab_3_title' ); ?></a></h4>
                                        <?php the_sub_field( 'tab_3_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="services-style-one">
                                        <?php $tab_4_icon = get_sub_field( 'tab_4_icon' ); ?>
                                        <?php if ( $tab_4_icon ) : ?>
                                            <img src="<?php echo esc_url( $tab_4_icon['url'] ); ?>" alt="<?php echo esc_attr( $tab_4_icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <i class="flaticon-solution-5"></i>
                                        <h4><a href="#"> <?php the_sub_field( 'tab_4_title' ); ?></a></h4>
                                        <?php the_sub_field( 'tab_4_content' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <?php $tab_5_icon = get_sub_field( 'tab_5_icon' ); ?>
                                        <?php if ( $tab_5_icon ) : ?>
                                            <img src="<?php echo esc_url( $tab_5_icon['url'] ); ?>" alt="<?php echo esc_attr( $tab_5_icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <i class="flaticon-business-trip"></i>
                                        <h4><a href="#"> <?php the_sub_field( 'tab_5_title' ); ?></a></h4>
                                        <?php the_sub_field( 'tab_5_content' ); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <?php $tab_6_icon = get_sub_field( 'tab_6_icon' ); ?>
                                        <?php if ( $tab_6_icon ) : ?>
                                            <img src="<?php echo esc_url( $tab_6_icon['url'] ); ?>" alt="<?php echo esc_attr( $tab_6_icon['alt'] ); ?>" />
                                        <?php endif; ?>
                                        <i class="flaticon-business-trip"></i>
                                        <h4><a href="#"> <?php the_sub_field( 'tab_5_title' ); ?></a></h4>
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
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Style One -->

        <!-- Star Services Details Area
    ============================================= -->
    <?php if ( have_rows( 'section_-_right_image_full_width_' ) ) : ?>
    <?php while ( have_rows( 'section_-_right_image_full_width_' ) ) : the_row(); ?>
    <div class="services-details-area overflow-hidden default-padding1 bg-gray">
        <div class="container-fluid">
            <div class="services-details-items">
                <div class="row">
                    
                    <div class="col-xl-6 col-lg-6 order-lg-last pl-md-15 pl-xs-15 pdbt pdlt">
                        <div class="site-heading">
                            <h2 class="title"><?php the_sub_field( 'section_4_title' ); ?></h2>
                            <div class="devider"></div>
                        </div>
                        
                        <div class="features mt-40 mt-xs-30 mb-30 mb-xs-20">
                            <div class="row">
                                    <div class="content">
                                        <?php the_sub_field( 'section_4_content' ); ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 order-lg-last pl-md-15 pl-xs-15 pdrgt">
                        <div class="requirements_img">
                            <?php $section_4_image = get_sub_field( 'section_4_image' ); ?>
        <?php if ( $section_4_image ) : ?>
            <img src="<?php echo esc_url( $section_4_image['url'] ); ?>" alt="<?php echo esc_attr( $section_4_image['alt'] ); ?>" />
        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Details Area -->

        <!-- Start Servics Style One 
    ============================================= -->
    <?php if ( have_rows( 'section_-_6_options' ) ) : ?>
    <?php while ( have_rows( 'section_-_6_options' ) ) : the_row(); ?>
    <div class="services-style-one-area default-padding">
        <div class="center-shape" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/5.png);"></div>
        <div class="container">
            <div class="site-heading text-center">
                        <!-- <h4 class="sub-heading">Our Process</h4> -->
                        <h2 class="title"><?php the_sub_field( 'section_5_title' ); ?></h2>
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
                                    <div class="services-style-one bdr_bx">
                                        <h3><?php the_sub_field( 'section_5_tab_title_1' ); ?></h3>
                                        <h4><a href="#"> <?php the_sub_field( 'section_5_tab_sub_title_1' ); ?></a></h4>
                                        <?php the_sub_field( 'section_5_tab_content_1' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="services-style-one bdr_bx">
                                        <h3><?php the_sub_field( 'section_5_tab_title_2' ); ?></h3>
                                        <h4><a href="#"> <?php the_sub_field( 'section_5_tab_sub_title_2' ); ?></a></h4>
                                        <?php the_sub_field( 'section_5_tab_content_2' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="services-style-one bdr_bx">
                                        <h3><?php the_sub_field( 'section_5_tab_title_3' ); ?></h3>
                                        <h4><a href="#"> <?php the_sub_field( 'section_5_tab_sub_title_3' ); ?></a></h4>
                                        <?php the_sub_field( 'section_5_tab_content_3' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="services-style-one bdr_bx">
                                        <h3><?php the_sub_field( 'section_5_tab_title_4' ); ?></h3>
                                        <h4><a href="#"> <?php the_sub_field( 'section_5_tab_sub_title_4' ); ?></a></h4>
                                        <?php the_sub_field( 'section_5_tab_content_4' ); ?>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one bdr_bx">
                                        <h3><?php the_sub_field( 'section_5_tab_title_5' ); ?></h3>
                                        <h4><a href="#"> <?php the_sub_field( 'section_5_tab_sub_title_5' ); ?></a></h4>
                                        <?php the_sub_field( 'section_5_tab_content_5' ); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one bdr_bx">
                                        <h3><?php the_sub_field( 'section_5_tab_title_6' ); ?></h3>
                                        <h4><a href="#"> <?php the_sub_field( 'section_5_tab_sub_title_6' ); ?></a></h4>
                                        <?php the_sub_field( 'section_5_tab_content_6' ); ?>
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
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Style One -->
<!-- Custom JavaScript -->

    <!-- End Services Details Area -->
        <!-- Star Services Details Area
    ============================================= -->
    <?php if ( have_rows( 'section_-_left_image_full_width' ) ) : ?>
    <?php while ( have_rows( 'section_-_left_image_full_width' ) ) : the_row(); ?>
    <div class="services-details-area overflow-hidden default-padding2 bg-gray">
        <div class="container-fluid">
            <div class="services-details-items">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 order-lg-last pl-md-15 pl-xs-15 pdlft">
                        <div class="requirements_img">
                            <?php $image = get_sub_field( 'image' ); ?>
        <?php if ( $image ) : ?>
            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 order-lg-last pl-50 pl-md-15 pl-xs-15 pdbt pdrt">
                        <div class="site-heading">
                            <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                            <div class="devider"></div>
                        </div>
                        <?php the_sub_field( 'content' ); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Details Area -->

        <!-- Star Services Details Area
    ============================================= -->
    <?php if ( have_rows( 'section_-_3_options_with_2_pragraph' ) ) : ?>
    <?php while ( have_rows( 'section_-_3_options_with_2_pragraph' ) ) : the_row(); ?>
    <div class="services-details-area overflow-hidden default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    
                    <div class="col-xl-12 col-lg-7 order-lg-last pl-50 pl-md-15 pl-xs-15">
                        <div class="site-heading text-center">
                            <h2 class="title"><?php the_sub_field( 'section_6_title' ); ?></h2>
                            <div class="devider"></div>
                        </div>
                        <?php the_sub_field( 'section_6_content' ); ?>
                        <div class="features mt-40 mt-xs-30 mb-30 mb-xs-20">
                                <div class="row relative">
                                    <!-- Single item -->
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="feature-style-two">
                                            <div class="services-style-one">
                                            <i class="flaticon-career"></i>
                                        </div>
                                            <h4><a href="#"><?php the_sub_field( 'section_6_tab_title_1' ); ?></a></h4>
                                            <?php the_sub_field( 'section_6_tab_content_1' ); ?>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                    <!-- Single item -->
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="feature-style-two">
                                            <div class="services-style-one">
                                            <i class="flaticon-solution-5"></i>
                                        </div>
                                            <h4><a href="#"><?php the_sub_field( 'section_6_tab_title_2' ); ?></a></h4>
                                            <?php the_sub_field( 'section_6_tab_content_2' ); ?>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                    <!-- Single item -->
                                    <div class="col-lg-4 col-md-6 mb-30">
                                        <div class="feature-style-two">
                                            <div class="services-style-one">
                                            <i class="flaticon-group"></i>
                                        </div>
                                            <h4><a href="#"><?php the_sub_field( 'section_6_tab_title_3' ); ?></a></h4>
                                            <?php the_sub_field( 'section_6_tab_content_3' ); ?>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                </div>
                            <div class="row">
                                    <div class="content">
                                        <?php the_sub_field( 'section_6_footer_content' ); ?>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Details Area -->
            <!-- Start Request Call Back 
    ============================================= -->
    <?php if ( have_rows( 'section_-_call_to_action' ) ) : ?>
    <?php while ( have_rows( 'section_-_call_to_action' ) ) : the_row(); ?>
    <div class="request-call-back-area text-light default-padding" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pra1.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h2 class="title"><?php the_sub_field( 'section_title' ); ?></h2>
                    <a class="btn circle btn-light mt-30 mt-md-15 mt-xs-10 btn-md radius animation" href="<?php the_sub_field( 'section_7_button_link' ); ?>">Request a Call back</a>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="achivement-counter">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-handshake"></i>
                                </div>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="<?php the_sub_field( 'years_of_experience' ); ?>" data-speed="2000"><?php the_sub_field( 'years_of_experience' ); ?></div>
                                        <div class="operator">+</div>
                                    </div>
                                    <span class="medium">Years of Experience</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-employee"></i>
                                </div>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="<?php the_sub_field( 'guiding_businesses_across_the_globe' ); ?>" data-speed="2000"><?php the_sub_field( 'guiding_businesses_across_the_globe' ); ?></div>
                                        <div class="operator">+</div>
                                    </div>
                                    <span class="medium">Guiding businesses across the globe.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Request Call Back  -->
                <!-- Start Aobut 
    ============================================= -->
    <?php if ( have_rows( 'section-_left_image_2' ) ) : ?>
    <?php while ( have_rows( 'section-_left_image_2' ) ) : the_row(); ?>
    <div class="about-style-two-area overflow-hidden bg-contain default-padding bg-gray" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/29.png);">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-5 about-style-two">
                    <div class="thumb">
                        <?php $section_8_second_image_800x900 = get_sub_field( 'section_8_second_image_800x900' ); ?>
        <?php if ( $section_8_second_image_800x900 ) : ?>
            <img src="<?php echo esc_url( $section_8_second_image_800x900['url'] ); ?>" alt="<?php echo esc_attr( $section_8_second_image_800x900['alt'] ); ?>" />
        <?php endif; ?>
                        <?php $section_8_first_image_400x400 = get_sub_field( 'section_8_first_image_400x400' ); ?>
        <?php if ( $section_8_first_image_400x400 ) : ?>
            <img src="<?php echo esc_url( $section_8_first_image_400x400['url'] ); ?>" alt="<?php echo esc_attr( $section_8_first_image_400x400['alt'] ); ?>" />
        <?php endif; ?>
                        <div class="experience">
                            <h2><strong>20</strong> Years experience</h2>
                        </div>
                        <div class="shape">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/anim-5.png" alt="Shape">
                        </div>
                    </div>
                </div>

                <div class="about-style-two col-lg-6 offset-lg-1">
                    <div class="site-heading">
                            <h2 class="title"><?php the_sub_field( 'section_8_title' ); ?></h2>
                            <div class="devider"></div>
                        </div>
                    <?php the_sub_field( 'section_8_content' ); ?>
                </div>

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End About -->

        
    <!-- End Request Call Back  -->
        <!-- Star Services Details Area
    ============================================= -->
    <?php if ( have_rows( 'section_-_vertical_tab' ) ) : ?>
    <?php while ( have_rows( 'section_-_vertical_tab' ) ) : the_row(); ?>
<div class="services-details-area overflow-hidden default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">

                <!-- Tab Content Section -->
                <div class="col-xl-8 col-lg-7 order-lg-last pl-50 pl-md-15 pl-xs-15">
                    <div class="thumb">
                        <div class="tab-content1" id="email-marketing"> <!-- Tab 1 -->
                           <?php the_sub_field( 'section_9_tab_1_content' ); ?>
                        </div>
                        <div class="tab-content1" id="growth-hacking" style="display: none;"> <!-- Tab 2 -->
                            <?php the_sub_field( 'section_9_tab_content_2' ); ?>
                        </div>
                        <div class="tab-content1" id="lead-generation" style="display: none;"> <!-- Tab 3 -->
                            <?php the_sub_field( 'section_9_tab_content_3' ); ?>
                        </div>
                    </div>
                </div>

                <!-- Tab Links Section -->
                <div class="col-xl-4 col-lg-5 mt-md-120 mt-xs-50 services-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget services-list-widget tabs2">
                        <h4 class="widget-title">More About Anjouan</h4>
                        <div class="content">
                            <ul>
                                <li data-tab="email-marketing"><a href="javascript:void(0);"><?php the_sub_field( 'section_9_tab_1_title' ); ?> </a></li>
                                <li data-tab="growth-hacking"><a href="javascript:void(0);"><?php the_sub_field( 'section_9_tab_title_2' ); ?></a></li>
                                <li data-tab="lead-generation"><a href="javascript:void(0);"><?php the_sub_field( 'section_9_tab_title_3' ); ?> </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>

            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabLinks = document.querySelectorAll('.tabs2 ul li'); // Select all tab links
        const tabContents = document.querySelectorAll('.tab-content1'); // Select all tab contents

        tabLinks.forEach(link => {
            link.addEventListener('click', function () {
                const targetTab = this.getAttribute('data-tab'); // Get the target tab ID

                // Hide all tab contents
                tabContents.forEach(content => content.style.display = 'none');

                // Show the selected tab content
                const targetContent = document.getElementById(targetTab);
                if (targetContent) {
                    targetContent.style.display = 'block';
                }
            });
        });
    });
</script>
        <!-- Start Faq Area 
    ============================================= -->
    <?php if ( have_rows( 'section_-_faq' ) ) : ?>
    <?php while ( have_rows( 'section_-_faq' ) ) : the_row(); ?>
    <div class="faq-area default-padding bg-gray">
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-md-30 mb-xs-30">
                    <div class="faq-sidebar">
                        <div class="faq-sidebar-item bg-theme1 text-light1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/map-light.png);">
                            <div class="site-heading text-center">
                        <!-- <h4 class="sub-heading">Our Process</h4> -->
                        <h2 class="title"><?php the_sub_field( 'section_10_title' ); ?></h2>
                        <div class="devider"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 faq-style-one dark pl-50 pl-md-15 pl-xs-15">

                    <h2 class="title mb-40"><?php the_sub_field( 'section_10_sub_title' ); ?></h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <?php
// Define category and custom post type
$category_slug = 'anjouan'; // Replace with your category slug
$custom_post_type = 'faq'; // Replace with your custom post type name

// Create WP_Query
$args = array(
    'post_type' => $custom_post_type,
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // Replace 'category' with your custom taxonomy if needed
            'field'    => 'slug',
            'terms'    => $category_slug,
        ),
    ),
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    $counter = 1; // Counter to make unique IDs for accordion items
    while ($query->have_posts()) {
        $query->the_post();
        $title = get_the_title(); // Get the post title
        $content = get_the_content(); // Get the post content
        $heading_id = 'heading' . ucfirst($counter); // headingOne, headingTwo, etc.
        $collapse_id = 'collapse' . ucfirst($counter); // collapseOne, collapseTwo, etc.
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr($collapse_id); ?>">
                    <?php echo esc_html($title); ?>
                </button>
            </h2>
            <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <p>
                        <?php echo wp_kses_post($content); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
        $counter++;
    }
    wp_reset_postdata();
} else {
    echo 'No FAQs found.';
}
?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Faq Area -->


    <!-- Start Services 
    ============================================= -->
    <?php if ( have_rows( 'section_-_service_options' ) ) : ?>
    <?php while ( have_rows( 'section_-_service_options' ) ) : the_row(); ?>
    <div class="services-style-two-area default-padding bottom-less bg-cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/27.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading"><?php the_sub_field( 'section_11_sub_title' ); ?></h4>
                        <h2 class="title"><?php the_sub_field( 'section_11_title' ); ?></h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two active">
                        <div class="thumb">
                            <?php $section_11_tab_image_1 = get_sub_field( 'section_11_tab_image_1' ); ?>
        <?php if ( $section_11_tab_image_1 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_1['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_1['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
                                <a href="#">
                                    <i class="flaticon-budget"></i>
                                    <h4><?php the_sub_field( 'section_11_tab_1_title' ); ?></h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <?php the_sub_field( 'section_11_tab_content_1' ); ?>
                            <div class="button">
                                <a href="#">Read More</a>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_2 = get_sub_field( 'section_11_tab_image_2' ); ?>
        <?php if ( $section_11_tab_image_2 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_2['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_2['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
                                <a href="#">
                                    <i class="flaticon-bar-chart"></i>
                                    <h4><?php the_sub_field( 'section_11_tab_title_2' ); ?></h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <?php the_sub_field( 'section_11_tab_content_2' ); ?>
                            <div class="button">
                                <a href="#">Read More</a>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_3 = get_sub_field( 'section_11_tab_image_3' ); ?>
        <?php if ( $section_11_tab_image_3 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_3['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_3['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
                                <a href="#">
                                    <i class="flaticon-credit-cards"></i>
                                    <h4><?php the_sub_field( 'section_11_tab_title_3' ); ?></h4>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                           <?php the_sub_field( 'section_11_tab_content_3' ); ?>
                            <div class="button">
                                <a href="#">Read More</a>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services -->

    <!-- Start Contact Us 
    ============================================= -->
    <?php if ( have_rows( 'section_-_form' ) ) : ?>
    <?php while ( have_rows( 'section_-_form' ) ) : the_row(); ?>
    <div class="contact-style-one-area overflow-hidden default-padding bg-gray">

        <div class="contact-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/37.png" alt="Image Not Found">
        </div>
       
        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2><?php the_sub_field( 'section_12_heading' ); ?>
</h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="<?php echo get_option('phone'); ?>">+ <?php echo get_option('phone'); ?></a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        <?php echo get_option('address'); ?>
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto: <?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Gaming License Consultation</h5>
                        <h2 class="heading"><?php the_sub_field( 'section_12_from_heading' ); ?></h2>
                        <form action="<?php echo get_stylesheet_directory_uri(); ?>/assets/mail/contact.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="Company" name="Company" placeholder="Company Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Message/Inquiry *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get Free Consultation
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Contact -->
    <?php get_footer(); ?>