             <?php get_header();
/*Template Name: Terms Conditions */
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
 <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sbnr2.jpg);">
        <div class="breadcrum-shape">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sbnr1.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url(); ?>"><i class="fas fa-home"></i> Home</a></li>
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