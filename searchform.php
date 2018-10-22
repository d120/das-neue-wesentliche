<form class="form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input class="form-control" type="text" value="<?php echo wp_specialchars($s, 1); ?>" size="18" name="s" id="si" />
<input class="btn btn-default" type="submit" value="<?php _e('Search'); ?>" id="ss" />
</form>
