<?php
/**
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package taxPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'taxPro_container_type' );
?>

  

  <!-- Contact Section -->
  <?php get_template_part( 'parts/contact-section' ); ?>
					

<?php get_footer(); ?>
