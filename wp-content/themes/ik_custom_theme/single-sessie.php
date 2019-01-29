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

 // initialising empty vars
 $sessie_type_html = '';

 foreach ($post_terms as $term){
   switch ($term->taxonomy) {
     case 'sessie_types':
       $sessie_type_html .= '<p class="session_type">Soort sessie: <a class="original" href="'.get_term_link((int) $term->term_id).'">'.$term->name.'</a></p>';
       break;
     case 'rondes':
       $ronde_html .= '<p class="session_round"><a class="original" href="'.get_term_link((int) $term->term_id).'">'.$term->name.'</a></p>';
       break;
     case 'tijdsvakken':
       $tijdsvak_html .= '<p class="session_time"><a class="original" href="'.get_term_link((int) $term->term_id).'">'.$term->name.'</a></p>';
       break;
     case 'locaties':
       $locatie_html .= '<p class="session_location"><a class="original" href="'.get_term_link((int) $term->term_id).'">'.$term->name.'</a></p>';
       break;
     case 'category':
       $audience_html .= '<p class="session_audience"><a class="original" href="'.get_term_link((int) $term->term_id).'">'.$term->name.'</a></p>';
       break;
     case 'categorie_2':
       $category_html .= '<p class="session_category"><a class="original" href="'.get_term_link((int) $term->term_id).'">'.$term->name.'</a></p>';
       break;

     default:
       // code...
       break;
   }
}

get_header(); ?>

<main>
  <section class="full sessie">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="sessie_info">
        <?php echo $sessie_type_html; ?>
        <h1><?php echo the_title(); ?></h1>
        <?php echo $tijdsvak_html; ?>
        <?php echo $rondes_html; ?>
        <?php echo $locatie_html; ?>
        <p class="session_time"></p>
        <div class="sessie_audience">
        <h4>Doelgroepen</h4>
          <?php echo $audience_html; ?>
        </div>
        <?php if (get_the_post_thumbnail_url()): ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="sessie_thumbnail">
        <?php endif; ?>
        <div class="content">
          <?php echo the_content(); ?>
        </div>
      </div>
  <?php endwhile; endif;?>
  </section>
  </section>
</main>
