		<footer role="contentinfo">
			<p>
				<span>&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></span>
				<span><?php _e(' | By', 'jsweb'); ?>
				<a href="<?php echo esc_url(__('https://jsweb.pslib.cloud','jsweb') ); ?>"><?php _e('Jan Šťástka', 'jsweb'); ?></a></span>
			</p>
		</footer>

		<script>
			document.addEventListener('DOMContentLoaded', (event) => {
   				window.onscroll = headerChange;
				headerChange();
			});
			function openMobileMenu() {
    			document.querySelectorAll(".mobile")[1].classList.add("clicked");
			}
			function closeMobileMenu() {
    			document.querySelectorAll(".mobile")[1].classList.remove("clicked");
			}
			function headerChange() {
			    let header = document.querySelectorAll("body > header")[0];
			    if (window.pageYOffset>0) {
			        header.classList.add("nonTop");
			    } else {
			        header.classList.remove("nonTop");
			    }
			}
		</script>

		<?php wp_footer(); ?>
	</body>
</html>