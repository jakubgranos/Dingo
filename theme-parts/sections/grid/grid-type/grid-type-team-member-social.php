<div class="social_icon"> <?php
  if(have_rows('social_media')):
    while (have_rows('social_media')) : the_row();
      $link = get_sub_field('link');
      $icon = get_sub_field('icon');
      switch($icon) {
        case 'Facebook':
          if(!empty($link)):?>
            <a href="<?php echo $link;?>"><i class="ti-facebook"></i></a> <?php
          endif;
          break;
        case 'Instagram':
          if(!empty($link)):?>
            <a href="<?php echo $link;?>"><i class="ti-instagram"></i></a> <?php
          endif;
          break;  
        case 'Twitter':
          if(!empty($link)):?>
            <a href="<?php echo $link;?>"><i class="ti-twitter-alt"></i></a> <?php
          endif;
          break;
        case 'Skype':
          if(!empty($link)):?>
            <a href="<?php echo $link;?>"><i class="ti-skype"></i></a> <?php
          endif;
          break;
      }
    endwhile;
  endif;?>
</div>
