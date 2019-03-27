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

          <div class="row">
            <div class="col-md">
              <div class="office text-center">
                <p class="font-weight-bold footer__text--heading">OFFICE</p>
                <a href="https://goo.gl/maps/NyifCtL1Kpo" target="_blank">
                  <p class="m-0 font-italic">4909 Alta Drive</p>
                  <p class="font-italic mb-2">Las Vegas, Nevada 89107</p>
                  <span><i class="fa fa-map"></i> Get Directions</span>
                </a>
              </div>
            </div>

            <div class="col-md">
              <div class="social-footer text-center mb-3">
                <p class="font-weight-bold footer__text--heading">CONNECT</p>
                <a href="<?php the_field("facebook_url") ?>" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="<?php the_field("instagram_url") ?>" target="_blank">
                  <i class="fa fa-instagram"></i>
                </a>
                <a href="<?php the_field("youtube_url") ?>" target="_blank">
                  <i class="fa fa-youtube"></i>
                </a>

              </div>
            </div>
            <div class="col-md">
              <div class="office text-center">
                <p class="font-weight-bold footer__text--heading">CONTACT</p>
                <p class="font-italic"><a href="tel:+702-822-6831"><i class="fa fa-phone"></i> (702)822-6831</a></p>
                <p class="font-italic"><a href="mailto:info@taxprolv.com"><i class="fa fa-envelope"></i>
                    info@taxprolv.com</a></p>
              </div>
            </div>

          </div> <!-- inside row -->

          <div class="site-info">
            <div class="text-center">
              <span>&copy; TAXPRO 2019 All Rights Reserved. </span>
              <!-- <?php taxPro_site_info(); ?> -->
            </div>

          </div><!-- .site-info -->

        </footer><!-- #colophon -->

      </div>
      <!--col end -->

    </div><!-- row end -->

  </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>