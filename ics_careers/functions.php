<?php
///////////////////////////////////////////
//--------- OT THEME OPTIONS ---------------//
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

// ICS Theme Options
load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
// ICS Meta Boxes
load_template( trailingslashit( get_template_directory() ) . 'inc/meta-boxes.php' );
//--------- OT THEME OPTIONS :: END --------//
///////////////////////////////////////////

if ( ! function_exists( 'ics_setup' ) ) :
	function ics_setup() {
		load_theme_textdomain( 'icsth', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

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

		// Add sidebars
		register_sidebar( array(
			'name' => __( 'Primary Widget Area', 'icsth' ),
			'id' => 'primary-widget-area',
			'description' => __( 'Primary widget area', 'icsth' ),
			'before_widget' => '<div id="%1$s" class="widget sidebar_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar_title">',
			'after_title'   => '</h3>',
		) );
		// End sidebars

		// Custom images
		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support( 'post-thumbnails' );
		}
	}
endif;
add_action( 'after_setup_theme', 'ics_setup' );

// Register Navigation Menus
function ics_navigation_menus() {
	$locations = array(
		'primary' 	=> __( 'Primary Navigation' ),
		'footernav' => __( 'Footer Navigation'),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'ics_navigation_menus' );
// END Register Navigation Menus

/**
 * Enqueue scripts and styles.
 */
function ics_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', 'true' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/slick/slick.css');
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), '1.0.0', 'true' );

	//wp_enqueue_style( 'theme-root-css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_script('theme-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', 'true' );

// LivIconsEvo
	//wp_enqueue_style( 'theme-responsive-css', get_template_directory_uri() . '/assets/liviconsevo/css/LivIconsEvo.css');
	//wp_enqueue_script('liv-tools-js', get_template_directory_uri() . '/assets/liviconsevo/js/LivIconsEvo.tools.js', array('jquery'), '1.0.0', 'true' );
	//wp_enqueue_script('liv-defaults-js', get_template_directory_uri() . '/assets/liviconsevo/js/LivIconsEvo.defaults.js', array('jquery'), '1.0.0', 'true' );
	//wp_enqueue_script('liv-min-js', get_template_directory_uri() . '/assets/liviconsevo/js/LivIconsEvo.min.js', array('jquery'), '1.0.0', 'true' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ics_scripts' );

add_action( 'template_redirect', function() {
    if ( is_page( 2 ) ) {
        return;
    }
    wp_redirect( esc_url_raw( home_url( 'index.php?page_id=2' ) ), 301 );
    exit;
} );
