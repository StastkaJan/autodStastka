<?php

/*------------------------------------*\
				Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    add_theme_support('menus');

    add_theme_support('custom-logo', 
        array(
            'height'      => 50,
            'width'       => 75,
        )
    );

    add_theme_support('custom-background', array(
        'default-color' => 'FFF',
    ));

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
    
    add_theme_support('title-tag');

    add_theme_support('align-wide');

    add_theme_support('customize-selective-refresh-widgets');
    
    add_theme_support('automatic-feed-links');
    
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => _x('Small', 'Name of the small font size in the block editor', 'jsweb'),
                'shortName' => _x('S', 'Short name of the small font size in the block editor.', 'jsweb'),
                'size'      => 18,
                'slug'      => 'small',
            ),
            array(
                'name'      => _x('Regular', 'Name of the regular font size in the block editor', 'jsweb'),
                'shortName' => _x('M', 'Short name of the regular font size in the block editor.', 'jsweb'),
                'size'      => 21,
                'slug'      => 'normal',
            ),
            array(
                'name'      => _x('Large', 'Name of the large font size in the block editor', 'jsweb'),
                'shortName' => _x('L', 'Short name of the large font size in the block editor.', 'jsweb'),
                'size'      => 26.25,
                'slug'      => 'large',
            ),
            array(
                'name'      => _x('Larger', 'Name of the larger font size in the block editor', 'jsweb'),
                'shortName' => _x('XL', 'Short name of the larger font size in the block editor.', 'jsweb'),
                'size'      => 32,
                'slug'      => 'larger',
            ),
        )
    );         

    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true);
    add_image_size('medium', 250, '', true);
    add_image_size('small', 120, '', true);
    add_image_size('custom-size', 700, 200, true);

    load_theme_textdomain('jsweb', get_template_directory() . '/languages');
}

function jsweb_register_sidebars() {
    register_sidebar(array(
        'name' => __('Primary sidebar', 'jsweb'),
        'id' => 'primary',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'jsweb_register_sidebars');

/*------------------------------------*\
				Functions
\*------------------------------------*/

function enqueue_scripts(){
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '');
}
add_action('wp_print_scripts', 'enqueue_scripts');

function enqueue_styles(){
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
    wp_enqueue_style('print-style', get_stylesheet_directory_uri() . '/print.css', array(), '', 'print');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function menus() {
	register_nav_menus( array(
		'header-menu'  => __('Header Menu', 'jsweb'),
		'extra-menu'   => __('Extra Menu', 'jsweb'),
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

function pagination(){
    global $wp_query; 
    echo paginate_links();
}

function index($length)  {
    return 20;
}

function excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}
