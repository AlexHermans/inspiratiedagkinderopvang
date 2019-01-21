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
     <div class="helper" id="current_step_<?php echo $_COOKIE['helper_step_id']; ?>">
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
   (function($){
     $(document).ready(function(){
       // return back (helper cookie function)
       jQuery('.back').on('click', function(){
         if (Cookies.get('helper_step_id') < 3){
           Cookies.set('helper_step_id', 0, {expires: 365, path: ''});
         }
       });

       $('.sessie_box_outer').each(function(){
        var cookie_str = 'ronde_ID_'+$('.label p').text().trim().replace(' ', '-').toLowerCase();


        console.log(Cookies.get(cookie_str))
         if (Cookies.get(cookie_str) == 'session_ID_' + $(this).data('session-id')){
           console.log('fetching')
           gsi($(this).data('session-id'), $(this))
         }
       });

       //select item
       function gsi(id, that){
         $('.current').removeClass('current')

         $.ajax({
           url:ajax_object.ajax_url,
           method: 'post',
           data:{
             action: 'ik_ajax_gsi',
             session_id: id,
           },
           beforeSend: function(){
             that.children('.sessie_box').addClass('current');
             $('.session_content').children().css('opacity', 0);
             $('.session_content').toggleClass('loading')
           },
           success: function(response){
             $('.session_content').html(response)
             $('.session_content').toggleClass('loading')

             Cookies.set('helper_step_id', 2, {expires: 365, path: ''});
             $('.helper').html('<h3>Klik om deze sessie te reserveren</h3>')
             $('.session_content').after($('.helper'));
             $('.helper').attr('id', 'current_step_2')
           },
           error: function(response){
             $('.session_content').html(response)
             $('.session_content').toggleClass('loading').toggleClass('error')
           }
         })
       }

       $('.sessie_box_outer').on('click', function(){
         var session_id = $(this).data('session-id')
         var that = $(this)

         gsi(session_id, that);
       });


     })
   })(jQuery)
 </script>
