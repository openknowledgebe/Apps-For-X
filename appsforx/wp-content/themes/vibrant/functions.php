<?php



/*

WordPress Vibrant Theme

*/



/*

Register two sidebars

*/

if (function_exists('register_sidebars')) {

	register_sidebars(1);

}

function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );



//GsL98DGtpo0W







?>