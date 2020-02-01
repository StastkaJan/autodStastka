<!doctype html>

<html <?php language_attributes(); ?>>

	<head>
	
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<header role="banner">
			<!-- logo and name -->
			<div class="logo">
				<?php if (function_exists('the_custom_logo')) {
					 the_custom_logo();
				}; ?>
				<a href="<?php echo home_url(); ?>">
					<p><?php bloginfo('name'); ?></p>
				</a>
			</div>

			<!-- Mobile menu -->
			<!-- Open button -->
			<button id="mobileMenuOpen" class="mobile">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
					<path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z" />
				</svg>
			</button>
			<!-- Mobile menu wrapper structure -->
			<div class="mobile">
				<!-- Close button -->
				<button>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
						<polygon fill="#1A1A1B" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"/>
					</svg>
				</button>
				<!-- The real mobile menu -->
				<nav role="navigation">
					<?php nav_menu(); ?>
				</nav>
			</div>

			<!-- Desktop menu -->
			<nav role="navigation">
				<?php nav_menu(); ?>
			</nav>
		</header>