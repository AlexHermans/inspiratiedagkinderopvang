<?php /**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ik_custom_template
 * @since 1.0
 * @version 1.0
 */

 get_header();
 ?>

 <div class="index_error">
  <p>Dit is de index.php pagina.</p>
  <p>Bij leven en welzijn zou je deze niet mogen zien.</p>
  <p><a href="<?php get_home_url(); ?>">Neem me gewoon terug naar de hoofdpagina!</a></p>
 </div>
 
<?php get_footer(); ?>
