<?php 
	/*
		Template name: Custom cart
	*/
get_header(); 
	if(have_posts()):
		the_post(); ?>
		<main id="cart_page" class="main_wrapper">
			<?php  the_content(); ?>
		</main>
		<?php 
	endif;
get_footer(); ?>