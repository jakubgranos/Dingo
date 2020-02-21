<?php
/*
Template for banner
@package Dingo
 */
$text = get_sub_field('banner_text');

$icon_reservation_button = get_template_directory_uri() . '/images/icons/left_1.svg';
$icon_play_button = get_template_directory_uri() . '/images/icons/play.svg';

$reservation_button = get_sub_field('banner_reservation_button');
$reservation_button_title = $reservation_button['title'];
$reservation_button_args = [
  'class' => 'btn_2',
  'content' => "$reservation_button_title<img src='$icon_reservation_button' alt='flag icon'/>",
];

$video_button = get_sub_field('banner_video_button');
$video_button_title = $video_button['title'];
$video_button_args = [
  'class' => 'popup-youtube video_popup',
  'content' => "<span><img src='$icon_play_button' alt='icon play button'></span>$video_button_title",
];

if (!empty($text)):
  echo $text;
endif;
?>

<div class="banner_btn">
  <?php if (!empty($reservation_button)): ?>
    <div class="banner_btn_iner">
      <?php echo wpc_get_link($reservation_button, $reservation_button_args); ?>
    </div>
  <?php endif;?>

  <?php if (!empty($video_button)): ?>
    <?php echo wpc_get_link($video_button, $video_button_args); ?>
  <?php endif;?>
</div>
