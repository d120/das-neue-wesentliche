<?php
  get_header();

  // Enthält diverse Hilfsfunktionen.
  include 'util.php';

  // Enthält Ausgabefunktionen für die Inhaltskästen.
  include 'kaesten.php';
?>
    <div class="container">
      <div id="main" class="row">
        <div class="col-lg-3 col-md-4 col-sm-5">
          <?php include 'left.php'; ?>
        </div>
        <div id="content" class="col-lg-6 col-md-8 col-xs-12 col-sm-7">

  <?php if (have_posts()) :
    $float = 'float: left;';

    while (have_posts()) : the_post();

      // Erzeuge den passenden Inhaltskarten für diesen Beitrag.
      if (istVerweis()) :
        kasten_verweis($post, $float);

      elseif (istPhotobeitrag()) :
        kasten_photo($post, $float);

      elseif (istKommentar()) :
        kasten_kommentar($post, $float);

      elseif (istVideo()) :
        kasten_video($post, $float);

      elseif (istUmfrage()) :
        kasten_umfrage($post, $float);
      else :
        kasten_normal($post, $float);
      endif;

    endwhile; ?>

      <ul class="pager">
        <li class="dlft"><?php previous_posts_link('&laquo; spätere Beiträge') ?></li>
        <li class="drgt"><?php next_posts_link('frühere Beiträge &raquo;') ?></li>
      </ul>
      <?php else : ?>
      <h2 class="center">Nicht gefunden.</h2>
      <p class="center">Es hat keine Treffer gegeben.</p>
      <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-3">
        <?php include 'right.php'; ?>
      </div>
    </div>
  </div>
<?php remove_action('get_footer', 'avatar_footer'); ?>
<?php include 'footer.php'; ?>
