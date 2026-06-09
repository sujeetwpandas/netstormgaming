             <?php get_header();
/*Template Name: Contact Us */
   ?>
   <style type="text/css">
    /*
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
textarea[name="your-textarea"] {
    height: auto;
    min-height: 5em;
}
*/

input.wpcf7-form-control.wpcf7-tel.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-tel.form-control {
    padding: 15px;
}
input.wpcf7-form-control.wpcf7-submit.has-spinner.btn.circle.btn-light.mt-30.mt-md-15.mt-xs-10.btn-md.radius.animation {
  margin-top: 0;
  width: 100%;
}
/*15-05-26*/
/* Radio & Checkbox inline fix */

.wpcf7-radio .wpcf7-list-item,
.wpcf7-checkbox .wpcf7-list-item{
    display:inline-flex !important;
    align-items:center  !important;
}

/* label text alignment */
.wpcf7-radio .wpcf7-list-item label,
.wpcf7-checkbox .wpcf7-list-item label{
    display:flex !important;
    align-items:center !important;
    gap:8px !important;
    margin:0 !important;
    cursor:pointer !important;
}

/* input spacing */
.wpcf7-radio input[type="radio"],
.wpcf7-checkbox input[type="checkbox"]{
    margin:0 !important;
    position:relative !important;
    top:0 !important;
}

.wpcf7-list-item{
    margin: -10px 5px 0 0px !important;
}
/* remove unwanted line break spacing */
.ctr p{
    margin-bottom:5px !important;
}

div#wpcf7-f3423-o1 input {
line-height: 0 !important;
min-height: 30px !important;
}
.form-group.custom-select p {
display: inline;
}


/*21-05-2026*/
.form-group.custom-space-name input {
    padding: 0;
}
.form-group.custom-space-email input {
    padding: 0;
}
.form-group.custom-space-phone input {
    padding: 0 !important;
}

.nice-select.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required.form-control {
height: 38px !important;
padding: 0 !important;
}

.form-group.custom-space-country-code p {
    margin: 0;
}
.custom-space-radio-three p {
    margin-bottom: 0;
}
.form-group.custom-select.custom-space-market input {
    padding: 0;
}
h2.heading {
  margin-bottom: 0 !important;
}

.ctr.custom-space-url input {
margin: 0;
}

/*29-05-26*/
.custom-space-url input::-webkit-input-placeholder {
    font-size: 16px;
}

.custom-space-url input::-moz-placeholder {
    font-size: 16px;
}

.custom-space-url input:-ms-input-placeholder {
    font-size: 16px;
}

input[name="gaming-site-url"],
.custom-space-url input::placeholder {
    font-size: 16px;
}

.nice-select .list .option:first-child {
    display: none !important;
}

input.wpcf7-form-control.wpcf7-url.wpcf7-text.wpcf7-validates-as-url {
    width: 100% !important;
    padding-top: 0px !important;
    padding-bottom: 8px !important;
}

.blank-input .form-control {
    margin-top: -10px !important;
}

input {
    color: #666666 !important;
}

@media(min-width: 1400px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: 1340px;
    }
}

.form-group.comments textarea, .textarea {
    border: 2px solid #e8e8e8 !important;
    padding-left: 10px !important;
}

.custom-space-country-code .nice-select.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required.form-control {
margin-top: 12px !important;
}

.custom-space-checkbox-one>p>label{
    margin-bottom: 25px;
}
.custom-space-checkbox-one .wpcf7-list-item label{
    height: 25px !important;
}
   </style>
        <!-- Start Breadcrumb 
    ============================================= -->
    <?php if ( have_rows( 'banner_section' ) ) : ?>
    <?php while ( have_rows( 'banner_section' ) ) : the_row(); ?>
        <?php $background_image = get_sub_field( 'background_image' ); ?>
        <?php if ( $background_image ) : ?>
 <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(<?php echo esc_url( $background_image['url'] ); ?>);">
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
    <!-- Start Contact Us 
    ============================================= -->
    <?php if ( have_rows( 'body_section' ) ) : ?>
    <?php while ( have_rows( 'body_section' ) ) : the_row(); ?>
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="assets/img/shape/37.png" alt="Image Not Found">
        </div>
       
        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2><?php the_sub_field( 'title' ); ?></h2>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Phone</h5>
                                    <a href="">+ <?php echo get_option('phone'); ?></a>
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
                            <!-- <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto: <?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title"><?php the_sub_field( 'form_sub-title' ); ?></h5>
                        <h2 class="heading"><?php the_sub_field( 'form_title' ); ?></h2>
                        <?php //echo do_shortcode('[contact-form-7 id="2d49c70" title="Contact Us Form"]'); 
                                echo do_shortcode('[contact-form-7 id="e765ad9" title="New Enquiry form"]'); ?>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Contact -->
    <?php get_footer(); ?>