             <?php get_header();
/*Template Name: Banking */
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
.request-call-back-area input.wpcf7-form-control.wpcf7-tel.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-tel.form-control {
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
                        <li> Services</li>
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
        <?php $section_2_title = get_sub_field( 'section_2_title' ); ?>
        <?php if ( trim( $section_2_title ) !== '' ) : ?>
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
                            <h2><strong><?php the_sub_field( 'years_experience' ); ?></strong> <?php the_sub_field( 'red_box_title' ); ?></h2>
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
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End About -->

        <!-- Star Services Details Area
    ============================================= -->
    <?php if ( have_rows( 'section_-_right_image_full_width_' ) ) : ?>
    <?php while ( have_rows( 'section_-_right_image_full_width_' ) ) : the_row(); ?>
        <?php $section_4_title = get_sub_field( 'section_4_title' ); ?>
        <?php if ( trim( $section_4_title ) !== '' ) : ?>
    <div class="services-details-area overflow-hidden default-padding1 bg-gray1">
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
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Details Area -->
<?php if ( have_rows( 'paragraph_text' ) ) : ?>
    <?php while ( have_rows( 'paragraph_text' ) ) : the_row(); ?>
        <?php $title1 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title1 ) !== '' ) : ?>
<div class="services-details-area overflow-hidden default-padding bg-gray">
   <div class="container">
      <div class="services-details-items">
         <div class="row">
            <div class="col-xl-12 col-lg-7 order-lg-last pl-50 pl-md-15 pl-xs-15">
               <div class="site-heading text-center">
                  <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <div class="devider"></div>
               </div>
               <div class="features mt-40 mt-xs-30 mb-30 mb-xs-20">
                  <div class="row">
                     <div class="content">
                        <?php the_sub_field( 'content' ); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<!-- Custom JavaScript -->

    <!-- End Services Details Area -->
        <!-- Star Services Details Area
    ============================================= -->
    <?php if ( have_rows( 'section_-_left_image_full_width' ) ) : ?>
    <?php while ( have_rows( 'section_-_left_image_full_width' ) ) : the_row(); ?>
        <?php $title11 = get_sub_field( 'title' ); ?>
        <?php if ( trim( $title11 ) !== '' ) : ?>
    <div class="services-details-area overflow-hidden default-padding2 bg-gray1">
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
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services Details Area -->

        <!-- Start Faq Area 
    ============================================= -->
    <?php if ( have_rows( 'section_-_faq' ) ) : ?>
    <?php while ( have_rows( 'section_-_faq' ) ) : the_row(); ?>
        <?php $section_10_titles = get_sub_field( 'section_10_title' ); ?>
        <?php if ( trim( $section_10_titles ) !== '' ) : ?>
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
$category_slug = 'banking'; // Replace with your category slug
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
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Faq Area -->


    <!-- Start Services 
    ============================================= -->
    <?php if ( have_rows( 'section_-_service_options' ) ) : ?>
    <?php while ( have_rows( 'section_-_service_options' ) ) : the_row(); ?>
        <?php $section_11_titles = get_sub_field( 'section_11_title' ); ?>
        <?php if ( trim( $section_11_titles ) !== '' ) : ?>
    <div class="services-style-two-area default-padding bottom-less bg-cover bg-gray" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/27.png);">
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
                                <?php $tab_link_1 = get_sub_field( 'tab_link_1' ); ?>
		<?php if ( $tab_link_1 ) : ?>
			<a href="<?php echo esc_url( $tab_link_1['url'] ); ?>">
                                    <!-- <i class="flaticon-budget"></i> -->
                                    <h4><?php the_sub_field( 'section_11_tab_1_title' ); ?></h4>
                                </a>
								<?php endif; ?>
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
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_2 = get_sub_field( 'section_11_tab_image_2' ); ?>
        <?php if ( $section_11_tab_image_2 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_2['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_2['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
                                 <?php $tab_link_2 = get_sub_field( 'tab_link_2' ); ?>
		<?php if ( $tab_link_2 ) : ?>
			<a href="<?php echo esc_url( $tab_link_2['url'] ); ?>">
                                    <!-- <i class="flaticon-bar-chart"></i> -->
                                    <h4><?php the_sub_field( 'section_11_tab_title_2' ); ?></h4>
                                </a>
								<?php endif; ?>
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
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="services-style-two">
                        <div class="thumb">
                            <?php $section_11_tab_image_3 = get_sub_field( 'section_11_tab_image_3' ); ?>
        <?php if ( $section_11_tab_image_3 ) : ?>
            <img src="<?php echo esc_url( $section_11_tab_image_3['url'] ); ?>" alt="<?php echo esc_attr( $section_11_tab_image_3['alt'] ); ?>" />
        <?php endif; ?>
                            <div class="title">
                                <?php $tab_link_3 = get_sub_field( 'tab_link_3' ); ?>
		<?php if ( $tab_link_3 ) : ?>
			<a href="<?php echo esc_url( $tab_link_3['url'] ); ?>">
                                    <!-- <i class="flaticon-credit-cards"></i> -->
                                    <h4><?php the_sub_field( 'section_11_tab_title_3' ); ?></h4>
                                </a>
								<?php endif; ?>
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

            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Services -->

    <!-- Start Contact Us 
    ============================================= -->
    <?php if ( have_rows( 'section_-_form' ) ) : ?>
    <?php while ( have_rows( 'section_-_form' ) ) : the_row(); ?>
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/37.png" alt="Image Not Found">
        </div>
       
        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <?php the_sub_field( 'section_12_heading' ); ?>
                       <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Phone</h5>
                                    <a href="<?php echo get_option('phone'); ?>">+ <?php echo get_option('phone'); ?></a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Address</h5>
                                    <p>
                                        <?php echo get_option('address'); ?>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <?php the_sub_field( 'section_12_from_heading' ); ?>
                        <?php echo do_shortcode('[contact-form-7 id="2d49c70" title="Contact page enquiry form"]'); ?>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Contact -->
    <?php get_footer(); ?>