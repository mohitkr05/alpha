<?php
/**
 * Alpha functions and definitions
 * Keep it super simple - Just call other functions Inspired from Roots theme
 * @package Alpha
 * @since 0.1
 * 
 */

require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/scripts.php'); 		 // Scripts and stylesheets	
require_once locate_template('/lib/widgets.php'); 		 // Load the Widgets


//Extra features from _s
require_once locate_template('/lib/template-tags.php'); 	// Custom template tags for this theme.
require_once locate_template('/lib/extras.php'); 			 // Custom functions that act independently of the theme templates.
require_once locate_template('/lib/custom-header.php'); 	// Implement the Custom Header feature.
require_once locate_template('/lib/customizer.php'); 		 	// Customizer additions.
require_once locate_template('/lib/jetpack.php'); 		 	// Load Jetpack compatibility file.


/** to do  **/
//require_once locate_template('/lib/utils.php');           // Utility functions
//require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
//require_once locate_template('/lib/sidebar.php');         // Sidebar class
//require_once locate_template('/lib/config.php');          // Configuration
//require_once locate_template('/lib/activation.php');      // Theme activation
//require_once locate_template('/lib/titles.php');          // Page titles
//require_once locate_template('/lib/nav.php');             // Custom nav modifications
//require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
//require_once locate_template('/lib/comments.php');        // Custom comments modifications
//require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
//require_once locate_template('/lib/widgets.php');         // Sidebars and widgets        
//require_once locate_template('/lib/custom.php');          // Custom functions
