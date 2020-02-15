<?php

// Check value exists.
if( have_rows('sections') ):

    // Loop through rows.
    while ( have_rows('sections') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'section_menu' ):
           require_once('theme-parts/sections/section_menu.php');
            // Do something...

        // Case: Download layout.
        elseif( get_row_layout() == 'section_contact' ): 
          require_once('theme-parts/sections/section_contact.php');
            // Do something...

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;