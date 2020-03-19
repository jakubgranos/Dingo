<?php
/*
  Template for menu list navigation
  @package Dingo
*/

$button = get_field( 'button', 'option' );
$divisions_list_args = array(
  'order' => 'DESC',
  'taxonomy' => 'divisions_list'
);
$divisions_list = get_terms( $divisions_list_args );?>

<div class="col-lg-6">
  <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist"> <?php
    foreach( $divisions_list as $division_list ):
      $division_list_slug = $division_list->slug; 
      $division_list_name = $division_list->name;?>

      <a class="menu_list_nav" id="<?php echo $division_list_slug?>-tab" data-toggle="tab" href="#<?php echo $division_list_slug?>" role="tab" 
      aria-controls="<?php echo $division_list_slug?>" aria-selected="false">
        <?php echo $division_list_name?>
        <img src="<?php echo $button;?>" alt="play">
      </a> <?php
    endforeach;?>
  </div>
</div>
