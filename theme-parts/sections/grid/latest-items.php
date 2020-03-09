<?php
/*
  Template latest items
  @package Dingo
*/

include_once( 'render-items.php' );

$select_post_Type = get_sub_field( 'post_type' );
$post_count = get_sub_field( 'post_count' );
$query = new WP_Query(array(
  'post_type' => $select_post_Type,
  'posts_per_page' => $post_count,
  'orderby' => 'post_date',
  'order' => 'DESC',
));

if( $query->have_posts() ):
  while( $query->have_posts() ): $query->the_post();
    render_items( $select_post_Type );
  endwhile;
endif;

wp_reset_postdata();
