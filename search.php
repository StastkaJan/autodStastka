<?php get_header(); ?>

	<main role="main">
		<section>

			<h1><?php echo sprintf(__('%s Search Results for ', 'jsweb'), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); ?>
						</a>
					<?php endif; ?>

					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>

					<span><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span><?php _e('Published by', 'jsweb'); ?> <?php the_author_posts_link(); ?></span>
					<span><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'jsweb'), __('1 Comment', 'jsweb'), __('% Comments', 'jsweb')); ?></span>

					<?php edit_post_link(); ?>
				</article>
			<?php endwhile; ?>

			<?php else: ?>
				<article>
					<h2><?php _e('Sorry, nothing to display.', 'jsweb'); ?></h2>
				</article>
			<?php endif; ?>

			<?php pagination(); ?>

		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
