<?php
/* Template Name: Gallery Page */
get_header();
?>


<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

  <div class="about">
    <h2><?php the_title(); ?></h2>
  </div>

  <section class="gallery-section">
    <div class="gallery-grid">
      <?php the_content(); ?>
    </div>
  </section>

<?php
  endwhile;
endif;

get_footer();
?>

