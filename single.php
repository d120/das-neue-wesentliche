<?php get_header();
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
    <?php if (have_posts()) : while (have_posts()) : the_post();
      $float = 'float: left;';

      //kasten_vorlage('', $post, $float, 'Einzelseite');

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

?>
      <nav aria-label="navigation">
        <ul class="pager">
          <li class="previous"><?php previous_post_link('%link', '&larr; %title') ?></li>
          <li class="next"><?php next_post_link('%link', '%title &rarr;') ?></li>
        </ul>
      </nav>
      <?php endwhile; else: ?>
      <p>Es gibt leider keine Beitr&auml;ge, die deinen Kriterien entsprechen.</p>
      <?php endif; ?>
    </div>
    <div class="col-lg-3">
      <?php include 'right.php'; ?>
    </div>
  </div>
</div>
<?php /* get_footer(); */ ?>
<?php include 'footer.php'; ?>
