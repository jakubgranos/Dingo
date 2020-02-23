<?php
/* 
  Theme menu repeater
  @package Dingo
*/
function menu_repeater_button() {
  if (have_rows('menu_button')):
    while (have_rows('menu_button')): the_row();
      $title =  get_sub_field('button_title');
      $icon = get_sub_field('button_icon')['url'];?>
      <?php if(!empty($title)):?>
        <a href="<?php the_permalink();?>" class="btn_3">
          <?php echo $title;?>
          <img src="<?php echo $icon;?>" alt="button icon">
        </a>
      <?php endif;?>      
    <?php
    endwhile;
  endif;
}
