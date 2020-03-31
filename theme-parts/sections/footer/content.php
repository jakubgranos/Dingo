<?php
/*
  Theme footer content
  @package Dingo
*/ 
?>
<div class="row"> <?php
  if( have_rows( 'row', 'option' ) ):
    while( have_rows( 'row', 'option' ) ): the_row();
      $title = get_sub_field( 'title' ); 
      $content = get_sub_field( 'content' )?>
      <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3"> 
        <div class="single-footer-widget footer_1"> <?php
          if( !empty( $title ) ):?>
            <h4><?php echo $title?></h4> <?php
          endif;
						
          if( !empty( $content ) ):?>
            <p><?php echo $content;?></p> <?php  
          endif;?>
        </div>
      </div> <?php
    endwhile;
  endif;?>
</div>