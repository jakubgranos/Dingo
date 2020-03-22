<?php
/*
  Template for menu list
  @package Dingo
*/
$divisions_args = array(
  'order' => 'DESC',
  'taxonomy' => 'divisions_list'
);
$divisions = get_terms( $divisions_args );?>

<div class="col-lg-12">
  <div class="tab-content" id="myTabContent"><?php
    if( !empty( $divisions ) ):
      foreach( $divisions as $key => $division ):
        $division_slug = $division->slug;
        $query = new WP_Query(array(
          'post_type' => 'menu_item',
          'tax_query' => array(
            array(
              'taxonomy' => 'divisions_list',
              'field'    => 'slug',
              'terms'    => $division_slug,
            ),
          ),
        ));?>
        <div class="tab-pane fade single-member <?php if ($key === array_key_first($divisions)) { echo "active show"; } ?>" 
        id="<?php echo $division_slug;?>" role="tabpanel" aria-labelledby="<?php echo $division_slug;?>-tab">
          <?php require 'menu-list-content.php'; ?>
        </div> <?php
        wp_reset_postdata();
      endforeach;
    endif;?>
  </div>
</div>
