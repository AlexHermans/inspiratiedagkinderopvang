<?php
/**
 * The template for displaying all sessies.
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 */

 get_header();
 ?>

 <main>
   <section class="infinite">
     <h1>Alle sessies</h1>
     <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <div class="sessie_box_outer">
         <div class="sessie_image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
         <div class="sessie_box">
           <h3><?php echo the_title(); ?></h3>
           <a href="<?php echo get_permalink(); ?>">Ga naar sessie</a>
         </div>
      </div>
     <?php endwhile; endif;?>
   </section>
 </main>
