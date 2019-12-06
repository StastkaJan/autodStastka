<?php get_header(); ?>

	<main>
		<section>
			<div>
				<h1><?php the_title(); ?></h1>
			</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article>
				<?php the_content(); ?>
			</article>
		<?php endwhile; endif; ?>

		</section>
	</main>

<?php get_footer(); ?>
