<?php
/*
  Template for menu posts 
  @package Dingo
*/
global $post;
$posts = get_sub_field('menu');
$button_text = get_sub_field('menu_button_text');
$button_icon = get_sub_field('menu_button_icon');

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

            <?php if(!empty($button_text)):?>
              <a href="<?php the_permalink();?>" class="btn_3">
                <?php echo $button_text;?>
                <img src="<?php echo $button_icon ?>" alt="button icon">
              </a>
            <?php endif;?>
          </div>
        </div>
      </div>         
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
