<?php
/*
  Template for grid recent items manual
  @package Dingo
*/
global $post;
$post_number = get_sub_field('post_number');
$cards = get_sub_field('cards');

if(!empty($cards)):
  foreach($cards as $post):
    setup_postdata($post);?>
    <div class="col-sm-6 col-lg-4">
      <div class="single_blog_item"> <?php
        if(has_post_thumbnail()):?>
          <div class="single_blog_img">
            <?php the_post_thumbnail();?>
          </div> <?php 
        endif;?>
  
        <div class="single_blog_text">
          <?php echo dingo_posted_meta();?>
          
          <a href="<?php the_permalink();?>"> <?php
            if(get_the_title()):?>
              <h3><?php the_title();?></h3> <?php
            endif;

            if(!empty($description)):?>
              <p><?php echo $description;?></p> <?php
            endif;?>
          </a> <?php
  
          if(!empty($button_text)):?>
            <a href="<?php the_permalink();?>" class="btn_3">
              <?php echo $button_text; echo dingo_acf_render_image($button_icon);?>
            </a> <?php
          endif;?>
        </div>
      </div>
    </div> <?php
  endforeach;
  wp_reset_postdata();
endif;
