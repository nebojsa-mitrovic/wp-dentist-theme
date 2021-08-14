<?php

/**
 * The template for displaying the default pages.
 *
 * This is the template that displays on the default pages.
 *
 * @package wp-dentist-theme
 */

get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-12">
      <?php while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
