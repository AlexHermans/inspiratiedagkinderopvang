<?php
/**
 * The template for displaying the front page
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 * @version 1.0
 */
$args = array('post_type' => 'praktijk');

$query = new WP_Query($args);

get_header();?>

<main>
  <section class="infinite">
    <h1>Inspiratiebeurs</h1>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php echo the_content(); ?>
    <?php endwhile; endif;?>
  </section>
</main>
