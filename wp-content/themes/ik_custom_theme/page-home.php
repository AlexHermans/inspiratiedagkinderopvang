<?php
/**
 * The template for displaying the front page
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ik_custom_theme
 * @since 1.0
 * @version 1.0
 */
get_header();?>

<main>
  <div class="front-splash">
    <div class="bee fs_element"></div>
    <div class="plant-1 fs_element"></div>
    <div class="plant-3 fs_element"></div>
    <div class="plant-4 fs_element"></div>
    <div class="plant-5 fs_element"></div>
    <div class="plant-2 fs_element"></div>
    <div class="squirel fs_element"></div>
    <div class="turtle fs_element"></div>
    <div class="worm fs_element"></div>
    <div class="banner_container">
      <div class="string"></div>
      <div class="banner fs_element"></div>
      <div class="string"></div>
    </div>
    <div class="text">
      <p>30 APRIL 2019</p>
      <p>ICC Gent</p>
    </div>
    <div class="kinderopvang fs_element"></div>
    <div class="pheasant fs_element"></div>
    <div class="dog fs_element"></div>
  </div>
  <section class="full what">
    <div class="explanation">
      <h1>Inspiratiedag kinderopvang <br>is het grootste evenement <br>voor kinderopvanginitiatieven</h1>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
      <button type="button" name="Schrijf je nu in!" class="cta">Schrijf je nu in</button>
    </div>
    <div class="squirel"></div>
  </section>
  <section class="full why">
    <div class="explanation">
      <h2>Een waaier aan interessante lezingen, goede praktijken en werkbezoeken</h2>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
      <button type="button" name="Maak jouw programma" class="minor">Maak jouw programma</button>
    </div>
  </section>
  <section class="full extra">
    <section class="main" role="main">
    <h2>Praktische informatie</h2>
      <div class="content">
        <div class="pi_box_outer">
          <h3>Locatie</h3>
          <div class="pi_box_inner location">
            <p class="large">ICC GENT</p>
            <p class="small">Van Rysselberghedreef 2</p>
            <p class="small">Bus 1 - Citadelpark</p>
            <p class="small">9000 Gent</p>
          </div>
        </div>
        <div class="pi_box_outer">
          <h3>Prijs</h3>
          <div class="pi_box_inner price">
            <p class="large">&euro; 250;-</p>
            <p class="small">per persoon</p>
            <p class="large">&euro; 1000;-</p>
            <p class="small">vanaf 5 personen</p>
          </div>
        </div>
      </div>
    </section>
    <section class="aside" role="aside">
      <div class="wistjedatje">
        <h2>Wist je dat ...?</h2>
        <p>… er vorig jaar 122 goede praktijken van 66 verschillende gemeentes en initiatieven met 6.000 aanwezigen gedeeld werden?</p>
        <button type="button" name="button" class="minor">MEER WEETJES</button>
      </div>
    </section>
    </section>
  </section>
</main>

<?php get_footer(); ?>
