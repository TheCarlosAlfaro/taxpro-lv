<?php
/**
 * Custom hooks.
 *
 * @package taxPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'taxPro_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function taxPro_site_info() {
    do_action( 'taxPro_site_info' );
  }
}

if ( ! function_exists( 'taxPro_add_site_info' ) ) {
  add_action( 'taxPro_site_info', 'taxPro_add_site_info' );

  /**
   * Add site info content.
   */
  function taxPro_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = sprintf(
      '<a href="%1$s">%2$s</a><span class="sep">',
      esc_url( __( 'https://carlosalfaro.me/', 'taxPro' ) ),
      sprintf(
        /* translators:*/
        esc_html__( 'Proudly Design & Developed by %s', 'taxPro' ), 'Carlos Alfaro'
      )
    );

    echo apply_filters( 'taxPro_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}
