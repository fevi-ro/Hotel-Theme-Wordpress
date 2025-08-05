<?php /* Template Name: Services Page */ ?>
<?php get_header(); ?>

<div class="about">
  <h2><?php the_title(); ?></h2>
</div>

<section class="services-section">
  <div class="services-grid">
    <div class="policies-content">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content(); // Admin edits services & policies with Gutenberg or Classic Editor
      endwhile;
    endif;
    ?>
  </div>
  </div>
</section>

<?php get_footer(); ?>
