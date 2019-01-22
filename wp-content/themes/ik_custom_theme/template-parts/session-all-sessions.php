<?php
/**
 * A template part that shows all sessions based on an AJAX req.
 * Specifically designed for the session archive page but can be
 * reused if needed; just need to set the query vars (see functions.php)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 * @version 1.0
 */

 $args = get_query_var('args');

 $loop = new WP_Query($args);
 ?>

 <?php if ($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post(); ?>
   <?php
    $time = get_the_terms(get_the_ID(), 'tijdsvakken');
    $location = get_the_terms(get_the_ID(), 'locaties');
   ?>
   <div class="sessie_box_outer" data-session-id="<?php echo get_the_ID(); ?>">
     <div class="sessie_image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
     <div class="sessie_box">
       <h3><?php echo the_title(); ?></h3>
       <p><?php echo $time[0]->name; ?></p>
       <p><?php echo $location[0]->name; ?></p>
     </div>
   </div>
 <?php endwhile; endif;?>
