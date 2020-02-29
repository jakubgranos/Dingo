<?php
/*
  Template grid type team members
  @package Dingo
*/
$jobs_title = wp_get_post_terms($post->ID, 'jobs_title');?>
<div class="col-sm-6 col-lg-4 chefs_part">
  <div class="single_blog_item">
    <div class="single_blog_img"> <?php
      if(has_post_thumbnail()):?>
        <a href="<?php the_permalink();?>">
          <div class="single_blog_img">
            <?php the_post_thumbnail();?>
          </div> 
        </a> <?php
      endif;?>
    </div>
    <div class="single_blog_text text-center">
      <a href="<?php the_permalink();?>"> 
        <h3><?php the_title();?></h3> <?php
        if(!empty($jobs_title)):
          foreach($jobs_title as $job_title):
            $job_title_name = $job_title->name;?>
            <p><?php echo $job_title_name?></p> <?php
          endforeach;
        endif;?>
      </a>
      <div class="social_icon"> <?php
        if(have_rows('social_media')):
          while (have_rows('social_media')) : the_row();
            $link = get_sub_field('link');
            $icon = get_sub_field('icon');
            if(!empty($link)):?>
              <a href="<?php echo $link;?>"><i class="ti-<?php echo $icon;?>"></i></a> <?php
            endif;
          endwhile;
        endif;?>
      </div>
    </div>
  </div>
</div>
