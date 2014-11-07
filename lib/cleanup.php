<?php
/**
 * ==========================================================================
 * @function  - alpha_head_cleanup
 * @package alpha
 * @since 0.1
 * The clean up function to remove all the mess from WordPress head
 * ==========================================================================
 */ 
function alpha_head_cleanup() {
	// category feeds
	 remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	 remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	// remove WP version from css
	add_filter( 'style_loader_src', 'alpha_remove_wp_ver_css_js', 9999 );
	// remove Wp version from scripts
	add_filter( 'script_loader_src', 'alpha_remove_wp_ver_css_js', 9999 );

} // end alpha_head_cleanup

/**
 * ==========================================================================
 * @function  - alpha_rss_version
 * @package alpha
 * @since 0.1
 * Remove RSS version
 * ===========================================================================
 */ 


function alpha_rss_version() {
	return ''; 
	} // end remove rss version


/**
 * ==========================================================================
 * @function  - alpha_remove_wp_ver_css_js
 * @package alpha
 * @since 0.1
 * Remove WP version from scripts
 * ===========================================================================
 */ 

function alpha_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
} //end alpha_remove_wp_ver_css_js


/**
 * ==========================================================================
 * @function  - alpha_remove_wp_widget_recent_comments_style
 * @package alpha
 * @since 0.1
 * Remove injected CSS for recent comments widget
 * ===========================================================================
 */ 
function alpha_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
} //end alpha_remove_wp_widget_recent_comments_style


/**
 * ==========================================================================
 * @function  - alpha_remove_recent_comments_style
 * @package alpha
 * @since 0.1
 * Remove injected CSS from recent comments widget
 * ===========================================================================
 */ 
function alpha_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
} //end alpha_remove_recent_comments_style

/**
 * ==========================================================================
 * @function  - alpha_gallery_style
 * @package alpha
 * @since 0.1
 * Remove injected CSS from gallery
 * ===========================================================================
 */ 
function alpha_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
} //end alpha_gallery_style


/**
 * ==========================================================================
 * @function  - alpha_filter_ptags_on_images
 * @package alpha
 * @since 0.1
 * Remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
 * ===========================================================================
 */ 
function alpha_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
} //alpha_filter_ptags_on_images



/**
 * ==========================================================================
 * @function  - alpha_excerpt_more
 * @package alpha
 * @since 0.1
 * This removes the annoying […] to a Read More link
 * ===========================================================================
 */ 
function alpha_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __( 'Read ', 'alphatheme' ) . get_the_title($post->ID).'">'. __( 'Read more &raquo;', 'alphatheme' ) .'</a>';
} //end alpha_excerpt_more

?>