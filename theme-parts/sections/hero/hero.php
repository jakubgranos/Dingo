<?php
/*
  Template for hero
  @package Dingo
*/
$image = get_sub_field( 'image' );
$text = get_sub_field( 'text' );?>

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
          endif;?>
        </div>
      </div>
    </div>
  </div>
</section>
