<?php
/*
  Template for popular posts 
  @package Dingo
*/
global $post;

$posts = get_sub_field('popular_post_content');
if( $posts ): ?>
  <div>
  <?php foreach( $posts as $post): ?>
      <?php setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

          <span>Custom field from $post: <?php the_field('author'); ?></span>
  <?php endforeach; ?>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
