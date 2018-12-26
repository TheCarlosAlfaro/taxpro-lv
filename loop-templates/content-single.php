<?php
/**
 * Single post partial template.
 *
 * @package taxPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php taxPro_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'taxPro' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php taxPro_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
