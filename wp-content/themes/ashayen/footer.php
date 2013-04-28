    <footer>
    <div class="legal-info">
      <div class="footer-menu-wrap">
        <?php
          wp_nav_menu(array(
            "container_class" => "footer-menu",
            "container" => "nav",
            "theme_location" => "footer-menu"
          ));
        ?>
      </div>
      <p><small>&copy; <?php echo get_option('gcf-copyright-notice'); ?></small></p>
    </div>

    <div class="contact-info">
      <div class="social-media-wrap">
        <?php
          wp_nav_menu(array(
            "container_class" => "social-media-menu",
            "container" => "nav",
            "theme_location" => "social-media-menu"
          ));
        ?>
      </div>
      <div class="address-wrap">

      </div>
    </div>
    </footer>

  </div>
  <script src="<?php bloginfo("template_url"); ?>/js/vendor/jquery-1.9.1.min.js"></script>
  <script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><\/script>')</script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
