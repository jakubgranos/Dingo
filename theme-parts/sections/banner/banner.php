<?php
/*
Template for banner
@package Dingo
 */

$banner_text_above = get_sub_field('banner_text_above');
$banner_text_heading = get_sub_field('banner_text_heading');
$banner_under_heading = get_sub_field('banner_under_heading');
$banner_reservation_button = get_sub_field('banner_reservation_button');
$banner_video_button = get_sub_field('banner_video_button');

// variables to grab icon path in buttons
$icon_reservation_button = get_template_directory_uri() . '/images/icons/left_1.svg';
$icon_play_button = get_template_directory_uri() . '/images/icons/play.svg';?>

<?php if (!empty($banner_text_above)): ?>
  <h5><?php echo $banner_text_above; ?></h5>
<?php endif;?>

<?php if (!empty($banner_text_heading)): ?>
  <h1><?php echo $banner_text_heading; ?></h1>
<?php endif;?>

<?php if (!empty($banner_under_heading)): ?>
  <p><?php echo $banner_under_heading; ?></p>
<?php endif;?>

<div class="banner_btn">
  <?php if (!empty($banner_reservation_button)): ?>
    <div class="banner_btn_iner">
      <a href="<?php echo $banner_reservation_button['url']; ?>" target="<?php echo $banner_reservation_button['target']; ?>" class="btn_2"><?php echo $banner_reservation_button['title']; ?>
        <img src="<?php echo $icon_reservation_button; ?>">
      </a>
    </div>
  <?php endif;?>

  <?php if (!empty($banner_reservation_button)): ?>
    <a href="<?php echo $banner_video_button['url']; ?>" class="popup-youtube video_popup">
    <span><img src="<?php echo $icon_play_button; ?>" alt="icon play button"></span><?php echo $banner_video_button['title']; ?></a>
  <?php endif;?>
</div>
