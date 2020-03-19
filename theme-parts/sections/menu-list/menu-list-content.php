<?php
/*
  Template for menu list content
  @package Dingo
*/
?>
<div class="tab-pane fade single-member" id="<?php echo $division_list_slug;?>" role="tabpanel" aria-labelledby="<?php echo $division_list_slug;?>-tab">
  <div class="row"> <?php
    if( $query->have_posts() ):
      while( $query->have_posts() ): $query->the_post();
        $description = get_field( 'description' );
        $price = get_field( 'price' );?>

        <div class="col-sm-6 col-lg-6"> 
          <a href="<?php the_permalink();?>">
            <div class="single_food_item media">
              <div class="mr-3"><?php the_post_thumbnail( 'thumbnail' );?></div>
              <div class="media-body align-self-center">
                <h3><?php the_title();?></h3> <?php 
                if( !empty( $description ) ):?>
                  <p><?php echo $description;?></p> <?php
                endif;
              
                if( !empty( $price ) ):?>
                  <h5>$<?php echo number_format( $price, 2, '.', ' ' );?></h5> <?php
                endif;?>
              </div>
            </div>
          </a>
        </div> <?php
      endwhile;
    endif;?>
  </div>
</div>
