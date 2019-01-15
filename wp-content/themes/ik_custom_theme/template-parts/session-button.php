<?php

/**
 * The button that let's users select a session if none is chosen
 * or shows the chosen session's info if one is chosen.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 * @version 1.0
 */

  $session_id = get_query_var('session_id');

  $args = array(
    'post_type' => 'sessie',
    'post_status' => 'publish',
    'p' => $session_id
  );

  $loop = new WP_Query($args);

  ?>

  <?php if ($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post(); ?>
    <div class="session_header" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
    <h3 class="session_title"><?php echo the_title(); ?></h3>
    <?php
     $time = get_the_terms(get_the_ID(), 'tijdsvakken');
     $location = get_the_terms(get_the_ID(), 'locaties');
    ?>
    <p class="session_time"><?php echo $time[0]->name; ?></p>
    <p class="session_location"><?php echo $location[0]->name; ?></p>
  <?php endwhile; endif;?>
