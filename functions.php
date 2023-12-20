<?php
add_theme_support('title-tag');
add_theme_support('menus'); 
<<<<<<< HEAD
=======

>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
register_nav_menu('header', 'En tête du menu');


function montheme_menu_class($classes) {
    // va permettre de customizer les classe de nos items (donc nos `li`)
    $classes[] = 'nav-item';
    return $classes;
}
function montheme_menu_link_class($attrs) {
    // va permettre de customizer les classe de nos liens (donc nos `a`)
    $attrs['class'] = 'nav-link';
    return $attrs;
}
  
  add_filter('nav_menu_css_class', 'montheme_menu_class');
  add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');