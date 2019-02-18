<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ik_custom theme
 * @since 1.0
 * @version 1.0
 */
?>
<footer>
  <p style="color:white">Een initiatief van</p>
  <img src="http://www.inspiratiedagkinderopvang.be/wp-content/uploads/2019/01/Group-20.png" alt="logo VVSG">
  <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
