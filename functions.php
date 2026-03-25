<?php
/**
 * Webber Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Webber_Theme
 */

if ( ! function_exists( 'webber_theme_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function webber_theme_support() {
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'webber_theme_support' );

/**
 * Enqueue scripts and styles.
 */
function webber_theme_scripts() {
	wp_enqueue_style( 'webber-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'webber_theme_scripts' );
