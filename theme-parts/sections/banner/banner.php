<?php
/*
  Template for banner
  @package Dingo
*/
?>
<div class="banner_text">
  <div class="banner_text_iner">
    <?php
      $text = get_sub_field('banner_text');
      if (!empty($text)):
        echo $text;
      endif;
    ?>
    <div class="banner_btn">
      <?php echo banner_post_repeater();?>
    </div>
  </div>
</div>
