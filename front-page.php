<?php get_header(); ?>

	<main>
		<section>
			<div>
				<h1>Autodoprava<br>a jeřáby Šťástka</h1>
			</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article>
				<?php the_content(); ?>
			</article>
		<?php endwhile; endif; ?>
		
		</section>
    </main>

<?php get_footer(); ?>