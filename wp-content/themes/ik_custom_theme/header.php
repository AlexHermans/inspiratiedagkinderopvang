<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 * @version 1.0
 */
?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
     <head>
         <meta charset="<?php bloginfo( 'charset' ); ?>" />
         <title><?php wp_title(); ?></title>
         <link rel="profile" href="http://gmpg.org/xfn/11" />
         <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
         <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
         <?php wp_head(); ?>
     </head>
     <body <?php body_class(); ?>>
       <header>
         <h1 class="logo-type"><a href="<?php echo get_home_url(); ?>">inspiratiedag kinderopvang</a></h1>
         <nav>
           <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
         </nav>
       </header>
