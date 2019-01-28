<?php
/**
 * The template for displaying a single sessie.
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 */

 get_header();

 $term = get_query_var('term');
 $tax = get_query_var('taxonomy');
?>

<main>
  <section class="infinite">
    <h1>Alle sessies met '<?php echo $term ?>'</h1>
    <div class="all_sessions">
       <?php
         set_query_var('args', array('post_type' => 'sessie', 'post_status' => 'publish', 'tax_query' => array (array('taxonomy' => $tax, 'field' => 'slug', 'terms' => $term))));
         get_template_part('template-parts/session', 'all-sessions');
       ?>
    </div>
  </section>
</main>
