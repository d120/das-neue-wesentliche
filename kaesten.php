<?php

// ------------------------------------------------------------------
function kasten_verweis($post, $float) {

  $layoutcss = '';
  if ($_GET['zweispaltig'] == '1') { $layoutcss = "2spalten"; }
  else { $layoutcss = "1spalte"; }
  if ($Seitenform == 'Einzelseite') { $layoutcss = "Einzelseite"; }
?>
  <div class="post post-detail" style="<?php echo $float; ?>" id="post-<?php the_ID(); ?>">
  <div class="verweis" style="<?php echo $float; ?>"><a href="<?php $a = get_post_custom_values('URL'); echo $a[0]; ?>"><?php the_title(); ?></a></div>

  </div>
<?php
}
// ------------------------------------------------------------------


// ------------------------------------------------------------------
function kasten_photo($post, $float) {
  kasten_vorlage(' photo', $post, $float, '');
}
// ------------------------------------------------------------------


// ------------------------------------------------------------------
function kasten_kommentar($post, $float) {
  kasten_vorlage(' kommentar', $post, $float, '');
}
// ------------------------------------------------------------------


// ------------------------------------------------------------------
function kasten_video($post, $float) {
  kasten_vorlage(' video', $post, $float, '');
}
// ------------------------------------------------------------------



// ------------------------------------------------------------------
function kasten_umfrage($post, $float) {
  kasten_vorlage(' umfrage', $post, $float, '');
}
// ------------------------------------------------------------------



// ------------------------------------------------------------------
function kasten_normal($post, $float) {
  kasten_vorlage('', $post, $float, '');
}
// ------------------------------------------------------------------



// ------------------------------------------------------------------
function kasten_vorlage($CSSAttrib, $post, $float, $Seitenform) {

  $layoutcss = '';
  if ($_GET['zweispaltig'] == '1') { $layoutcss = "2spalten"; }
  else { $layoutcss = "1spalte"; }
  if ($Seitenform == 'Einzelseite') { $layoutcss = "Einzelseite"; }


?>
  <div class="post post-intro" style="<?php echo $float; ?>" id="post-<?php the_ID(); ?>">

    <h2><a class="postHeading" href="<?php the_permalink() ?>" rel="bookmark" title="Permanentlink zu dem Beitrag <?php the_title(); ?>"><?php the_title(); ?></a></h2>


    <div class="eintrag<?php if ($CSSAttrib != '') : echo ' eintrag_' . $CSSAttrib; endif; ?>">
      <?php if ($CSSAttrib == ' kommentar') : ?>
      <div class="kommentarhinweis">Kommentar</div>
      <?php endif; ?>
      <?php the_content();
        if ($CSSAttrib == ' video') {
          $VBreite = 480;
          $VHoehe = 320;
          if (
            (get_post_custom_values('Breite') != '') &&
            (get_post_custom_values('Höhe') != '')
          ) {
            $VBreite = get_post_custom_values('Breite');
            $VBreite = $VBreite[0];
            $VHoehe = get_post_custom_values('Höhe');
            $VHoehe = $VHoehe[0];
          }
?>
      <video width="<?php echo $VBreite; ?>" height="<?php echo $VHoehe; ?>" style="width: 100%; max-width: <?php echo $VBreite*2; ?>px;" controls>
        <source src="<?php $a = get_post_custom_values('URL'); echo $a[0]; ?>.mp4" type="video/mp4" />
        <source src="<?php $a = get_post_custom_values('URL'); echo $a[0]; ?>.ogv" type="video/ogg" />
        <span style="color: #aa0000;">Das Video konnte leider nicht abgespielt werden. Dieser Browser unterstützt noch kein HTML5 oder die Funktion ist deaktiviert. Du kannst das Video in folgenden zwei Formaten herunterladen und dir offline anschauen: <a href="<?php $a = get_post_custom_values('URL'); echo $a[0]; ?>.ogv"><?php $a = get_post_custom_values('URL'); echo $a[0]; ?>.ogv</a> oder <a href="<?php $a = get_post_custom_values('URL'); echo $a[0]; ?>.mp4"><?php $a = get_post_custom_values('URL'); echo $a[0]; ?>.mp4</a>.</span>
      </video><br/><br/>
<?php
        } else if ($CSSAttrib == ' umfrage') :

  if (function_exists('vote_poll') && !in_pollarchive()):
    if (!(get_post_meta(get_the_ID(), 'KeineSchnellbewertung', true) == '1')) {
      $a = get_post_custom_values('URL');
      get_poll($a[0]);
    }
   endif;
endif; ?>
    </div>


    <div class="postmetadata<?php echo $CSSAttrib; ?>">


    <?php
        $postId = get_the_ID();

        /** Der Post mit der Id 3141 erhält keine Schnellbewertung, da es sich um einen Nachruf handelt. */
        if (function_exists('kk_star_ratings') && $postId != 3141) :
        echo kk_star_ratings($pid);
        endif;
    ?>

      <div class="media">
        <div class="media-left">
          <?php echo get_avatar($post->post_author); ?>
        </div>
        <div class="media-body">
          <h4 class="tag-list">
            <span class="label tag-label"><?php the_category('</span> <span class="label tag-label">'); ?></span>
            <span class="label tag-label"><?php the_tags('', '</span> <span class="label tag-label">', ''); ?></span>
          </h4>
          <p class="meta-data">
            Geschrieben am <?php the_time('j. F Y'); ?> von <?php GebeDenVollenAutorennamenAus(); ?>
            <small><?php edit_post_link('[bearbeiten]', '', ''); ?></small>.
            <?php if ($CSSAttrib == ' kommentar') : ?>
            <br/><em>Dieser Kommentar gibt nicht zwingend die Meinung der Fachschaft wieder.</em>
            <?php endif; ?>
          </p>
          <?php if (function_exists('wp2bb')) wp2bb(); ?>
        </div>
      </div>

    </div>
  </div>
<?php
}
// ------------------------------------------------------------------



?>
