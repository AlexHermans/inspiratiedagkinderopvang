<?php
/**
 * The template for displaying the praktijkenmarkt page
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
  <section class="infinite praktijken">
    <h1>Praktijkenmarkt</h1>
    <div class="praktijk_outer">
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="praktijk_wrapper">
          <h3><?php echo the_title(); ?></h3>
          <div class="praktijk_inner">
            <?php if (!empty(get_the_post_thumbnail_url())): ?>
              <div class="praktijk_header" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
            <?php endif; ?>
            <p><?php echo get_the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; endif;?>
    </div>
  </section>
</main>
