<?php
/**
 * The template for displaying the taxonomy doelgroep.
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 */

get_header();

$name = get_query_var('category_name')
?>

<main>
  <section class="infinite">
    <h1>Alle sessies voor '<?php echo $name ?>'</h1>
    <div class="all_sessions">
       <?php
         set_query_var('args', array('post_type' => 'sessie', 'post_status' => 'publish', 'category_name' => $name));
         get_template_part('template-parts/session', 'all-sessions');
       ?>
    </div>
  </section>
</main>
