<?php
/*
  Template for video
  @package Dingo
*/
$heading = get_sub_field( 'heading' );
$link = get_sub_field( 'link' );
$icon = get_sub_field( 'icon' );?>

<div class="intro_video_iner text-center"> <?php
  if( !empty( $heading ) ): ?>
    <h2><?php echo $heading; ?></h2> <?php
  endif;?>

  <div class="intro_video_icon"> <?php
    if( !empty( $link ) ): ?>
      <a id="play-video_1" class="video-play-button popup-youtube" href="<?php echo $link; ?>"> <?php
        if( !empty( $icon ) ):
          echo dingo_acf_render_image( $icon, 'video-play-button-icon' );
        endif; ?>
      </a> <?php
    endif;?>
  </div>
</div>
