<?php

/**
 * Team Section.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- about-section -->

<section id="team-section" class="py-5 text-light">
  <div class="container h-100">
    <h3 class="text-center mb-5 display-4">TEAM</h3>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="<?php the_field("team_member_1_image") ?>" alt="Card image cap">
          <div class="card-body text-center">
            <p class="team__member--name">Juan Lopez</p>
            <p class="team__member--title font-italic">CEO & Founder</p>
            <div class="social-team text-center">

              <a href="#" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>


            </div>
          </div>

        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="<?php the_field("team_member_2_image") ?>" alt="Card image cap">
          <div class="card-body text-center">
            <p class="team__member--name">Julieta Azul</p>
            <p class="team__member--title font-italic">Freelance Expert</p>
            <div class="social-team text-center">

              <a href="#" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>


            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="<?php the_field("team_member_3_image") ?>" alt="Card image cap">
          <div class="card-body text-center">
            <p class="team__member--name">Rene Jesus</p>
            <p class="team__member--title font-italic">Business Expert</p>
            <div class="social-team text-center">

              <a href="#" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>


            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm text-center mt-5">
        <a href="#contact-section" class="btn btn-secondary mb-3">
          <i class="fa fa-phone" aria-hidden="true"></i> GIVE US A CALL
        </a>
      </div>
    </div>

  </div>


</section>