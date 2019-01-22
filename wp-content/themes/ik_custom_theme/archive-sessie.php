<?php
/**
 * The template for displaying all sessies.
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 */

 get_header();

 $taxonomies = get_post_taxonomies();
 ?>

 <main style="display:flex">
   <section class="filters">
     <form class="filter_form" action="#" method="post">
       <?php foreach ($taxonomies as $k => $v):?>
         <fieldset>
           <legend><?php echo $v; ?></legend>
           <?php
             $terms = get_terms(array('taxonomy' => $v));
             foreach ($terms as $term):?>
             <div class="checkbox_outer">
               <input data-taxonomy-name="<?php echo $v; ?>" type="checkbox" id="<?php echo $term->slug;?>" name="<?php echo $term->name; ?>" value="<?php echo $term->slug; ?>">             <label for="<?php echo $term->slug ?>"><?php echo $term->name; ?></label>
               <p class="count">(<?php echo $term->count; ?>)</p>
             </div>
           <?php endforeach;?>
         </fieldset>
       <?php endforeach; ?>
     </form>
   </section>
   <section class="infinite">
     <h1>Alle sessies</h1>
     <div class="all_sessions">

     </div>
   </section>
 </main>
