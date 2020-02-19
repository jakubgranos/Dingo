<?php
/*
Template for banner container part
@package Dingo
 */
$bg_image = get_sub_field('background_image');
$overlay_image = get_sub_field('backgorund_overlay_image');?>
<style>
  .banner_part {
    background-image: url('<?php echo $bg_image; ?>');
  }

  @media (max-width: 991px) {
    .banner_part {
      height: 700px;
      background-image: none;
      background-color: #f0eed4;
    }
  }

  .banner_part:after {
    background-image: url('<?php echo $overlay_image; ?>');
  }
</style>
<section class="banner_part">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="banner_text">
          <div class="banner_text_iner">
            <?php require_once 'banner.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
