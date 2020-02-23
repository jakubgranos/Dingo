<?php
/*
  Template for popular posts 
  @package Dingo
*/
global $post;
$posts = get_sub_field('menu');
$title = get_sub_field('menu_title');
$button = get_sub_field('menu_button');

if( $posts ): ?>
  <?php foreach( $posts as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="col-sm-6 col-lg-4">
        <div class="single_blog_item">
          <?php if(has_post_thumbnail()):?>
            <div class="single_blog_img">
              <?php the_post_thumbnail();?>
            </div>
          <?php endif;?>

          <div class="single_blog_text">
            <?php if(get_the_title()):?>
              <h3><?php the_title(); ?></h3>
            <?php endif;?>

            <?php if(get_the_excerpt()):?>
              <p><?php the_excerpt(); ?></p>
            <?php endif;?>
            
            <?php echo menu_repeater_button(); ?>
          </div>
        </div>
      </div>         
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
