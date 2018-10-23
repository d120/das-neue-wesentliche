  <!--</div></div>  mantel -->

  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <p><a href="https://www.fachschaft.informatik.tu-darmstadt.de">Startseite</a></p>
                  <p><a href="https://www.fachschaft.informatik.tu-darmstadt.de/kontakt">Kontakt</a></p>
                  <p><a href="https://www.fachschaft.informatik.tu-darmstadt.de/impressum">Impressum</a></p>
              </div>
              <div class="col-md-4">
                  <p><a href="https://www.openstreetmap.org/node/3893358897#map=17/49.87747639417648/8.654630184173584"><i class="fa fa-map-marker"></i>Hochschulstraße 10, 64289 Darmstadt</a></p>
                  <p><a href="tel:+49615116-25522"><i class="fa fa-phone"></i>+49 6151 16-25522</a></p>
                  <p><a href="mailto:wir@d120.de"><i class="fa fa-envelope"></i>wir@d120.de</a></p>
              </div>
              <div class="col-md-1">
                  <p><a href="https://www.facebook.com/d120.de" aria-label="Facebook"><i class="fa fa-fw fa-facebook" aria-hidden="true" title="Facebook"></i></a></p>
                  <p><a href="https://twitter.com/d120de" aria-label="Twitter"><i class="fa fa-fw fa-twitter" aria-hidden="true" title="Twitter"></i></a></p>
                  <p><a href="https://github.com/d120" aria-label="Github"><i class="fa fa-fw fa-github" aria-hidden="true" title="Github"></i></a></p>
              </div>
              <div class="col-md-4 bottom-align-text" id="copyright">
                  <p>&copy; Fachschaft Informatik TU Darmstadt</p>

              </div>
          </div>
      </div>
  </footer>

<!-- Das steht hier, weil WP-Polls 2.50 über genau diese Methode
     seinen Java-Script-Code einfügt. -->
    <?php wp_footer(); ?>

    <?php $base = 'http://localhost:8080/djangocms' ?>
    <?php /*$base = 'https://www.fachschaft.informatik.tu-darmstadt.de/'*/ ?>
    <script src="<?php echo $base; ?>/static/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $base; ?>/static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    <?php
    // Diese Zeile brauchen wir, da ansonsten https für die Ajax-Requests im WP-Polls-Plugin benutzt werden
    ?>
    function wppoll_fix_https() {
     pollsL10n.ajax_url=pollsL10n.ajax_url.replace('https://','http://');
    }
    </script>
  </body>
</html>
