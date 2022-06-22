<?php 

function mytheme_load_scripts() {
      
   wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
   wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Bitter&display=swap", array(), null);
   wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true); 

}

add_action( 'wp_enqueue_scripts', 'mytheme_load_scripts');

register_nav_menus(
   array(
      'my_theme_main_menu' => 'Main Menu',
      'my_theme_footer_menu' => 'Footer Menu'
   )
);


