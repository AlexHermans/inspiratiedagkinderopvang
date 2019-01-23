<?php
/**
 * The template for displaying all sessies.
 *
 *  De count functie staat in comment omdat ik het niet kan combineren met verschillende filters.
 *  Een andere logica moet hiervoor gemaakt worden maar als het actief staat dan gaat het
 *  gebruikers wrs verwarren.
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 */

 get_header();

 $taxonomies = get_object_taxonomies('sessie', 'object');

 ?>

 <main style="display:flex">
   <section class="filters">
     <form class="filter_form" action="#" method="post">
       <?php foreach ($taxonomies as $k => $v):?>
         <fieldset>
           <legend><?php echo $v->labels->name; ?></legend>
           <?php
             $terms = get_terms(array('taxonomy' => $v->name));
             foreach ($terms as $term):?>
             <div class="checkbox_outer">
               <input data-taxonomy-name="<?php echo $v->name; ?>" type="checkbox" id="<?php echo $term->slug;?>" name="<?php echo $term->name; ?>" value="<?php echo $term->slug; ?>">             <label for="<?php echo $term->slug ?>"><?php echo $term->name; ?></label>
               <!-- <p class="count">(<?php // echo $term->count; ?>)</p> -->
             </div>
           <?php endforeach;?>
         </fieldset>
       <?php endforeach; ?>
     </form>
   </section>
   <section class="infinite" style="min-width: 60vw;">
     <div class="sub_header">
       <h1>Alle sessies</h1>
      <input type="text" name="search" value="" id="search" placeholder="Zoeken">
     </div>
     <div class="all_sessions">
        <?php
          set_query_var('args', array('post_type' => 'sessie', 'post_status' => 'publish'));
          get_template_part('template-parts/session', 'all-sessions');
        ?>
     </div>
   </section>
 </main>
