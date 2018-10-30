<form class="form-inline" style="display: flex;" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group" style="margin-right: 1rem; flex: 1 0 0;">
    <?php $s = '' ?>
    <input class="form-control" style="width: 100%;" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="si" />
  </div>
  <input class="btn btn-default" type="submit" value="<?php _e('Search'); ?>" id="ss" />
</form>
