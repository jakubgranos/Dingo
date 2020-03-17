<?php
/*
  Template for menu list container
  @package Dingo
*/
$heading = get_sub_field( 'heading' );
$subheading = get_sub_field( 'subheading' );?>

<section class="food_menu gray_bg">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="section_tittle"> <?php
          if( !empty( $heading ) ):?>
            <p><?php echo $heading;?></p> <?php
          endif;

          if( !empty( $subheading ) ):?>
            <h2><?php echo $subheading;?></h2> <?php
          endif;?>
        </div>
      </div>
      <?php 
        require 'menu-list-navigation.php';
        require 'menu-list.php';
      ?>
    </div>
  </div>
</section>
