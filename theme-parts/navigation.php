<?php
/*
  Template for header part
  @package Dingo
*/
$logo = get_field('theme_logo', 'option');
$button = get_field('theme_nav_button', 'option');

$walker = new  Dingo_Walker_header_nav;?>

<header class="header main_menu home_menu">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="/home"><img src="<?php echo $logo;?>" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse main-menu-item justify-content-end heder-nav" id="navbarSupportedContent">
            <?php wp_nav_menu( array('theme_location' => 'header_menu', 'walker' => $walker) );?>
          </div>
          <div class="menu_btn">
            <a href="<?php echo $button['url'];?>" class="btn_1 d-none d-sm-block"><?php echo $button['title'];?></a>
          </div>          
        </nav>
      </div>
    </div>
  </div>
</header>