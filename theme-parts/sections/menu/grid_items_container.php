<?php
/*
  Template for menu container 
  @package Dingo
*/
$menu = get_sub_field('menu');
$heading = get_sub_field('menu_heading');
$subheading = get_sub_field('menu_subheading');
$overlay = get_sub_field('menu_overlay');
?>
<?php if(!empty($menu)):?>
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
          <div class="section_tittle">
            <?php if(!empty($heading)):?>
              <p><?php echo $heading; ?></p>
            <?php endif;?>

            <?php if(!empty($subheading)):?>
              <h2><?php echo $subheading;?></h2>
            <?php endif;?>
          </div>
        </div>
      </div>
      <div class="row">
        <?php require_once 'grid_items.php';?>
      </div>
    </div>
  </section>
<?php endif;?>
