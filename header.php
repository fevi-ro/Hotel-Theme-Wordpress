<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

<header id="site-header" class="transparent">
  <div class="header-container">

    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php
        if ( has_custom_logo() ) {
          the_custom_logo();
        } else { ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
        <?php } ?>
      </a>
    </div>


 


    <nav class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'your-theme-textdomain'); ?>">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'menu_class'     => 'main-menu',
          'container'      => false,
        ]);
      ?>
    </nav>

  </div>
</header>
