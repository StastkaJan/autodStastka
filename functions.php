<?php

/*------------------------------------*\
				Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    add_theme_support('menus');

    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail

}

/*------------------------------------*\
				Functions
\*------------------------------------*/

function menu_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function enqueue_scripts()
{
    wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), '');
    wp_enqueue_script('script');
}

function enqueue_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
    wp_enqueue_style('style');
}

function nav_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', ''),
        'sidebar-menu' => __('Sidebar Menu', ''),
        'extra-menu' => __('Extra Menu', '')
    ));
}

/*------------------------------------*\
	            Actions
\*------------------------------------*/

add_action('wp_print_scripts', 'enqueue_scripts'); // Add Scripts
add_action('wp_enqueue_scripts', 'enqueue_styles'); // Add Stylesheet
add_action('init', 'nav_menu'); // Add Menu
