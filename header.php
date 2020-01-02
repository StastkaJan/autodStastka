<!doctype html>
<html lang="cs">
	<head>
		<meta name="google-site-verification" content="uWtsUkZfQGphLsXQ9nPCalxKGjgk0ei5qH3J-Wezl2A" />
		<meta charset="utf-8">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body>

			<header id="clickAction" class="header clear" role="banner">

				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/scaniaLogo.png" alt="logo" />
						<p><?php bloginfo('name'); ?></p>
					</a>
				</div>

				<div id="navMenu" class="nav" role="navigation">
  					<div></div>
					<?php menu_nav(); ?>
				</div>

			</header>