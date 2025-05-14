<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="site-header" class="transparent">
  <div class="header-container">
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" />
      </a>
    </div>
    <nav class="main-nav">
    <?php
  wp_nav_menu(['theme_location' => 'primary','menu_class' => 'main-menu',]); ?>
    </nav>
  </div>


  
 
</header>
