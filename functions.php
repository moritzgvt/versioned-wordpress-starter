<?php

  // THEME Add includes
  include_once('includes/includes.php');

  // THEME Add custom logo support
  add_theme_support( 'custom-logo' );

  // THEME Register Menus
  register_nav_menu( 'main', 'Hauptmenü' );
  register_nav_menu( 'foot', 'Fußmenü' );
  register_nav_menu( 'legal', 'Rechtliches' );

  // THEME Add CSS and JS root files  
  add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style( 'themestyle', get_stylesheet_directory_uri() . '/scripts/main.css' );
    wp_enqueue_script( 'themescript', get_template_directory_uri() . '/scripts/main.js' );
  });