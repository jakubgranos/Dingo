<?php
/*
  Template for navigation part
  @package Dingo
*/
$logo = get_field( 'theme_logo', 'option' );
$button = get_field( 'theme_nav_button', 'option' );
$walker = new Dingo_Walker_header_nav;?>

<?php
  switch( $logo ) {
    case 'image':
      $logo_image = get_field( 'logo_image', 'option' );?>
      <a class="navbar-brand" href="<?php echo get_home_url();?>">
        <?php echo dingo_acf_render_image( $logo_image );?>
      </a> <?php
      break;
    case 'text':
      $logo_text = get_field( 'logo_text', 'option' );?>
      <h5><?php echo $logo_text;?></h5> <?php
      break;
  }
?>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse main-menu-item justify-content-end heder-nav" id="navbarSupportedContent">
  <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'walker' => $walker ) );?>
</div>

<?php if( !empty( $button ) ): ?>
  <div class="menu_btn">
    <a href="<?php echo $button[ 'url' ]; ?>" target="<?php echo $button[ 'target' ] ?>" class="btn_1 d-none d-sm-block"><?php echo $button[ 'title' ]; ?></a>
  </div>
<?php endif;
