<?php
/*
  Template for menu list navigation
  @package Dingo
*/
$divisions_args = array(
  'order' => 'DESC',
  'taxonomy' => 'divisions_list'
);
$divisions = get_terms( $divisions_args );
$button = get_field( 'button', 'option' );?>

<div class="col-lg-6">
  <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist"> <?php
    if( !empty( $divisions ) ):
      foreach( $divisions as $key => $division ):
        $division_slug = $division->slug; 
        $division_name = $division->name;?>

        <a class="menu_list_nav <?php if ($key === array_key_first($divisions)) { echo "active"; } ?>" id="<?php echo $division_slug?>-tab"
        data-toggle="tab" href="#<?php echo $division_slug?>" role="tab" aria-controls="<?php echo $division_slug?>" aria-selected="false">
          <?php echo $division_name?>
          <img src="<?php echo $button;?>" alt="play" >
        </a> <?php
      endforeach; 
    endif;?>
  </div>
</div>
