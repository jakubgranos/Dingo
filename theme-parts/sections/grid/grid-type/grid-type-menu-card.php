<?php
/*
  Template grid item type
  @package Dingo
*/
$button_text = get_field('text', 'option');
$button_icon = get_field('icon', 'option');?>
<div class="col-sm-6 col-lg-4">
  <div class="single_blog_item"> <?php
    if(has_post_thumbnail()):?>
      <div class="single_blog_img">
        <?php the_post_thumbnail();?>
      </div> <?php 
    endif;?>

    <div class="single_blog_text"> <?php
      if(get_the_title()):?>
        <h3><?php the_title(); ?></h3> <?php
      endif;

      if(get_the_excerpt()):?>
        <p><?php the_excerpt(); ?></p> <?php
      endif;

      if(!empty($button_text)):?>
        <a href="<?php the_permalink();?>" class="btn_3">
          <?php echo $button_text; echo dingo_render_acf_image($button_icon);?>
        </a> <?php
      endif;?>
    </div>
  </div>
</div>
