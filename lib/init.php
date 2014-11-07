<?php 


/**
 * Set the content width
 */ 
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

if ( ! function_exists( 'alpha_setup' ) ) :
 
/**
 * ==========================================================================
 * @function  - alpha_setup
 * @package alpha
 * @since 0.1
 * Setup the theme
 * Sets up theme defaults and registers support for various WordPress features.
 * ===========================================================================
 */ 
function alpha_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Alpha, use a find and replace
	 * to change 'alpha' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'alpha', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

 
	// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		
		// Thumbnail sizes
		add_image_size( 'thumb-small', 160, 160, true );
		add_image_size( 'thumb-medium', 520, 245, true );
		add_image_size( 'thumb-large', 720, 340, true );

		// Custom menu areas
		register_nav_menus( array(
			'topbar' => 'Topbar',
			'header' => 'Header',
			'footer' => 'Footer',
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'alpha_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // alpha_setup
add_action( 'after_setup_theme', 'alpha_setup' );
