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
get_header();

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

  $helper_step_progress = array(
    array (
      'title' => 'Kies een sessie voor dit moment',
      'subtitle' => 'Krijg voorstellen van sessies die beschikbaar zijn op dit moment.',
      'completed' => false,
    ),
    array (
      'title' => 'Maak een keuze uit deze sessies',
      'subtitle' => 'Klik op één van de sessies om deze te kiezen voor dit tijdsvak.',
      'completed' => false,
    ),
    array (
      'title' => 'Klik hier om deze sessie te selecteren',
      'subtitle' => '',
      'completed' => false,
    ),
    array (
      'title' => 'Vervolledig jouw programma',
      'subtitle' => 'Je kan je automatisch inschrijven op alles eens je helemaal klaar bent.',
      'completed' => false,
    ),
    array (
      'title' => 'Klaar!',
      'subtitle' => 'Je hebt je programma vervolledigd. <br>Klik op de knop hieronder om je meteen in te schrijven.',
      'completed' => false,
    ),
  );

?><main>
  <section class="line_up_outer" >
    <section class="line-up">
      <h1>Maak jouw programma</h1>
      <div class="session_field_outer ronde_onthaal" data-ronde="onthaal">
        <div class="label">
          <div class="label_indicator correct"></div>
          <p>Onthaal</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Onthaal</h3>
          <p class="session_time">08u30 - 09u30</p>
        </div>
      </div>
      <div class="session_field_outer ronde_start" data-ronde="start">
        <div class="label">
          <div class="label_indicator correct"></div>
          <p>Feestelijke start</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Feestelijke start</h3>
          <p class="session_time">09u30 - 09u45</p>
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
      <div class="session_field_outer ronde_middag" data-ronde="middag">
        <div class="label">
          <div class="label_indicator <?php if(!empty($ronde_1_session_id) && !empty($ronde_2_session_id)):?>correct<?php else: ?>pending<?php endif; ?>"></div>
          <p>Middag</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">Middagpauze met praktijkenbeurs</h3>
          <p class="session_time">
              <?php if (!empty($ronde_1_session_id) || !empty($ronde_2_session_id)):?>
                <?php if ($programma_vars->extends):?>
                  12u45 - 13u30
                <?php else: ?>
                  12u30 - 13u30
                <?php endif;?>
              <?php else: ?>
                De duur van je pauze hangt af van welke sessie je volgt. Plan je dag en sessies zo dat je tijdens de middagpauze zeker voldoende tijd hebt om een bezoek te brengen aan de beurs. Laat je inspireren door tal van lokale praktijken en bedrijven die hun aanbod voorstellen.
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
      <div class="session_field_outer ronde_plenair" data-ronde="plenair">
        <div class="label">
          <div class="label_indicator correct"></div>
          <p>Plenair</p>
        </div>
        <div class="session_field_inner disabled">
          <h3 class="session_title">"De staat van het kind. Het kind van de staat” door Prof. Dr. Michel Vandenbroeck<br>Uitreiking Gouden Kinderschoen door Mieck Vos, directeur VVSG</h3>
          <p class="session_time">15u15 - 16u15</p>
        </div>
      </div>  <div class="session_field_outer ronde_receptie" data-ronde="receptie">
          <div class="label">
            <div class="label_indicator correct"></div>
            <p>Receptie</p>
          </div>
          <div class="session_field_inner disabled">
            <h3 class="session_title">Afsluiter met een zoet hapje en drankje</h3>
            <p class="session_time">16u15 - ...</p>
          </div>
        </div>
    </section>
    <?php
      if(!isset($_COOKIE['helper_step_id'])){
        $current_step_id = 0;
      } else {
         $current_step_id = $_COOKIE['helper_step_id'];
      }
      ?>
    <section class="helper" id="current_step_<?php echo $current_step_id; ?>">
      <?php if(isset($current_step_id)):?>
        <h3><?php echo $helper_step_progress[$current_step_id]['title']; ?></h3>
        <p><?php echo $helper_step_progress[$current_step_id]['subtitle']; ?></p>
      <?php else: ?>
        <h3>Kies een sessie voor dit moment</h3>
        <p>Krijg voorstellen van sessies die beschikbaar zijn op dit moment.</p>
      <?php endif; ?>
      <?php if ($current_step_id == 4):?>
        <button type="button" name="inschrijving bevestigen" class="cta">Inschrijving bevestigen</button>
      <?php endif;?>
    </section>
    <div class="button_container">
      <a href="<?php echo get_post_type_archive_link('sessie'); ?>"><button type="button" name="button_sessie_archive" class="minor">Kies uit alle sessies</button></a>
    </div>
  </section>
  <div class="registration_information hidden">
    <div class="overlay hidden"></div>
    <form class="reg_info" action="#" method="post">
      <legend>Je programma is bijna compleet</legend>
      <p>Je hebt nu bijna een volledig programma. Het enige wat overblijft is om je inschrijving te voltooien via de academie.vvsg.be website.</p>
      <p>Klik op de knop hieronder om naar de website te gaan, log in en schrijf je in voor de sessies die je hier gekozen hebt.</p>
      <button type="button" name="enroll" id="enroll_all" class="cta">Inschrijving voltooien</button>
    </form>
  </div>
</main>
</body>
</html>
