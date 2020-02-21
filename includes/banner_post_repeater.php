<?php 
/*
  Banner post repeater
  @package Dingo
*/
function banner_post_repeater() {
  if (have_rows('button_action')):
    while (have_rows('button_action')): the_row();
      $button_title = get_sub_field_object('button_title')['value'];
    
      $button_link = get_sub_field_object('button_link')['value'];
      $button_link_title = $button_link['title'];

      $button_image = get_sub_field_object('button_image')['value'];
  
      // use reservation class button when is reservation
      if($button_title === 'Reservation'):
        $button_link_args = [
          'class' => 'btn_2',
          'content' => "$button_link_title<img src='$button_image' alt='flag icon'/>",
        ];?>
        <div class="banner_btn_iner">
          <?php echo wpc_get_link($button_link, $button_link_args); ?>
        </div>
      <?php
      endif;
  
      // use popup class buton when is Video
      if($button_title === 'Video'):
        $button_link_args = [
          'class' => 'popup-youtube video_popup',
          'content' => "<span><img src='$button_image' alt='icon play button'></span>$button_link_title",
        ];?>
          <?php echo wpc_get_link($button_link, $button_link_args); ?>
      <?php
      endif;

      // use defalut button when is not  reservation and video
      if($button_title !== 'Reservation' || $button_title !== 'Video'):
        $button_link_args = [
          'class' => 'btn default',
          'content' => "$button_link_title<img src='$button_image' alt='$button_link_title'/>",
        ];?>
          <?php echo wpc_get_link($button_link, $button_link_args); ?>
      <?php
      endif;
    endwhile;
  endif;
}
