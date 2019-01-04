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
  <section class="line_up_outer" >
    <section class="line-up">
      <h1>Maak jouw programma</h1>
      <div class="session_field_outer ronde_onthaal" data-ronde="onthaal">
        <div class="label">
          <div class="label_indicator correct"></div>
          <p>Onthaal</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Titel</h3>
          <p class="time">08u30 - 09u45</p>
        </div>
      </div>
      <div class="session_field_outer ronde_1" data-ronde="1">
        <div class="label">
          <div class="label_indicator"></div>
          <p>Ronde 1</p>
        </div>
        <div class="session_field_inner unselected helper">
          <div class="plus">+</div><p>KIES EEN SESSIE</p>
        </div>
      </div>
      <div class="session_field_outer ronde_2" data-ronde="2">
        <div class="label">
          <div class="label_indicator"></div>
          <p>Ronde 2</p>
        </div>
        <div class="session_field_inner unselected">
          <div class="plus">+</div><p>KIES EEN SESSIE</p>
        </div>
      </div>
      <div class="session_field_outer" data-ronde="middag">
        <div class="label">
          <div class="label_indicator pending"></div>
          <p>Middag</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Middagpauze met praktijkenbeurs</h3>
          <p class="time">Kies een sessie in Ronde 1 om een tijd te zien.</p>
        </div>
      </div>
      <div class="session_field_outer ronde_3" data-ronde="3">
        <div class="label">
          <div class="label_indicator"></div>
          <p>Ronde 3</p>
        </div>
        <div class="session_field_inner unselected">
          <div class="plus">+</div><p>KIES EEN SESSIE</p>
        </div>
      </div>
      <div class="session_field_outer" data-ronde="plenair">
        <div class="label">
          <div class="label_indicator correct"></div>
          <p>Plenair</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Titel</h3>
          <p class="time">08u30 - 09u45</p>
        </div>
      </div>  <div class="session_field_outer" data-ronde="receptie">
          <div class="label">
            <div class="label_indicator correct"></div>
            <p>Receptie</p>
          </div>
          <div class="session_field_inner disabled">
            <h3 class="session_title">Titel</h3>
            <p class="time">08u30 - 09u45</p>
          </div>
        </div>
    </section>
    <div class="button_container">
      <a href="<?php echo get_post_type_archive_link('sessie'); ?>"><button type="button" name="button_sessie_archive" class="minor">Alle sessies</button></a>
    </div>
  </section>
</main>
</body>
</html>
