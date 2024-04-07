<?php 

function load_stylesheets() {
  wp_enqueue_script('main-vincenzi-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('vincenzi-main-styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('font-awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// Add support
add_theme_support('menus');

// Register some menus
register_nav_menus(
  array(
    'top-menu' => 'Top menu',
  )
);