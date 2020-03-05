<?php
/*
  Template recent items latest
  @package Dingo
*/
$post_type = ['team_member', 'menu_item', 'post'];
$post_number = get_sub_field('post_number');
$query = new WP_Query(array(
  'post_type' => $post_type,
  'posts_per_page' => $post_number,
  'orderby' => 'post_date',
  'order' => 'DESC',
)); 

if($query->have_posts()):
  while($query->have_posts()): $query->the_post();?>
    <div class="col-sm-6 col-lg-4">
      <div class="single_blog_item"> <?php
        if(has_post_thumbnail()):?>
          <div class="single_blog_img">
            <?php the_post_thumbnail();?>
          </div> <?php 
        endif;?>

        <div class="single_blog_text"> <?php
          if(get_the_title()):?>
            <h3><?php the_title();?></h3> <?php
          endif;

          if(!empty($description)):?>
            <p><?php echo $description;?></p> <?php
          endif;

          if(!empty($button_text)):?>
            <a href="<?php the_permalink();?>" class="btn_3">
              <?php echo $button_text; echo dingo_acf_render_image($button_icon);?>
            </a> <?php
          endif;?>
        </div>
      </div>
    </div> <?php
  endwhile;
endif;

