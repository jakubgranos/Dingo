<?php
/*
  Template grid type team members
  @package Dingo
*/
$job_title = get_field('job_title');?>
<div class="col-sm-6 col-lg-4 chefs_part">
  <div class="single_blog_item">
    <div class="single_blog_img">
      <a href="<?php the_permalink();?>"> <?php
        if(has_post_thumbnail()):?>
          <div class="single_blog_img">
            <?php the_post_thumbnail();?>
          </div> <?php 
        endif;?>
      </a>
    </div>
    <div class="single_blog_text text-center">
      <a href="<?php the_permalink();?>"> <?php
        if(get_the_title()):?>
          <h3><?php the_title(); ?></h3> <?php
        endif;

        if(!empty($job_title)):?>
          <p><?php echo $job_title;?></p> <?php
        endif;?>
      </a> <?php
      require 'grid-type-team-member-social.php'; ?>
    </div>
  </div>
</div>
