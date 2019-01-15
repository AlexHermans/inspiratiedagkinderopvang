<?php
/**
 * A template part that shows a selection form for the user
 * so that he/she can choose a session from the list. It
 * adds parameters to filter the sessions by.
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

 $ronde_id = $_REQUEST['ronde_id']

 ?>
 <div class="cfas_outer">
   <section class="line-up">
     <a href="<?php echo get_site_url(null, '/programma');?>" class="back">Terug naar programma</a>
     <div class="label">
       <div class="label_indicator"></div>
       <p>Ronde <?php echo $ronde_id?></p>
     </div>
     <div class="session_content">
       <p class="empty">Kies een sessie om er meer informatie over te zien.</p>
     </div>
   </section>
   <section class="session_list">
     <div class="helper">
       <h3>Maak een keuze uit deze sessies</h3>
       <p>Klik op e&#769;e&#769;n van de sessies om deze te kiezen voor dit tijdsvak.</p>
     </div>
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
   </section>
 </div>
 <script type="text/javascript">
   //select item
   (function($){
     $(document).ready(function(){
       $('.sessie_box_outer').on('click', function(){
         var session_id = $(this).data('session-id')

         $.ajax({
           url:ajax_object.ajax_url,
           method: 'post',
           data:{
             action: 'ik_ajax_gsi',
             session_id: session_id,
           },
           beforeSend: function(){
             console.log('getting session info')
             $('.session_content').children().css('opacity', 0);
             $('.session_content').toggleClass('loading')
           },
           success: function(response){
             console.log('success: '+ response)
             $('.session_content').html(response)
             $('.session_content').toggleClass('loading')
           },
           error: function(response){
             console.log('ERROR: '+response)
             $('.session_content').html(response)
             $('.session_content').toggleClass('loading').toggleClass('error')
           }
         })
       });
     })
   })(jQuery)
 </script>
