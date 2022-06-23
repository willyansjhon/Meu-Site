<?php 

function mytheme_load_scripts() {
      
   wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
   wp_enqueue_style('google-fonts', "wp_enqueue_style"('google-fonts', "https://fonts.googleapis.com/css2?family=Bitter&display=swap"), array(), null);
   wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true); 

}

add_action( 'wp_enqueue_scripts', 'mytheme_load_scripts');

function mytheme_config(){
   register_nav_menus(
      array(
         'my_theme_main_menu' => 'Main Menu',
         'my_theme_footer_menu' => 'Footer Menu'
      )
   );
   
   $args = array(
      'height' => 225,
      'width' => 1920,
   );
   add_theme_support( 'custom-header', $args);
   add_theme_support( 'post-thumbnails');
   add_theme_support( 'custom-logo', array(
      'width' => 200,
      'height' => 110,
      'flex-height' => true,
      'flex-widght' => true,
   ));
}

add_action('after_setup_theme', 'mytheme_config', 0);

add_action('widgets_init', 'mytheme_sidebars');

function mytheme_sidebars(){
   register_sidebar(
      array(
         'name' => 'Blog Sidebar',
         'id'  => 'sidebar-blog',
         'description' => 'a blog sidebar',
         'before_widget' => '<div class="widget-wrapper">',
         'afeter_widget' => '</div>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>',
      )
   );
   register_sidebar(
      array(
         'name' => 'Service 1',
         'id'  => 'service-1',
         'description' => 'A service for us site',
         'before_widget' => '',
         'afeter_widget' => '',
         'before_title' => '<h4 class="service-title">',
         'after_title' => '</h4>',
      )
   );
   register_sidebar(
      array(
         'name' => 'Service 2',
         'id'  => 'service-2',
         'description' => 'A service for us site',
         'before_widget' => '',
         'afeter_widget' => '',
         'before_title' => '<h4 class="service-title">',
         'after_title' => '</h4>',
      )
   );
   register_sidebar(
      array(
         'name' => 'Service 3',
         'id'  => 'service-3',
         'description' => 'A service for us site',
         'before_widget' => '',
         'afeter_widget' => '',
         'before_title' => '<h4 class="service-title">',
         'after_title' => '</h4>',
      )
   );
}


