<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage ik_custom_template
 * @since 1.0
 */

get_header(); ?>

<main>
  <section class="infinite">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php echo the_title(); ?></h1>
      <?php echo the_content(); ?>
  <?php endwhile; endif;?>
  </section>
</main>

<?php get_footer(); ?>
