<?php

/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package wp-dentist-theme
 */

get_header(); ?>

<?php get_template_part('block-templates/banner'); ?>
<?php get_template_part('block-templates/welcome-section'); ?>
<?php get_template_part('block-templates/slider-section'); ?>
<?php get_template_part('block-templates/services-section'); ?>
<?php get_template_part('block-templates/parallax-section'); ?>
<?php get_template_part('block-templates/about-us-section'); ?>
<?php get_template_part('block-templates/contact-section'); ?>


<?php get_footer(); ?>
