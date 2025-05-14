<?php
function argo_hotel_theme_setup() {
  add_theme_support('title-tag');
  register_nav_menus([
    'primary' => __('Primary Menu')
  ]);
}
add_action('after_setup_theme', 'argo_hotel_theme_setup');

function argo_enqueue_styles() {

  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poiret+One&display=swap', false);
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');

  wp_enqueue_style('argo-main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'argo_enqueue_styles');



