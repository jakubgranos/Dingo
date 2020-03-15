<?php
/*
  Template for video container
  @package Dingo
*/
$background_image = get_sub_field( 'background_image' );?>

<style> <?php 
  if( !empty( $background_image ) ): ?>
    .intro_video_bg {
      background-image: url( '<?php echo $background_image; ?>' );
    } <?php 
  endif; ?>
</style>

<section class="intro_video_bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php require 'video.php'?>
      </div>
    </div>
  </div>
</section>
