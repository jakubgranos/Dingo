<?php
/*
  Template for menu list navigation
  @package Dingo
*/
$cat_args = array(
  'orderby' => 'name',
);
$categories = get_categories( $cat_args );
$button = get_field('button', 'option');?>
<div class="col-lg-6">
  <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist"> <?php
    foreach( $categories as $category ):
      $cat_slug = $category->slug; 
      $cat_name = $category->name;
      if($cat_slug === 'uncategorized'):
        $cat_slug = '';
      endif;?>
      <a class="menu_list_nav" id="<?php echo $cat_slug?>-tab" data-toggle="tab" href="#<?php echo $cat_slug?>" role="tab" aria-controls="<?php echo $cat_slug?>" aria-selected="false"><?php echo $cat_slug?> <img src="<?php echo $button;?>" alt="play"></a> <?php
    endforeach;?>
  </div>
</div>


