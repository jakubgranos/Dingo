<?php
/*
  Template for menu list
  @package Dingo
*/
$divisions_list_args = array(
  'order' => 'DESC',
  'taxonomy' => 'divisions_list'
);
$divisions_list = get_terms( $divisions_list_args );?>

<div class="col-lg-12">
  <div class="tab-content" id="myTabContent"><?php
    if( !empty( $divisions_list ) ):
      foreach( $divisions_list as $division_list ):
        $division_list_slug = $division_list->slug;
        $query = new WP_Query(array(
          'post_type' => 'menu_item',
          'tax_query' => array(
            array(
              'taxonomy' => 'divisions_list',
              'field'    => 'slug',
              'terms'    => $division_list_slug,
            ),
          ),
        )); 
        require 'menu-list-content.php';
        wp_reset_postdata();
      endforeach;
    endif;?>
  </div>
</div>
