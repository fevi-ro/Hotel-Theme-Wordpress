<?php
/* Template Name: Apartments Page */
get_header();
?>

<main class="apartments-page">
    <section class="apartments-intro"> <h2>Apartment Types</h2> <p>view our apartments Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</section>

  <section class="rooms-grid">
    <div class="room-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image1.jpg');">
    <div class="room-overlay">
      <span class="hotel-name">RANDOM APARTMENTS</span>
      <h2>Premium Apartment A</h2>
      <a href="#suite-a" class="view-btn">VIEW ROOM</a>
    </div>
  </div>

  <div class="room-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image2.jpg');">
    <div class="room-overlay">
      <span class="hotel-name">RANDOM APARTMENTS</span>
      <h2>Premium Suite B</h2>
      <a href="#suite-b" class="view-btn">VIEW ROOM</a>
    </div>
  </div>

  <div class="room-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image3.jpg');">
    <div class="room-overlay">
      <span class="hotel-name">RANDOM APARTMENTS</span>
      <h2>Premium Suite B</h2>
      <a href="#suite-b" class="view-btn">VIEW ROOM</a>
    </div>
  </div>

 <div class="room-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image4.jpg');">
    <div class="room-overlay">
      <span class="hotel-name">RANDOM APARTMENTS</span>
      <h2>Premium Suite B</h2>
      <a href="#suite-b" class="view-btn">VIEW ROOM</a>
    </div>
  </div>

   <div class="room-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image5.jpg');">
    <div class="room-overlay">
      <span class="hotel-name">RANDOM APARTMENTS</span>
      <h2>Premium Suite B</h2>
      <a href="#suite-b" class="view-btn">VIEW ROOM</a>
    </div>
  </div>

    <div class="room-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image6.jpg');">
    <div class="room-overlay">
      <span class="hotel-name">RANDOM APARTMENTS</span>
      <h2>Premium Suite B</h2>
      <a href="#suite-b" class="view-btn">VIEW ROOM</a>
    </div>
  </div>
  <!-- Add more cards here -->
</section>

</main>

<?php get_footer(); ?>
