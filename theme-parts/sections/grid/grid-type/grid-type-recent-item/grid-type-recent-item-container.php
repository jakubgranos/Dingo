<?php
/*
  Template for grid recent items container
  @package Dingo
*/
$heading =  get_sub_field('heading');
$subheading =  get_sub_field('subheading');?>
<section class="exclusive_item_part blog_item_section">
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <div class="section_tittle"> <?php
          if(!empty($heading)):?>
            <p><?php echo $heading;?></p> <?php
          endif;

          if(!empty($subheading)):?>
            <h2><?php echo $subheading;?></h2> <?php
          endif;?>
        </div>
      </div>
    </div>
    <div class="row"> <?php
      require 'grid-type-recent-item.php';?>
    </div>
  </div>
</section>
