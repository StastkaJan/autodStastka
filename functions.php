<?php

/*------------------------------------*\
				Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support')) {
    add_theme_support('menus');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
    load_theme_textdomain('jsweb', get_template_directory() . '/languages');
}

/*------------------------------------*\
				Functions
\*------------------------------------*/

function enqueue_styles() {
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function menus() {
	register_nav_menus( array(
		'header-menu'  => __('Header Menu', 'jsweb'),
	));
}
add_action('init', 'menus');

function header_menu() {
	wp_nav_menu(
		array(
			'container'      => '',
			'theme_location' => 'header-menu',
			'items_wrap'     => '<ul>%3$s</ul>',
		)
	);
}

function add_file_types_to_uploads ($file_types) {
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');