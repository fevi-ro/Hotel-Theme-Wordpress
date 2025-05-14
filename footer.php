<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-left">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Hotel Logo" class="footer-logo">
      <p>Email: contact@yourhotel.com</p>
      <p>Phone: +30 123 456 7890</p>
      <p>Address: Random, Greece</p>
    </div>

    <div class="footer-right">
      <div class="social-icons">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://viber.com" target="_blank"><i class="fab fa-viber"></i></a>
      </div>
      <p class="rights">© 2025 Your Hotel Name. All rights reserved.</p>
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



</body>
</html>
