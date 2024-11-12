<?php
// remove_action( 'wp_head', 'wp_generator' );

add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

add_theme_support( 'woocommerce' );

register_nav_menus(
    array(
				'primary' => 'Primary',
				'footer' => 'Footer',
				'language' => 'Language',
    )
);


function sidebar_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar' ),
			'id'            => 'sidebar-1',
			'description'   => 'Add widgets here to appear in your sidebar.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sidebar_widgets_init' );


/* Scripts and styles */
add_action('wp_enqueue_scripts', 'require_scripts');
function require_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1', 'in_footer');
	wp_enqueue_script('customm-script', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1', 'in_footer');

	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

function add_file_types_to_uploads($mimes){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

add_action( 'after_setup_theme', 'load_theme' );

function load_theme(){
	load_theme_textdomain( 'theimpactforce', get_template_directory() . '/languages' );
}