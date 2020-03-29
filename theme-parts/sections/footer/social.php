<?php
/*
  Theme footer socials
  @package Dingo
*/ 
?>
<div class="col-lg-4">
	<div class="copyright_social_icon text-right"> <?php
		if( have_rows( 'social_media', 'option' ) ):
			while( have_rows( 'social_media', 'option' ) ): the_row();
				$url = get_sub_field( 'url' );
				$icon = get_sub_field( 'icon' );
				if( !empty( $url ) ):
					$url_args = [
						'content' => "<i class='ti-$icon' ></i>",
					];
					echo wpc_get_link( $url, $url_args );
				endif;
			endwhile;
		endif;?>
	</div>
</div>