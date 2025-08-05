
<?php /* Template Name: Offers page */ ?>
<?php get_header(); ?>

<div class="about">
  <h2><?php the_title(); ?></h2>
</div>

<section class="offers-section">
  <div class="offers-grid">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content(); 
      endwhile;
    endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>