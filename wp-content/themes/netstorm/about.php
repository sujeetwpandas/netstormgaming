           <?php get_header();
/*Template Name: About Us */
   ?>
<style>
	ul.check-list.fln {
 grid-template-columns: unset;
}
.pdbzro{
    padding-bottom: 0;
}
</style>
    <!-- Start Breadcrumb 
    ============================================= -->
    <?php if ( have_rows( 'banner_section' ) ) : ?>
    <?php while ( have_rows( 'banner_section' ) ) : the_row(); ?>
        <?php $banner_image = get_sub_field( 'banner_image' ); ?>
        <?php if ( $banner_image ) : ?>
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(<?php echo esc_url( $banner_image['url'] ); ?>);">
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
                        <li><?php the_sub_field( 'title' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Breadcrumb -->
        <!-- Star Project Details Area
    ============================================= -->
    <?php if ( have_rows( 'body_section' ) ) : ?>
    <?php while ( have_rows( 'body_section' ) ) : the_row(); ?>

    <div class="project-details-area default-padding pdbzro bg-gray">
        <div class="container">
            <div class="project-details-items">
                <div class="thumb">
                    <?php $body_featured_image = get_sub_field( 'body_featured_image' ); ?>
        <?php if ( $body_featured_image ) : ?>
            <img src="<?php echo esc_url( $body_featured_image['url'] ); ?>" alt="<?php echo esc_attr( $body_featured_image['alt'] ); ?>" />
        <?php endif; ?>
                </div>
                <div class="top-info">
                    <div class="row">

                        <div class="col-xl-4 col-lg-5 order-lg-last right-info">
                            <div class="project-info mt-15" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/41.png);">
                                <h4 class="title">Contact Details</h4>
                                <ul>
                                    <li>
                                        Phone <span>+<?php echo get_option('phone'); ?></span>
                                    </li>
                                    <li>
                                        Address <span><?php echo get_option('address'); ?></span>
                                    </li>
                                </ul>
                                <!-- <ul class="social">
                                    <li>
                                        <a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_option('twitter_url'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_option('linkedin_url'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_option('youtube_url'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-7 pr-35 pr-md-15 pr-xs-15 left-info mt-md-10">
                            <?php the_sub_field( 'paragraph_text_1' ); ?>
                            <?php if ( have_rows( 'our_services' ) ) : ?>
            <?php while ( have_rows( 'our_services' ) ) : the_row(); ?>
                            <ul class="check-list">
                                <li>
                                    <h4><?php the_sub_field( 'tab_title_1' ); ?></h4>
                                    <p>
                                        <?php the_sub_field( 'tab_comments_1' ); ?>
                                    </p>
                                </li>
                                <li>
                                    <h4><?php the_sub_field( 'tab_2_title' ); ?></h4>
                                    <p>
                                        <?php the_sub_field( 'tab_2_content' ); ?>
                                    </p>
                                </li>
                                <li>
                                    <h4><?php the_sub_field( 'tab_title_3' ); ?></h4>
                                    <p>
                                        <?php the_sub_field( 'tab_content_3' ); ?>
                                    </p>
                                </li>
                                <li>
                                    <h4><?php the_sub_field( 'tab_title_4' ); ?></h4>
                                    <p>
                                        <?php the_sub_field( 'tab_content_4' ); ?>
                                    </p>
                                </li>
                            </ul>
                            <?php endwhile; ?>
        <?php endif; ?>
                        </div>
                        
                    </div>
                </div>

                <div class="main-content">
                    
                    <?php the_sub_field( 'paragraph_text_2' ); ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <?php $body_image_1 = get_sub_field( 'body_image_1' ); ?>
        <?php if ( $body_image_1 ) : ?>
            <img src="<?php echo esc_url( $body_image_1['url'] ); ?>" alt="<?php echo esc_attr( $body_image_1['alt'] ); ?>" />
        <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <?php $body_image_2 = get_sub_field( 'body_image_2' ); ?>
        <?php if ( $body_image_2 ) : ?>
            <img src="<?php echo esc_url( $body_image_2['url'] ); ?>" alt="<?php echo esc_attr( $body_image_2['alt'] ); ?>" />
        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Project Details Area -->
        <!-- Start Process
    ============================================= -->
    <?php if ( have_rows( 'our_process' ) ) : ?>
    <?php while ( have_rows( 'our_process' ) ) : the_row(); ?>
        <?php $title4 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title4 ) !== '' ) : ?>
    <div class="process-style-one-area text-center default-padding">
        <div class="large-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/11.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading"><?php the_sub_field( 'sub-title' ); ?></h4>
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
                           <?php $tab_image_1 = get_sub_field( 'tab_image_1' ); ?>
        <?php if ( $tab_image_1 ) : ?>
            <img src="<?php echo esc_url( $tab_image_1['url'] ); ?>" alt="<?php echo esc_attr( $tab_image_1['alt'] ); ?>" />
        <?php endif; ?>
                            <span>01</span>
                        </div>
                        <h4><?php the_sub_field( 'tab_title_1' ); ?></h4>
                        <p>
                            <?php the_sub_field( 'tab_content_1' ); ?>
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one">
                        <div class="thumb">
                            <?php $tab_image_2_ = get_sub_field( 'tab_image_2_' ); ?>
        <?php if ( $tab_image_2_ ) : ?>
            <img src="<?php echo esc_url( $tab_image_2_['url'] ); ?>" alt="<?php echo esc_attr( $tab_image_2_['alt'] ); ?>" />
        <?php endif; ?>
                            <span>02</span>
                        </div>
                        <h4><?php the_sub_field( 'tab_2_title' ); ?></h4>
                        <p>
                            <?php the_sub_field( 'tab_content_2' ); ?>
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one">
                        <div class="thumb">
                            <?php $tab_image_3 = get_sub_field( 'tab_image_3' ); ?>
        <?php if ( $tab_image_3 ) : ?>
            <img src="<?php echo esc_url( $tab_image_3['url'] ); ?>" alt="<?php echo esc_attr( $tab_image_3['alt'] ); ?>" />
        <?php endif; ?>
                            <span>03</span>
                        </div>
                        <h4><?php the_sub_field( 'tab_title_3' ); ?></h4>
                        <p>
                           <?php the_sub_field( 'tab_content_3' ); ?>
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
<!--                         <ul class="list-item"> -->
                            <?php the_sub_field( 'content' ); ?>
<!--                         </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Why Choose Us -->
 
    <?php get_footer(); ?>