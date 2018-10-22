<?php get_header(); ?>
  <div class="container">
    <div id="main" class="row">
	     <div class="col-lg-3 col-md-4 col-sm-5">
         <?php include 'left.php'; ?>
         <?php get_sidebar(); ?>
       </div>
       <div id="content" class="col-lg-9 col-md-8 col-xs-12 col-sm-7 pull-right">
 	    <?php if (have_posts()) : ?>
		  <?php while (have_posts()) : the_post(); ?>
			<div class="beitrag beitrag1spalte" id="post-<?php the_ID(); ?>">
			  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			  <div class="eintrag">
				<?php the_content('Den ganzen Beitrag lesen &#187;'); ?>
			  </div>
			</div>
	 	  <?php endwhile; ?>
		<?php else : ?>
          <h2>Nicht gefunden</h2>
		  <p>Sorry, aber Du suchst gerade nach etwas, was hier nicht ist.</p>
		  <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
 	  </div>
         </div></div>
<?php /* get_footer(); */ ?>
<?php include 'footer.php'; ?>
