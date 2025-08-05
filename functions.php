<?php
// Register Custom Post Type: Apartments 
function mytheme_register_apartments_cpt() {
    $labels = [
        'name' => __('Apartments', 'mytheme'),
        'singular_name' => __('Apartment', 'mytheme'),
        'menu_name' => __('Apartments', 'mytheme'),
        'name_admin_bar' => __('Apartment', 'mytheme'),
        'add_new' => __('Add New', 'mytheme'),
        'add_new_item' => __('Add New Apartment', 'mytheme'),
        'new_item' => __('New Apartment', 'mytheme'),
        'edit_item' => __('Edit Apartment', 'mytheme'),
        'view_item' => __('View Apartment', 'mytheme'),
        'all_items' => __('All Apartments', 'mytheme'),
        'search_items' => __('Search Apartments', 'mytheme'),
        'not_found' => __('No apartments found.', 'mytheme'),
        'not_found_in_trash' => __('No apartments found in Trash.', 'mytheme'),
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-home',
        'show_in_rest' => true,
    ];

    register_post_type('apartments', $args);
}
add_action('init', 'mytheme_register_apartments_cpt');


add_action('init', function () {
  register_post_type('apartment', [
    'labels' => [
      'name'          => 'Apartments',
      'singular_name' => 'Apartment',
    ],
    'public'      => true,
    'has_archive' => true,
    'show_in_nav_menus' => true,
    'rewrite'     => ['slug' => 'apartments'],
    'supports'    => ['title', 'editor', 'thumbnail', 'excerpt'],
  ]);
});


// Register Navigation Menus
function mytheme_register_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_register_menus');


// Remove featured image from content if it's already shown as hero
add_filter('the_content', 'remove_featured_image_from_content');

function remove_featured_image_from_content($content) {
    if (is_front_page()) {
        // Remove <figure> or <img> tags pointing to the featured image
        $featured_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $pattern = '/<figure[^>]*>.*?<img[^>]+src=["\']' . preg_quote($featured_url, '/') . '["\'][^>]*>.*?<\/figure>/i';
        $content = preg_replace($pattern, '', $content);
    }
    return $content;
}


// Enqueue Styles and Scripts
function mytheme_enqueue_assets() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poiret+One&display=swap',
        [],
        null
    );




 wp_enqueue_style(
        'mytheme-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        wp_get_theme()->get('Version')
    );


    // FontAwesome for social icons 
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        [],
        '6.4.0'
    );

    // enqueue your custom JS here 
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');


function mytheme_setup_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');



add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
));

}

add_action('after_setup_theme', 'mytheme_setup_theme_support');
