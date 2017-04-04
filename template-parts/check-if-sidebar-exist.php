<?php
  // Display a suitable column layout depending on whether sidebar exists
  if ( is_active_sidebar( 'sidebar-widgets' ) ) :
    echo '<div class="asided has-sidebar" role="main">';

  else :
    echo '<div class="full-width no-sidebar" role="main">';
  endif;
