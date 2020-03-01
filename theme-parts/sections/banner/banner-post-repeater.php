<?php 
/*
  Theme banner post repeater
  @package Dingo
*/

if (have_rows('button_repeater')):
  while (have_rows('button_repeater')): the_row();
    $type = get_sub_field_object('type')['value'];
  
    $link = get_sub_field_object('link')['value'];
    $link_text = $link['title'];

    $icon = get_sub_field('icon');
    $icon_url = $icon['url'];
    $icon_alt = $icon['alt'];
    // use reservation class for animated border
    if($type === 'Animated border'):
      $link_args = [
        'class' => 'btn_2',
        'content' => "$link_text<img src='$icon_url' alt='$icon_alt'/>",
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
        'content' => "<span><img src='$icon_url' alt='$icon_alt'></span>$link_text",
      ];?>
        <?php echo wpc_get_link($link, $ink_args); ?>
    <?php
    endif;
  endwhile;
endif;
