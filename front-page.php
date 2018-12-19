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

  <!-- Hero Section/Jumbotron -->
  <?php get_template_part( 'global-templates/jumbotron' ); ?>

  <!-- About Section -->
  <?php get_template_part( 'parts/about-section' ); ?>

  <!-- Team Section -->
  <?php get_template_part( 'parts/team-section' ); ?>
					

<?php get_footer(); ?>
