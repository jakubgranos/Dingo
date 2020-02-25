<?php 
/*
  Theme banner post repeater
  @package Dingo
*/
function banner_post_repeater() {
  if (have_rows('button_repeater')):
    while (have_rows('button_repeater')): the_row();
      $type = get_sub_field_object('type')['value'];
    
      $link = get_sub_field_object('link')['value'];
      $link_text = $link['title'];

      $icon = get_sub_field('icon');
      //var_dump($icon);
      // use reservation class for animated border
      if($type === 'Animated border'):
        $link_args = [
          'class' => 'btn_2',
          'content' => ''.$link_text .''. get_images_attr($icon).'',
        ];?>
        <div class="banner_btn_iner">
          <?php echo wpc_get_link($link, $link_args); ?>
        </div>
      <?php
      endif;
  
      // use popup class for icon with label
      if($type === 'Icon with label'):
        $ink_args = [
          'class' => 'popup-youtube video_popup',
          'content' => '<span>'. get_images_attr($icon).'</span>'.$link_text.'',
        ];?>
          <?php echo wpc_get_link($link, $ink_args); ?>
      <?php
      endif;
    endwhile;
  endif;
}
