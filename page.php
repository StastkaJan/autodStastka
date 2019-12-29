<?php get_header(); ?>

	<main role="main">
		<section class="firstPage">
			
			<div>

				<h1><?php the_title(); ?></h1>

			</div>

		</section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article>

				<?php the_content(); ?>

			</article>

		<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>