       <?php get_header();
/*Template Name: Frequently Asked Question */
   ?>
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
                        <li><a href="<?php echo site_url(); ?>"><i class="fas fa-home"></i> Home</a></li>
                        <li><?php the_sub_field( 'title' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Breadcrumb -->
        <!-- Start Faq Area 
    ============================================= -->
    <?php if ( have_rows( 'body_section' ) ) : ?>
    <?php while ( have_rows( 'body_section' ) ) : the_row(); ?>
    <div class="faq-area default-padding bg-gray">
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-md-30 mb-xs-30">
                    <div class="faq-sidebar">
                        <div class="faq-sidebar-item bg-theme1 text-light1" style="background-image: url(assets/img/shape/map-light.png);">
                            <div class="site-heading text-center">
                        <!-- <h4 class="sub-heading">Our Process</h4> -->
                        <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                        <div class="devider"></div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 faq-style-one dark pl-50 pl-md-15 pl-xs-15">

                    <h2 class="title mb-40"><?php the_sub_field( 'sub-title' ); ?></h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <?php
// Define the custom post type
$custom_post_type = 'faq'; // Replace with your custom post type slug

// Create WP_Query arguments
$args = array(
    'post_type'      => $custom_post_type,
    'posts_per_page' => -1, // Retrieve all FAQ posts
);

// Execute the query
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
    <?php get_footer(); ?>