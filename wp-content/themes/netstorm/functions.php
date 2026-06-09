<?php

wp_enqueue_style('netstorm-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');

add_filter('style_loader_tag', 'netstorm_preload_main_css', 10, 2);

function netstorm_preload_main_css($html, $handle){

    if ($handle === 'netstorm-style') {

        $html = str_replace(
            "rel='stylesheet'",
            "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
            $html
        );

        $html .= '<noscript>'.$html.'</noscript>';
    }

    return $html;
}

function pietergoosen_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'pietergoosen_theme_setup' );
add_theme_support('woocommerce');
// Add WooCommerce support
function custom_theme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'custom_theme_add_woocommerce_support');
// add_filter( 'woocommerce_checkout_redirect_empty_cart', '__return_false' );
// add_filter( 'woocommerce_checkout_update_order_review_expired', '__return_false' );
add_action('admin_menu', 'wpdocs_register_my_custom_submenu_page');

function wpdocs_register_my_custom_submenu_page() {
    add_submenu_page(
        'themes.php',
        'My Custom Submenu Page',
        'My Custom Submenu Page',
        'manage_options',
        'my-custom-submenu-page',
        'wpdocs_my_custom_submenu_page_callback' );
}

function wpdocs_my_custom_submenu_page_callback() {
    echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
        echo '<h2>My Custom Submenu Page</h2>';
    echo '</div>';
}

//theme option in menu
function theme_settings_page(){
	    ?>
	    <style type="text/css">
	    	.chooser { position: absolute; z-index: 1; opacity: 0; cursor: pointer;}
	    	input, textarea{
	    		width: 50%;
	    	}
	    	input[type="submit"]{
	    		width: auto;
	    	}
	    </style>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php" enctype="multipart/form-data">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}
function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_linkedin_element()
{
    ?>
        <input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
    <?php
}

function display_youtube_element()
{
	?>
    	<input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
    <?php
}

function display_working_hours_element()
{
    ?>
        <textarea name="working_hours" id="working_hours"  rows="5"><?php echo get_option('working_hours'); ?></textarea>
    <?php
}
function display_pintrest_element()
{
    ?>
        <input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>" />
    <?php
}
function display_your_email()
{
	?>
    	<input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}
function display_phone_number()
{
    ?>
        <input type="text" name="phone" id="phone" value="<?php echo get_option('phone'); ?>" />
    <?php
}
function display_copyright_element()
{
	?>
    	<input type="text" name="copyright" id="copyright" value="<?php echo get_option('copyright'); ?>" />
    <?php
}

function display_layout_element()
{
	?>
		<input type="checkbox" name="theme_layout" value="1" <?php checked(1, get_option('theme_layout'), true); ?> /> 
	<?php
}
function logo_display()
{
    ?>
    <style type="text/css">
    	.chooser { position: absolute; z-index: 1; opacity: 0; cursor: pointer;}
    </style>
        <input type="hidden" name="ologo" value="<?php echo get_option('logo'); ?>" readonly />
        <img src="<?php echo get_option('logo'); ?>" id="output"><br>
        <label class="button button-primary">Upload Logo <input type="file" name="logo" id="imgupload" class="chooser" accept="image/*" onchange="loadFile(event)" style="display:none" /></label>
        <script>
		  var loadFile = function(event) {
		    var output = document.getElementById('output');
		    output.src = URL.createObjectURL(event.target.files[0]);
		    output.onload = function() {
		      URL.revokeObjectURL(output.src) // free memory
		    }
		  };
		</script> 
   <?php
}
function handle_logo_upload()
{
    if(isset($_FILES["logo"]) && !empty($_FILES['logo']['name']))
    {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
       return $temp;
    }
	 elseif(isset($_FILES["logo"]) && empty($_FILES['logo']['name'])){
	  $urls = $_POST["ologo"];
	  return $urls;
	 }
	   return $option;
}
function footer_logo_display()
{
    ?>

        <input type="hidden" name="footer_ologo" value="<?php echo get_option('footer_logo'); ?>" readonly />
        <img src="<?php echo get_option('footer_logo'); ?>" id="footer_output"><br>
        <label class="button button-primary">Upload Logo <input type="file" name="footer_logo" id="footer_imgupload" class="chooser" accept="image/*" onchange="footer_loadFile(event)" style="display:none" /></label>
        <script>
		  var footer_loadFile = function(event) {
		    var output = document.getElementById('footer_output');
		    output.src = URL.createObjectURL(event.target.files[0]);
		    output.onload = function() {
		      URL.revokeObjectURL(output.src) // free memory
		    }
		  };
		</script> 
   <?php
}
function footer_handle_logo_upload()
{
    if(isset($_FILES["footer_logo"]) && !empty($_FILES['footer_logo']['name']))
    {
        $urls = wp_handle_upload($_FILES["footer_logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
       return $temp;
    }
	 elseif(isset($_FILES["footer_logo"]) && empty($_FILES['footer_logo']['name'])){
	  $urls = $_POST["footer_ologo"];
	  return $urls;
	 }
	   return $option;
}
function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("linkedin_url", "Linkedin Profile Url", "display_linkedin_element", "theme-options", "section");
    add_settings_field("youtube_url", "Youtube Link", "display_youtube_element", "theme-options", "section");
    
    add_settings_field("youtube_url", "Youtube Profile Url", "display_youtube_element", "theme-options", "section");
    add_settings_field("working_hours", "Working Hours", "display_working_hours_element", "theme-options", "section");
    add_settings_field("address", "Address", "display_pintrest_element", "theme-options", "section");
    add_settings_field("email", "Your Email", "display_your_email", "theme-options", "section");
    add_settings_field("phone", "Phone Number", "display_phone_number", "theme-options", "section");
    add_settings_field("copyright", "Copyright Text", "display_copyright_element", "theme-options", "section");
    add_settings_field("theme_layout", "Do you want the layout to be responsive?", "display_layout_element", "theme-options", "section");
 	add_settings_field("logo", "Logo", "logo_display", "theme-options", "section"); 
 	add_settings_field("footer_logo", "Footer Logo", "footer_logo_display", "theme-options", "section"); 

    register_setting("section", "logo", "handle_logo_upload");
    register_setting("section", "footer_logo", "footer_handle_logo_upload");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "linkedin_url");
    register_setting("section", "youtube_url");
    
    register_setting("section", "youtube_url");
    register_setting("section", "working_hours");
    register_setting("section", "address");
    register_setting("section", "email");
    register_setting("section", "phone");
    register_setting("section", "copyright");
    register_setting("section", "theme_layout");
}

add_action("admin_init", "display_theme_panel_fields");

function add_theme_menu_item()
{
	add_menu_page('Theme Option', 'Theme Option', 'add_users', 'theme-options', 'theme_settings_page', null, 2); 
}

add_action("admin_menu", "add_theme_menu_item");

/*
 ==================
 Ajax Search
======================   
*/
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
jQuery('#keyword').on('keyup', function(){
    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery(this).val() },
        success: function(data) {

            jQuery('#datafetch').show();
            jQuery('#datafetch').html( data );
        }
    });
});
    

</script>

<?php
}


// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){
    $terms = get_terms( 'category', array(
    'name__like' => $_POST['keyword'],
    'hide_empty' => true // Optional 
) );
if ( count($terms) > 0 ){
    echo '<ul>';
    foreach ( $terms as $term ) {
        echo '<li data-id="'. esc_url( get_term_link( $term ) ) .'" class="open_popup">' . esc_html( $term->name ) . '</li>';
    }
    echo '</ul>';
}?>

        <script type="text/javascript">
            var cat_slug = '';
        jQuery(".open_popup").on('click', function(){
           var cat_data = jQuery(this).text();
           cat_slug = jQuery(this).attr('data-id');
            jQuery(".cat_name_apend").text(cat_data);
            jQuery("#open_div").show();
            // jQuery(".close-button").show();
        });
        jQuery(".close-button").on('click', function(){
            jQuery("#open_div").hide();
        });

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            jQuery("#open_div").show();
            setTimeout(function(){
                location = cat_slug;

            }, 5000)

        }, false );
        </script>
        
<?php }
add_action( 'wp_footer', 'ajax_fetch1' );
function ajax_fetch1() {
?>
<script type="text/javascript">
function fetch_search1(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch1', keyword: jQuery('#keyword1').val() },
        success: function(data) {
            jQuery('#datafetch1').html( data );
        }
    });

}
</script>

<?php
}


// the ajax function
add_action('wp_ajax_data_fetch1' , 'data_fetch1');
add_action('wp_ajax_nopriv_data_fetch1','data_fetch1');
function data_fetch1(){

    $terms = get_terms( 'category', array(
    'name__like' => $s,
    'hide_empty' => true // Optional 
) );
if ( count($terms) > 0 ){
    echo '<ul>';
    foreach ( $terms as $term ) {
        ?>
        <a href="<?php echo site_url(); ?>/signup/">
        <?php
        echo '<li data-id="'. esc_url( get_term_link( $term ) ) .'" class="open_popup1">' . esc_html( $term->name ) . '</li>';
    }?>
</a>
    <?php 
    echo '</ul>';
 } 
}wp_reset_postdata(); 

function customSetPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

function pietergoosen_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <p><?php _e( 'Pingback:', 'pietergoosen' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'pietergoosen' ), '<span class="edit-link">', '</span>' ); ?></p>
    <?php
            break;
        default :
        global $post;
    ?>
    <!-- Start Single Comment  -->
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <div class="comment-body">
            <div class="single-comment">
                <div class="comment-img">
                    <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
                </div>
                <div class="comment-inner">
                    <h6 class="commenter">
                        <a class="hover-flip-item-wrapper" href="javascript:void(0)">
                            <span class="hover-flip-item">
                                <span data-text="<?php printf( __( '%s says:' ), sprintf( '%s', get_comment_author_link() ) ); ?>"><?php printf( __( '%s says:' ), sprintf( '%s', get_comment_author_link() ) ); ?></span>
                            </span>
                        </a>
                    </h6>
                    <div class="comment-meta">
                        <div class="time-spent"><?php printf( _x( '%1$s at %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?></div>
                        <div class="reply-edit">
                            <div class="reply">
                                <?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="comment-text">
                        <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="b2"><?php _e( 'Your comment is awaiting moderation.', 'pietergoosen' ); ?></p>
                        <?php endif; ?>
                        <?php comment_text(); ?>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <?php
        break;
    endswitch; 
}

add_theme_support( 'title-tag' );
    
add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (current_user_can('service_provider')) {
  show_admin_bar(false);
}
}

function fb_disable_feed() {
    wp_die( __('No feed available, please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);




// Register Popular Posts Widget
function register_popular_posts_widget() {
    register_widget( 'Popular_Posts_Widget' );
}
add_action( 'widgets_init', 'register_popular_posts_widget' );

// Popular Posts Widget Class
class Popular_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'popular_posts_widget',
            'Popular Posts',
            array( 'description' => 'Display popular posts based on post views.' )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'Popular Posts';
        $number = ! empty( $instance['number'] ) ? $instance['number'] : 5;

        echo $args['before_title'] . $title . $args['after_title'];

        $popular_posts = new WP_Query( array(
            'posts_per_page' => $number,
            'orderby'        => 'meta_value_num',
            'meta_key'       => 'post_views_count',
            'order'          => 'DESC',
            'post_type'      => 'post',
            'post_status'    => 'publish'
        ) );

        if ( $popular_posts->have_posts() ) {
            echo '<ul>';
            while ( $popular_posts->have_posts() ) {
                $popular_posts->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
            wp_reset_postdata();
        }

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'Popular Posts';
        $number = ! empty( $instance['number'] ) ? $instance['number'] : 5;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>">Number of Posts:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" min="1" max="10" value="<?php echo esc_attr( $number ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? absint( $new_instance['number'] ) : 5;
        return $instance;
    }
}

// Display ACF field value with product title on single product page
add_action('woocommerce_single_product_summary', 'display_acf_field_with_product_title', 5);
function display_acf_field_with_product_title() {
    global $product;
    
    // Get ACF field value (replace 'your_acf_field_name' with your actual ACF field name)
    $acf_field_value = get_field('brand', $product->get_id());
    
    // Check if ACF field value is not empty
    if (!empty($acf_field_value)) {
        // Output the product title with ACF field value
        // echo '<h1 class="product_title entry-title">' . get_the_title() . '</h1>';
        echo '<div class="acf-field-value"> Brand Name: ' . esc_html($acf_field_value) . '</div>';
    }
}

/**
 * Here we are trying to add your custom data as Cart Line Item
 * SO that we can add this custom data on your cart, checkout, order and email later
 */
function save_custom_data( $cart_item_data, $product_id ) {
    $custom_data = get_post_meta( $product_id, 'brand', true );
    if( $custom_data != null && $custom_data != ""  ) {
        $cart_item_data["brand"] = $custom_data;
    }
    return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'save_custom_data', 10, 2 );

/**
 * Here we are trying to display that custom data on Cart Table & Checkout Order Review Table 
 */
function render_custom_data_on_cart_checkout( $cart_data, $cart_item = null ) {
    $custom_items = array();
    /* Woo 2.4.2 updates */
    if( !empty( $cart_data ) ) {
        $custom_items = $cart_data;
    }
    if( isset( $cart_item["brand"] ) ) {
        $custom_items[] = array( "name" => "Brand Name", "value" => $cart_item["brand"] );
    }
    return $custom_items;
}
add_filter( 'woocommerce_get_item_data', 'render_custom_data_on_cart_checkout', 10, 2 );

/**
 * We are adding that custom data ( gram ) as Order Item Meta, 
 * which will be carried over to EMail as well 
 */
function save_custom_order_meta( $item_id, $values, $cart_item_key ) {
    if( isset( $values["brand"] ) ) {
        wc_add_order_item_meta( $item_id, "Brand Name", $values["brand"] );
    }
}
add_action( 'woocommerce_add_order_item_meta', 'save_custom_order_meta', 10, 3 );

add_action('woocommerce_after_shop_loop_item', 'add_a_custom_button', 5 );
function add_a_custom_button() {
    global $product;

    // Not for variable and grouped products that doesn't have an "add to cart" button
    if( $product->is_type('variable') || $product->is_type('grouped') ) return;

    // Output the custom button linked to the product
    echo '<div style="margin-bottom:10px;">
        <a class="button custom-button detail" href="' . esc_attr( $product->get_permalink() ) . '">' . __('View Detail') . '</a>
    </div>';
}



function mytheme_footer_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer Widget Area 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer Widget Area 2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer Widget Area 3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => 'Footer Widget Area 4',
        'id'            => 'footer-4',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
     register_sidebar( array(
        'name'          => 'Footer Widget Area 5',
        'id'            => 'footer-5',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_footer_widgets_init' );
function custom_dashicons_fallback() {
    echo '<style>
        @font-face {
            font-family: "dashicons";
            src: url("' . includes_url('/wp-includes/fonts/dashicons.woff') . '") format("woff");
            font-display: swap;
        }
    </style>';
}
add_action( 'wp_head', 'custom_dashicons_fallback' );

function async_dashicons_frontend($tag, $handle) {
    if ($handle === 'dashicons') {        
        $tag = str_replace("media='all'", "media='print' onload=\"this.media='all'\"", $tag);
    }
    return $tag;
}
add_filter('style_loader_tag', 'async_dashicons_frontend', 10, 2);


function async_newsletter_css($tag, $handle) {

    if ($handle === 'newsletter') {

        $tag = str_replace(
            "media='all'",
            "media='print' onload=\"this.media='all'\"",
            $tag
        );

    }

    return $tag;
}
add_filter('style_loader_tag', 'async_newsletter_css', 10, 2);

function remove_fontawesome_everywhere() {
    wp_dequeue_style('font-awesome');
    wp_dequeue_style('fontawesome');
    wp_dequeue_style('font-awesome-5');
    wp_dequeue_style('font-awesome-6');
}
add_action('wp_enqueue_scripts', 'remove_fontawesome_everywhere', 100);

function async_fontawesome($tag, $handle) {
    if (strpos($tag, 'fontawesome') !== false) {
        $tag = str_replace(
            "rel='stylesheet'",
            "rel='stylesheet' media='print' onload=\"this.media='all'\"",
            $tag
        );
    }
    return $tag;
}
add_filter('style_loader_tag', 'async_fontawesome', 20, 2);

add_filter('wpcf7_load_css', '__return_false');

function netstorm_load_cf7_css() {

    if (
        is_page(array(
            'gaming-licences',
            'anjouan-gaming-licence',
            'curacao-gaming-licence',
            'contact-us'
        ))
    ) {
        wp_enqueue_style('contact-form-7');
    }

}

add_action('wp_enqueue_scripts', 'netstorm_load_cf7_css');

function netstorm_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}

add_action('wp_enqueue_scripts', 'netstorm_remove_wp_block_library_css', 100);


