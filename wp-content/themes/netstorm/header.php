<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Netstorm Gaming - Consulting Business Template">
	<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}

  gtag('consent', 'default', {
    ad_storage: 'granted',
    ad_user_data: 'granted',
    ad_personalization: 'granted',
    analytics_storage: 'granted'
  });
</script>

<?php wp_head(); ?>
    <!-- ========== Page Title ========== -->
    <title>Netstorm Gaming</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" media="print" onload="this.media='all'"> 
    <link rel="preload" href="https://netstormgaming.com/wp-content/themes/netstorm/assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://netstormgaming.com/wp-content/themes/netstorm/assets/fonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://netstormgaming.com/wp-content/themes/netstorm/assets/fonts/fa-light-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css"></noscript>      
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css"></noscript>
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/dashicons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/dashicons.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/themify-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/themify-icons.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elegant-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elegant-icons.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/flaticon-set.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/flaticon-set.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/magnific-popup.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/magnific-popup.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/validnavs.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/validnavs.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/helper.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/helper.css"></noscript>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/unit-test.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/unit-test.css"></noscript>

  <!--  <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/dashicons.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/elegant-icons.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/flaticon-set.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/validnavs.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/helper.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/unit-test.css" rel="stylesheet">
    <link href="<?php // echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">-->
    <!-- ========== End Stylesheet ========== -->
<style type="text/css">
    .navbar .attr-right .attr-nav li.button a {
    padding: 13px 24px !important;
}
.info > ul li {
    list-style: disc;
}
.info > ul {
    margin-bottom: 25px;
    margin-top: 25px;
    list-style: disc;
    padding-left: 20px;
}
.container {
  width: 100%;
  padding-right: var(--bs-gutter-x,.75rem);
  padding-left: var(--bs-gutter-x,.75rem);
  margin-right: auto;
  margin-left: auto;
}
    
.row {
  --bs-gutter-x: 30px;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * .5);
  padding-left: calc(var(--bs-gutter-x) * .5);
  margin-top: var(--bs-gutter-y);
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-.5 * var(--bs-gutter-x));
  margin-left: calc(-.5 * var(--bs-gutter-x));
}
::after, ::before {
  box-sizing: border-box;
}
[type="button"]:not(:disabled), button:not(:disabled) {
  cursor: pointer;
}
button {
  text-transform: none;
  font-family: inherit;
  line-height: inherit;
  border-radius: 0;
}
.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}
.navbar-brand { 
  font-size: 1.25rem;
  text-decoration: none !important;
  white-space: nowrap;
}
.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb),var(--bs-text-opacity)) !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.bg-dark {
  --bs-bg-opacity: 1;
}
.item-flex li:first-child {
  margin: 0;
}
.item-flex{
   font-size: 16px;
  font-weight: 400;
  line-height: 28px; 
}
a{text-decoration: none;}
@media (min-width: 1200px) {
     .container {
    max-width: 1280px;
  }
   .offset-xl-3 {
    margin-left: 25%;
  } 
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
   .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
   .offset-xl-1 {
    margin-left: 8.33333333%;
  }
   .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
   .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
   .offset-xl-5 {
    margin-left: 41.66666667%;
  }
    .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
}
ul, li {
  margin: 0;
  padding: 0;
  list-style: none;
}
nav.navbar ul.nav>li>a {
        padding: 30px 15px;
        }
        .navbar .attr-right {
    float: right;
    margin-left: 0;
}

/* Style for parent menu item */
.menu-item {
    position: relative; /* Required for positioning the sub-menu */
}

/* Style for sub-menu */
.sub-menu {
    display: none; /* Hide the sub-menu by default */
    position: absolute; /* Position the sub-menu relative to the parent */
    top: 100%; /* Position the sub-menu below the parent */
    left: 0;
    margin: 0;
            background: var(--white) none repeat scroll 0 0;
        border: 1px solid transparent;
        border-radius: 2px;
        box-shadow: var(--box-shadow-extra);
        padding: 20px;
        width: 300px;
}

/* Sub-menu items */
.sub-menu li {
    /*padding: 10px;*/
    white-space: nowrap; /* Prevent text wrapping */
}

/* Sub-menu item links */
.sub-menu li a {
            color: var(--dark);
        display: block;
        font-size: 16px;
        margin-bottom: 0;
        padding: 7px 15px !important;
        text-align: left;
        text-transform: capitalize;
        width: 100%;
        font-weight: 500 !important;
}

/* Show sub-menu on hover */
.menu-item:hover > .sub-menu {
    display: block;
}

/* Optional: Add hover effect for sub-menu items */
.sub-menu li a:hover {
    background-color: #f0f0f0; /* Adjust hover color */
    color: #000; /* Adjust text color */
}
.menu-item-has-children > a::after {
    content: "";
    display: inline-block;
    margin-left: 7px;
    border: solid currentColor;
    border-width: 0 2px 2px 0;
    padding: 3px;
    transform: rotate(45deg);
    position: relative;
    top: -1px;
}
.icon_img span {
    font-size: 62px;
    width: 70px;
    height: 70px;
    color: #df0a0a;
    margin-bottom: 10px;
    font-weight: lighter;
    padding: 10px;
    text-align: center;
    align-content: center;
}
.request-call-back-area::after {
    background: unset !important;
}
.achivement-counter .icon.new-icon span {
    font-size: 62px;
}
.achivement-counter .icon.new-icon {
    padding: 0 4rem 0px 0px !important;
}
.achivement-counter li {
    align-items: unset;
}    
.top-bar-area .attr-nav li.button a {
    padding: 10px 40px !important;
    border-radius: 5px;
    font-size: 16px;
    color: var(--white);
    border: none;
    background: var(--color-primary) !important;
    position: relative;
    z-index: 1;
    overflow: hidden;
    top: 4px;
}
.top-bar-area .attr-nav li a {
    padding: 30px 0;
    display: block;
}
.top-bar-area .attr-nav li.button a:hover {
    color: var(--color-heading);
}

.top-bar-area .attr-nav li.button a:hover::after {
    -webkit-transform: translateY(-45%) skew(25deg) scale(1.2);
    transform: translateY(-45%) skew(25deg) scale(1.2);
}
.top-bar-area .attr-nav li.button a::after {
    background-color: var(--white);
}
.top-bar-area .attr-nav li.button a::after {
    position: absolute;
    top: inherit;
    right: inherit;
    bottom: inherit;
    left: -5%;
    content: "";
    height: 150px;
    width: 115%;
    z-index: -1;
    background-color: #fff;
    -webkit-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    -webkit-transform: translateY(-45%) skew(25deg) scale(0);
    transform: translateY(-45%) skew(25deg) scale(0);
}
.navbar-brand>img {
    max-height: fit-content;
    width: 70%;
}
footer .logo {
    max-height: min-content;
    width: 40%;
    height: auto;
}
.text-end {
    text-align: right !important;
}
.top-bar-area .attr-nav li {
    display: inline-block;
    }
.service-nav-info .dashicons {
    font-size: 35px;
    width: auto;
    height: auto;
}
.services-style-two .thumb .title h4 {
    padding: 10px 25px;
}
/*.services-style-two .thumb img {
    min-width: 389px;
    min-height: 291px;
}*/
.icon.new-icon .dashicons {
    font-size: 62px;
}
</style>
	
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KH8SVDS3');</script>
<!-- End Google Tag Manager -->	

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17069473353">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17069473353');
</script>	
</head>

<body <?php body_class(); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH8SVDS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-8 offset-xl-3 pl-30 pl-md-15 pl-xs-15">
                    <ul class="item-flex">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> <?php echo get_option('address'); ?>
                        </li>
                        <li>
                            <a href="tel: <?php echo get_option('phone'); ?>"><i class="fas fa-phone-alt"></i> + <?php echo get_option('phone'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-7 col-7 text-end">
                        <div class="attr-right">
                            <!-- Start Atribute Navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="button">
                                        <a href="/contact-us/">Get Consultation</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Atribute Navigation -->
        
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-style-one navbar-sticky navbar-default validnavs white navbar-fixed no-background">

            <div class="container">
                <div class="row align-center">

                    <!-- Start Header Navigation -->
                    <div class="col-xl-2 col-lg-3 col-md-2 col-sm-1 col-1">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_option('logo'); ?>" class="logo" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-xl-7 offset-xl-1 col-lg-7 col-md-4 col-sm-4 col-4">
                        <div class="collapse navbar-collapse" id="navbar-menu">

                            <img src="<?php echo get_option('logo'); ?>" alt="Logo">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-times"></i>
                            </button>
                             <?php wp_nav_menu( array(
                                'menu'            => 'main menu', 
                                'container'       => '', 
                                'container_class' => '', 
                                'container_id'    => '', 
                                'menu_class'      => 'nav navbar-nav navbar-center', 
                                'menu_id'         => 'menu-main-menu',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'theme_location'  => ''
                            ) ); ?>
                            <!-- <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gaming licenses</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="service-1.html">Anjouan</a></li>
                                        <li><a href="service-1.html">Curacao</a></li>
                                        <li><a href="service-1.html">Kahnawake</a></li>
                                        <li><a href="service-1.html">Malta</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Other services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Turnkey solution</a></li>
                                        <li><a href="#">Banking</a></li>
                                        <li><a href="#">Payment processing</a></li>
                                        <li><a href="#">Compliance</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">contact</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->

                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-7 col-7">
                        
                    </div>

                </div>         
                <!-- Main Nav -->

                <!-- Overlay screen for menu -->
                <div class="overlay-screen"></div>
                <!-- End Overlay screen for menu -->
            </div>   
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
