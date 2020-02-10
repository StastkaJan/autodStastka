<?php get_header(); ?>

<main class="error" role="main">

	<section>

		<h1><?php _e('Page not found', 'jsweb'); ?></h1>
		<p><?php _e('It might have been removed, renamed, or did not exist in the first place.', 'jsweb'); ?></p>
		<a class="button white" href="<?php echo home_url(); ?>"><?php _e('Home page', 'jsweb'); ?></a>
	
	</section>

</main>

<?php get_footer(); ?>