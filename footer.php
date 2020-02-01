		<footer role="contentinfo">
			<p>
				&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				<?php _e(' | Theme by', 'jsweb'); ?>
				<a href="<?php echo esc_url(__('https://jsweb.pslib.cloud','jsweb') ); ?>"><?php _e('Jan Šťástka', 'jsweb'); ?></a>
			</p>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>