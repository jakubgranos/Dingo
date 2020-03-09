<?php
/*
  Template grid item type
  @package Dingo
*/
$button_text = get_field( 'text', 'option' );
$button_icon = get_field( 'icon', 'option' );
$description = get_field( 'description' );?>

<div class="col-sm-6 col-lg-4">
  <div class="single_blog_item"> <?php
    if( has_post_thumbnail() ):?>
      <div class="single_blog_img">
        <?php the_post_thumbnail();?>
      </div> <?php 
    endif;?>

    <div class="single_blog_text">
      <?php echo dingo_posted_meta_function();?>
      <a href="<?php echo get_permalink();?>"> <?php
        if( !empty( $description ) ):?>
          <h3><?php echo $description; ?> <?php
        endif;?>
      </a> <?php

      if( !empty( $button_text ) ):?>
        <a href="<?php the_permalink();?>" class="btn_3">
          <?php echo $button_text; echo dingo_acf_render_image( $button_icon );?>
        </a> <?php
      endif;?>
    </div>
  </div>
</div>
