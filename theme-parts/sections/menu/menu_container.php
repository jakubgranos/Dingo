<?php
/*
  Template for menu container 
  @package Dingo
*/
  $title = get_sub_field('menu_title');
  $overlay = get_sub_field('menu_overlay');
?>
<style>
  <?php if(!empty($overlay)):?>
    .exclusive_item_part:after {
      background: url('<?php echo $overlay;?>')bottom right no-repeat;
      background-size: 15% 65%;
    }
  <?php endif;?>
</style>
<section class="exclusive_item_part blog_item_section">
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <?php if(!empty($title)):?>
          <div class="section_tittle">
            <?php echo $title; ?>
          </div>
        <?php endif;?>
      </div>
    </div>
    <div class="row">
      <?php require_once 'menu.php';?>
    </div>
  </div>
</section>
