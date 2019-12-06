<!doctype html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/img/scaniaLogo.png" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
	</head>
	<body>

		<header>

			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/scaniaLogo.png" alt="logo" />
				<p><?php bloginfo('name'); ?></p>
			</a>

			<div id="navMenu">
  				<div></div>
				<?php nav(); ?>
			</div>

		</header>