<?php
/*
  Template for video
  @package Dingo
*/
$heading = get_sub_field( 'heading' );
$link = get_sub_field( 'link' );
$icon = get_sub_field( 'icon' );
$background_image = get_sub_field( 'background_image' );?>

<section class="intro_video_bg">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="intro_video_iner text-center">
            <h2><?php echo $heading; ?></h2>
            <div class="intro_video_icon">
              <a id="play-video_1" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
              <span class="ti-control-play"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
