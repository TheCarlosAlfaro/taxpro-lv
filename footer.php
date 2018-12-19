<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package taxPro
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('taxPro_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

				<div class="social-footer text-center mb-3">
					<p class="font-weight-bold">FOLLOW US</p>
            <a href="#" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fa fa-youtube"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
					<div class="site-info">
						<div class="text-center">
							<span>&copy; 2019 All Rights Reserved. TAXPRO LV | </span>
							<?php taxPro_site_info(); ?>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

