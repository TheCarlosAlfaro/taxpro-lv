<?php

/**
 * Jumbotron setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- Hero Section -->
<section id="hero-section">

  <div class="jumbotron jumbotron-fluid">

    <div class="hero-content">

      <div>
        <img src="<?php the_field("hero_logo"); ?>" alt="" class="heading-logo mb-5">
      </div>

      <!-- <h1 class="display-4">BUILD A HEALTHY CHURCH</h1>
      <p class="lead">“Spiritual health is the key to church growth, but healthy churches don’t happen by accident. They are nurtured over time by intentional and passionate pastors and leaders who practice Christian leadership, spiritual formation, and biblical decision making.”</p> -->

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-3 mr-2" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-play" aria-hidden="true"></i> WATCH OUR VIDEO
      </button>
      <a href="#contact-section" class="btn btn-secondary mb-3">
        <i class="fa fa-calendar" aria-hidden="true"></i> SET UP AN APPOINTMENT
      </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="iframe-container">
              <?php the_field("hero_video"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social">
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

</section>