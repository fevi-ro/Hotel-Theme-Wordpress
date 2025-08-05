<?php
/* Template Name: Apartments Page */
get_header();
?>

<main class="apartments-page about">


  <section class="apartments-intro ">
   <h2>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>

  <div class="page-content"><?php the_content(); ?></div>
  </section>


  <section class="rooms-grid">
    <?php
    $args = [
      'post_type' => 'apartment',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
    ];
    $apartments_query = new WP_Query($args);

    if ($apartments_query->have_posts()) :
      while ($apartments_query->have_posts()) : $apartments_query->the_post();

        $bg_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
        $view_url = get_post_meta(get_the_ID(), 'view_room_url', true);
        if (!$view_url) $view_url = '#';
    ?>
        <div class="room-card" style="background-image: url('<?php echo esc_url($bg_img); ?>');">
          <div class="room-overlay">
            <span class="hotel-name">RANDOM APARTMENTS</span>
            <h2><?php the_title(); ?></h2>
            <a href="<?php echo esc_url($view_url); ?>" class="view-btn">VIEW ROOM</a>
          </div>
        </div>
    <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No apartments found.</p>';
    endif;
    ?>
  </section>

</main>

<?php get_footer(); ?>
