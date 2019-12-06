<?php

// Menu Support
add_theme_support('menus');

// Thumbnail Support
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large
add_image_size('medium', 250, '', true); // Medium
add_image_size('small', 120, '', true); // Small

function nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
        'container'       => 'nav',
		)
	);
}

function load_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts()
{
    wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), '');
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', '')
    ));
}
add_action('wp_enqueue_scripts', 'menu');


?>