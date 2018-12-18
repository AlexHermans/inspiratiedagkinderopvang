<?php
/**
 * The template for displaying a single sessie.
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 */


 $taxonomies = get_object_taxonomies("sessie");
 $post_terms = wp_get_post_terms(get_the_ID(), get_object_taxonomies("sessie"));

get_header(); ?>

<main>
  <section class="full sessie">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="sessie_info">
        <h1><?php echo the_title(); ?></h1>
        <div class="sessie_terms">
          <?php foreach($post_terms as $term):?>
            <p><a href="<?php echo get_term_link($term->term_id); ?>"> <?php echo $term->name;?></a></p>
          <?php endforeach;?>
        </div>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="sessie_thumbnail">
        <?php echo the_content(); ?>
      </div>
  <?php endwhile; endif;?>
  </section>
  </section>
</main>
