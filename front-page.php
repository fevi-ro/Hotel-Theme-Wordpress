


<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <?php
  $hero_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : 'https://via.placeholder.com/1600x600';
   $hero_subtitle = get_field('hero_subtitle');
  $button_text = get_field('hero_button_text');
  $button_link = get_field('hero_button_link');
?>

<section class="hero" style="background-image: url('<?php echo esc_url($hero_image); ?>'); background-size: cover; background-position: center;">
  <div class="hero-overlay">
    <div class="hero-text">
  <h1><?php the_title(); ?></h1>
      <?php if ($hero_subtitle): ?>
        <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php endif; ?>
      
      <?php if ($button_text && $button_link): ?>
        <a class="hero-button" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_text); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>


  <section class="about">
    <div class="container">
      <?php
        // Display the main content of the page
        the_content();
      ?>
    </div>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
