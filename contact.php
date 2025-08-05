<?php
/* Template Name: Contact Page */
get_header();
?>

<div class="page-section contact-page container layout-centered about">
  <h2><?php the_title(); ?></h2>
  <div class="contact-content">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content(); 
      endwhile;
    endif;
    ?>
  </div>
</div>


<?php get_footer(); ?>
