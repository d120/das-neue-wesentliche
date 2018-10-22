<?php if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Bitte diese Seite nicht direkt aufrufen. Danke!');
  if (!empty($post->post_password)) { 
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  
	  ?>
	  <p class="nocomments">Die Kommentare sind durch das Passwort gesch�tzt.<p>
	  <?php return;
    }
  }
  $oddcomment = 'alt';
?>

<?php if ($comments) : ?>
  <h3 id="comments"><?php comments_number('Keine Reaktion', 'Eine Reaktion', '% Reaktionen' );?> zu &#8220;<?php the_title(); ?>&#8221;</h3>
  <ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>
   	  <li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
	    <cite><?php comment_author_link() ?></cite> <small class="commentmetadata">schrieb <a href="#comment-<?php comment_ID() ?>" title="#comment-<?php comment_ID() ?>">am <?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr:</a> <?php edit_comment_link('Bearbeiten','<strong>&#124; </strong>',''); ?></small>

		<?php if ($comment->comment_approved == '0') : ?>
		<br /><br /><strong>Achtung: Der Kommentar muss erst noch freigegeben werden.</strong>
		<?php endif; ?>
		<br />
		<?php comment_text() ?>
  	  </li>
      <?php if ('alt' == $oddcomment) $oddcomment = ''; else $oddcomment = 'alt';
	  ?>
	<?php endforeach; ?>
  </ol>
  <?php else : ?>
    <?php if ('open' == $post->comment_status) : ?>
	<?php else : ?>
	  <p class="nocomments">Kommentarfunktion ist deaktiviert</p>
	<?php endif; ?>
  <?php endif; ?>
  <?php if ('open' == $post->comment_status) : ?>
    <h3 id="respond">Einen Kommentar schreiben</h3>
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
      <p>Du musst <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">angemeldet</a> sein, um kommentieren zu können.</p>
    <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( $user_ID ) : ?>
          <p>Angemeldet als: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="von diesem Account abmelden">Abmelden &raquo;</a></p>
        <?php else : ?>
          <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
          <label for="author">Name <?php if ($req) echo "(erforderlich)"; ?></label></p>
          <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
          <label for="email">eMail <?php if ($req) echo "(erforderlich)"; ?> (wird nicht veröffentlicht)</label></p>
          <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
          <label for="url">Webseite</label></p>
        <?php endif; ?>
        <p><textarea name="comment" id="comment" cols="52" rows="10" tabindex="4"></textarea></p>
        <p><input name="submit" type="submit" id="submit" tabindex="5" value="senden" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
        <?php do_action('comment_form', $post->ID); ?>
      </form>
    <?php endif; ?>
  <?php endif; ?>
