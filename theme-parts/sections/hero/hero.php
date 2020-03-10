<?php
/*
  Template for hero
  @package Dingo
*/
$button_text = get_field( 'text', 'option' );
$button_icon = get_field( 'icon', 'option' );
$image = get_sub_field( 'image' );
$text = get_sub_field( 'text' );
$link = get_sub_field( 'link' );?>

<section class="about_part hero_part">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-sm-4 col-lg-5 offset-lg-1">
        <div class="about_img"> <?php
          if( !empty( $image ) ):
            echo dingo_acf_render_image( $image );
          endif;?>
        </div>
      </div>
      
      <div class="col-sm-8 col-lg-4">
        <div class="about_text"><?php
          if( !empty( $text ) ):
            echo $text;
          endif;

          if( !empty( $link ) ):?>
            <a href="<?php echo $link;?>" class="btn_3"> <?php
              if( !empty( $button_text ) ):?>
                <?php echo $button_text; echo dingo_acf_render_image( $button_icon );
              endif;?>
            </a> <?php
          endif;?>
        </div>
      </div>
    </div>
  </div>
</section>
