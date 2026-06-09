<?php
get_header();

if ( is_page('thank-you') ) {?>
<section class="thank-you-page">
		<div class="contaier">
			<div class="message_box">
   <?php echo '<div class="thank-you-message">';
    echo '<h2>🎉 Thank you for subscribing!</h2>';
    echo '<p>Check your inbox for a confirmation email.</p>';
    echo '</div>';

} else {?>
	</div>
		</div>
	</section>
	<section class="newsletter-page">
		<div class="contaier">
			<div class="message_box">
				<?php if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
}?>
			</div>
		</div>
	</section>
    <style type="text/css">
    	section.newsletter-page {
    padding: 100px 0;
}
    </style>
<?php
get_footer();
?>
