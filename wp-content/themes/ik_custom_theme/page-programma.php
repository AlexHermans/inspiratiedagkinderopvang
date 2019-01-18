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

<?php

  $programma_vars = $ronde_1_session_id = $ronde_2_session_id = $ronde_3_session_id = '';

  // getting relevant cookies
  foreach ($_COOKIE as $key => $value){
    switch ($key) {
      case 'ronde_ID_ronde-1':
        $ronde_1_session_id = substr($value, (strrpos($value, '_') + 1));
        break;
      case 'ronde_ID_ronde-2':
        $ronde_2_session_id = substr($value, (strrpos($value, '_') + 1));
        break;
      case 'ronde_ID_ronde-3':
        $ronde_3_session_id = substr($value, (strrpos($value, '_') + 1));
        break;
      case 'programma_vars':
        $programma_vars = json_decode(str_replace("\\", '', $value));
        break;
    }
  }

  echo $ronde_1_session_id

?>

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
          <div class="label_indicator <?php if(!empty($ronde_1_session_id)): ?>correct<?php endif;?> "></div>
          <p>Ronde 1<?php if($programma_vars->span){echo " + 2";}; ?></p>
        </div>
        <div class="session_field_inner <?php if(empty($ronde_1_session_id)): ?>helper_selected un<?php endif;?>selected ">
          <?php if(!empty($ronde_1_session_id)): ?>
            <?php
            set_query_var('session_id', $ronde_1_session_id);
            get_template_part('template-parts/session', 'button');
            ?>
          <?php else: ?>
            <div class="plus">+</div><p>KIES EEN SESSIE</p>
          <?php endif; ?>
        </div>
      </div>
      <?php if(!$programma_vars->span):?>
      <div class="session_field_outer ronde_2" data-ronde="2">
        <div class="label">
          <div class="label_indicator <?php if(!empty($ronde_2_session_id)): ?>correct<?php endif;?> "></div>
          <p>Ronde 2</p>
        </div>
        <div class="session_field_inner <?php if(empty($ronde_2_session_id)): ?>un<?php endif;?>selected">
          <?php if(!empty($ronde_2_session_id)): ?>
            <?php
            set_query_var('session_id', $ronde_2_session_id);
            get_template_part('template-parts/session', 'button');
            ?>
          <?php else: ?>
            <div class="plus">+</div><p>KIES EEN SESSIE</p>
          <?php endif; ?>
        </div>
      </div>
      <?php endif;?>
      <div class="session_field_outer" data-ronde="middag">
        <div class="label">
          <div class="label_indicator <?php if(!empty($ronde_1_session_id) && !empty($ronde_2_session_id)):?>correct<?php else: ?>pending<?php endif; ?>"></div>
          <p>Middag</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Middagpauze met praktijkenbeurs</h3>
          <p class="time">
              <?php if (!empty($ronde_1_session_id) || !empty($ronde_2_session_id)):?>
                <?php if ($programma_vars->extends):?>
                  13u00 - 13u45
                <?php else: ?>
                  12u30 - 13u15
                <?php endif;?>
              <?php else: ?>
                Kies een sessie in Ronde 1 om een tijd te zien.
              <?php endif;?>
          </p>
        </div>
      </div>
      <div class="session_field_outer ronde_3" data-ronde="3">
        <div class="label">
          <div class="label_indicator <?php if(!empty($ronde_3_session_id)): ?>correct<?php endif;?> "></div>
          <p>Ronde 3</p>
        </div>
        <div class="session_field_inner <?php if(empty($ronde_3_session_id)): ?>un<?php endif;?>selected">
          <?php if(!empty($ronde_3_session_id)): ?>
            <?php
            set_query_var('session_id', $ronde_3_session_id);
            get_template_part('template-parts/session', 'button');
            ?>
          <?php else: ?>
            <div class="plus">+</div><p>KIES EEN SESSIE</p>
          <?php endif; ?>
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
      <a href="<?php echo get_post_type_archive_link('sessie'); ?>"><button type="button" name="button_sessie_archive" class="minor">Kies uit alle sessies</button></a>
    </div>
  </section>
</main>
</body>
</html>
