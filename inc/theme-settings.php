<?php
/**
 * Check and setup theme's default settings
 *
 * @package taxPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'taxPro_setup_theme_default_settings' ) ) {
	function taxPro_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$taxPro_posts_index_style = get_theme_mod( 'taxPro_posts_index_style' );
		if ( '' == $taxPro_posts_index_style ) {
			set_theme_mod( 'taxPro_posts_index_style', 'default' );
		}

		// Sidebar position.
		$taxPro_sidebar_position = get_theme_mod( 'taxPro_sidebar_position' );
		if ( '' == $taxPro_sidebar_position ) {
			set_theme_mod( 'taxPro_sidebar_position', 'right' );
		}

		// Container width.
		$taxPro_container_type = get_theme_mod( 'taxPro_container_type' );
		if ( '' == $taxPro_container_type ) {
			set_theme_mod( 'taxPro_container_type', 'container' );
		}
	}
}