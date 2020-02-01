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

if (function_exists('register_sidebar')) {
    register_sidebars(array(
        'name' => __('Widget Area 1', 'jsweb'),
        'description' => __('', ''),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebars(array(
        'name' => __('Widget Area 2', 'jsweb'),
        'description' => __('', ''),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_filter('widget_text', 'do_shortcode');
add_filter('widget_text', 'shortcode_unautop');

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
		'header'  => __('Header Menu', ''),
		'mobile'   => __('Mobile Menu', ''),
		'footer'   => __('Footer Menu', ''), 
        'sidebar' => __('Sidebar Menu', ''),
	));
}
add_action('init', 'menus');

function nav_menu() {
	wp_nav_menu(
		array(
			'container'      => '',
			'theme_location' => 'header',
			'items_wrap'     => '<ul>%3$s</ul>',
		)
	);
}

function pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
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
