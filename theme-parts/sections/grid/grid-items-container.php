<?php
/*
  Template for grid items container 
  @package Dingo
*/
$cards = get_sub_field( 'cards' );
$heading = get_sub_field( 'heading' );
$subheading = get_sub_field( 'subheading' );
$overlay = get_sub_field( 'overlay' );
$display_posts = get_sub_field( 'display_posts' ); 

if( !empty( $overlay ) ):?> 
  <style>
    .exclusive_item_part:after {
      background: url( '<?php echo $overlay;?>' )bottom right no-repeat;
      background-size: 15% 65%;
    }
  </style> <?php
endif;?>
<section class="exclusive_item_part blog_item_section blog_section">
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <div class="section_tittle"> <?php
          if( !empty( $heading ) ):?>
            <p><?php echo $heading;?></p> <?php
          endif;

          if( !empty( $subheading ) ):?>
            <h2><?php echo $subheading;?></h2> <?php
          endif;?>
        </div>
      </div>
    </div>
    <div class="row"> <?php
      if( !empty( $cards ) ):
        switch( $display_posts ) {
          case 'manual':
            require 'relationship-items.php';
            break;
          case 'latest':
            require 'relationship-items.php';
            break;
        }
      endif;?>
    </div>
  </div>
</section>
