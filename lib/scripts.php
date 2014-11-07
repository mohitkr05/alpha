<?php
/**
 * ==========================================================================
 * @function  - alpha_scripts
 * @package alpha
 * @since 0.1
 * Better WordPress titles
 * Enqueue scripts and styles.
 * ===========================================================================
 */
function alpha_scripts() {
	//The main style sheet
	wp_enqueue_style('style_main', get_template_directory_uri() . '/assets/css/app.css', false, '64c2848549e90cef42796141ccce4c3e');
	wp_enqueue_style('genericons', get_template_directory_uri() . '/assets/font/genericons/genericons.css', false, '64c2848549e90cef42796141ccce4c3e');
		wp_enqueue_style('flexnav', get_template_directory_uri() . '/assets/css/flexnav.css', false, '64c2848549e90cef42796141ccce4c3e');
	wp_enqueue_script( 'alpha-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'alpha-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alpha_scripts' );

?>