<footer class="site-footer">
  <div class="footer-container">

    <div class="footer-left">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else { ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="footer-logo" />
        <?php } ?>
      </a>

      <p>Email: <?php echo esc_html(get_theme_mod('contact_email', 'contact@yourhotel.com')); ?></p>
      <p>Phone: <?php echo esc_html(get_theme_mod('contact_phone', '+30 123 456 7890')); ?></p>
      <p>Address: <?php echo esc_html(get_theme_mod('contact_address', 'Random, Greece')); ?></p>
    </div>

    <div class="footer-right">
      <div class="social-icons">
        <?php
  
        if (has_nav_menu('social')) {
          wp_nav_menu([
            'theme_location' => 'social',
            'container'      => false,
            'menu_class'     => 'social-menu',
            'link_before'    => '<i class="fab fa-"></i>', // customize  with icon classes dynamically
            'items_wrap'     => '%3$s',
          ]);
        } else {
          // fallback static icons with URLs
          ?>
          <a href="https://facebook.com" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
          <a href="https://tiktok.com" target="_blank" rel="noopener"><i class="fab fa-tiktok"></i></a>
          <a href="https://whatsapp.com" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
          <a href="https://viber.com" target="_blank" rel="noopener"><i class="fab fa-viber"></i></a>
          <?php
        }
        ?>
      </div>

      <p class="rights">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
      </p>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<script>
  const header = document.getElementById('site-header');

  // Reapply correct class on load
  window.addEventListener('DOMContentLoaded', () => {
    if (window.scrollY <= 50) {
      header.classList.add('transparent');
      header.classList.remove('scrolled');
    }
  });

  // Also listen for scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
      header.classList.remove('transparent');
    } else {
      header.classList.remove('scrolled');
      header.classList.add('transparent');
    }
  });
</script>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
</html>
