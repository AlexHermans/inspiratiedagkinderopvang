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
       <link rel="shortcut icon" type="image/png" href="../favicon.ico"/>
       <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
       <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
       <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
       <link rel="manifest" href="../site.webmanifest">
       <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
       <meta name="msapplication-TileColor" content="#ffc40d">
       <meta name="theme-color" content="#e9c73b">
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
