       <?php get_header();
/*Template Name: Privacy Policy */
   ?>
   <style type="text/css">
       ul.wp-block-list li {
    list-style: disc;
}
h3{
    margin-top: 30px;
}
ul.wp-block-list {
    padding-left: 30px;
}
   </style>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sbnr2.jpg);">
        <div class="breadcrum-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sbnr1.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Star Project Details Area
    ============================================= -->
    <div class="project-details-area default-padding">
        <div class="container">
            <div class="project-details-items">

                <div class="main-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Details Area -->
    <?php get_footer(); ?>