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
				<?php get_sidebar(); ?>
			</div>
			<div id="content" class="col-lg-9 col-md-8 col-xs-12 col-sm-7 pull-right">
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




	      <div class="navigation">
			<div class="dlft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="drgt"><?php next_post_link('%link &raquo;') ?></div>
		  </div>
	    <?php endwhile; else: ?>
		  <p>Es gibt leider keine Beitr&auml;ge, die deinen Kriterien entsprechen.</p>
	    <?php endif; ?>
	  </div>
         </div></div>
<?php /* get_footer(); */ ?>
<?php include 'footer.php'; ?>
