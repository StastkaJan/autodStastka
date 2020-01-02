<?php get_header(); ?>

	<main role="main">
		<section class="firstPage frontPage">

			<div>

				<h1>Auta s rukou a jeřáby Šťástka</h1>

			</div>

		</section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<article>
				
				<?php the_content(); ?>
			
			</article>
		
		<?php endwhile; endif; ?>
		
    </main>

<?php get_footer(); ?>