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
   <div class="session_header" data-session-id="<?php echo get_the_ID(); ?>"style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
   <div class="session_inner">
     <h3><?php echo the_title(); ?></h3>
     <?php
      $time = get_the_terms(get_the_ID(), 'tijdsvakken');
      $location = get_the_terms(get_the_ID(), 'locaties');
      $rondes = get_the_terms(get_the_ID(), 'rondes');
     ?>
     <div class="session_info hidden">
       <?php foreach ($rondes as $key => $value):?>
         <p class="ronde" data-id="<?php echo $rondes[$key]->slug; ?>"></p>
       <?php endforeach; ?>
     </div>
     <p class="session_time"><?php echo $time[0]->name; ?></p>
     <p class="session_location"><?php echo $location[0]->name; ?></p>
     <div class="session_broodtext"><?php echo the_content(); ?></div>
     <button type="button" name="register" class="minor">Keuze bevestigen</button>
   </div>
   <script type="text/javascript">
   jQuery('button[name="register"]').click(function(){
     if (navigator.cookieEnabled){
       var current_round = jQuery('.label > p').text().toLowerCase().replace(' ', '-')

       var programma_vars = {
         span:  (jQuery('.session_info .ronde').length > 1 || Cookies.get('ronde_ID_ronde-1') == Cookies.get('ronde_ID_ronde-2') ? true : false),
         extends: (jQuery('.session_time').text() == "11u15 - 13u00" ? true : false),
       }

       console.log(programma_vars.span)

       jQuery('.session_info .ronde').each(function(){
         console.log(jQuery(this).data('id'));
         Cookies.set('ronde_ID_'+jQuery(this).data('id'), 'session_ID_'+jQuery('.session_header').data('session-id'), {expires: 365 , path: ''});

         if (Cookies.get('ronde_ID_ronde-1') != Cookies.get('ronde_ID_ronde-2')){
           programma_vars.span = false;

           if (Cookies.get('ronde_ID_ronde-1') == 'session_ID_'+jQuery('.session_header').data('session-id')){
             Cookies.remove('ronde_ID_ronde-2', {path: ''})
           } else {
             // eerst checken of dit problemen geeft of niet
             // Cookies.remove('ronde_ID_ronde-1', {path: ''})
           }
         } else {
           programma_vars.span = true;
         }
         Cookies.set('programma_vars', programma_vars, {expires: 365, path: ''})
       });



       // Cookie.set('ronde_ID_'+, '')

      //  document.cookie = 'programma_vars=' + JSON.stringify(programma_vars) + ';' + expires + ';path=/'
      //
      //  if(programma_vars.span){
      //    jQuery('.session_info .ronde').each(function(){
      //      console.log(jQuery(this).data('id'))
      //      if (document.cookie = 'ronde_ID_'+jQuery(this).data('id')+'=session_ID_<?php echo get_the_ID(); ?>;' + expires + ';path=/'){
      //          window.location = '<?php echo get_site_url(null, '/programma');?>';
      //      }
      //    })
      //  } else if(document.cookie = 'ronde_ID_'+current_round+'=session_ID_<?php echo get_the_ID(); ?>;' + expires + ';path=/'){
      //     window.location = '<?php echo get_site_url(null, '/programma');?>';
      // }
     } else {
       alert('Om je in te schrijven moet je cookies toe staan. Gelieve dit aan te passen.')
     }
   })
   </script>
 <?php endwhile; endif;?>
