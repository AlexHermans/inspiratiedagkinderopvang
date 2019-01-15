<?php
/**
 * A template part that show specific information about a single
 * chosen session. Add's the option to enroll in the session.
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
   <div class="session_header" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
   <div class="session_inner">
     <h3><?php echo the_title(); ?></h3>
     <?php
      $time = get_the_terms(get_the_ID(), 'tijdsvakken');
      $location = get_the_terms(get_the_ID(), 'locaties');
     ?>
     <p class="session_time"><?php echo $time[0]->name; ?></p>
     <p class="session_location"><?php echo $location[0]->name; ?></p>
     <div class="session_broodtext"><?php echo the_content(); ?></div>
     <button type="button" name="register" class="minor">Keuze bevestigen</button>
   </div>
   <script type="text/javascript">
   jQuery('button[name="register"]').click(function(){
     if (navigator.cookieEnabled){
       var d = new Date();
       d.setTime(d.getTime() + (1000*24*60*60*1000));
       var expires = "expires="+ d.toUTCString();

       var current_round = jQuery('.label > p').text().toLowerCase().replace(' ', '_')

       if(document.cookie = 'ronde_ID_'+current_round+'=session_ID_<?php echo get_the_ID(); ?>;' + expires + ';path=/'){
         window.location = '<?php echo get_site_url(null, '/programma');?>';
       }
     } else {
       alert('Om je in te schrijven moet je cookies toe staan. Gelieve dit aan te passen.')
     }
   })
   </script>
 <?php endwhile; endif;?>
