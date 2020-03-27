<?php
/*
  Theme banner footer
  @package Dingo
*/ 
$copyright = get_field( 'copyright', 'option' );?>
<footer class="footer-area">
  <div class="container">
    <div class="row"> <?php
      if( have_rows( 'row', 'option' ) ):
        while( have_rows( 'row', 'option' ) ): the_row();
          $title = get_sub_field( 'title' ); 
          $content = get_sub_field( 'content' )?>
          <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3"> 
            <div class="single-footer-widget footer_1">
              <h4><?php echo $title?></h4>
              <p><?php echo $content;?></p>
            </div>
          </div> <?php
        endwhile;
      endif;?>
    </div>
    <div class="copyright_part_text">
      <div class="row">
        <div class="col-lg-8">
          <?php echo $copyright;?>
        </div>
        <div class="col-lg-4">
          <div class="copyright_social_icon text-right"> <?php
            if( have_rows( 'social_media', 'option' ) ):
              while( have_rows( 'social_media', 'option' ) ): the_row();
                $url = get_sub_field( 'url' ); 
                $icon = get_sub_field( 'icon' );?>
                <a href="<?php echo $url[ 'url' ]?>"><i class="ti-<?php echo $icon;?>"></i></a> <?php
              endwhile;
            endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

