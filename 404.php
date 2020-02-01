<?php get_header(); ?>

<main class="error" role="main">

	<div>

		<h1><?php _e('Page not found', 'jsweb'); ?></h1>

		<div>
			<p><?php _e('It might have been removed, renamed, or did not exist in the first place.', 'jsweb'); ?></p>
		</div>

		<a href="<?php echo home_url(); ?>"><?php _e('Home page', 'jsweb'); ?></a>

	</div>

</main>

<?php get_footer(); ?>