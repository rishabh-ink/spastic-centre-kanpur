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
      <div class="address">
        <p>
          <span class="title"><?php echo get_option('gcf-address-title'); ?></span><br />
          <span class="subtitle"><?php echo get_option('gcf-address-subtitle'); ?></span><br />
          <span class="line1"><?php echo get_option('gcf-address-line1'); ?></span>, <span class="line2"><?php echo get_option('gcf-address-line2'); ?></span><br />
          <span class="city"><?php echo get_option('gcf-address-city'); ?></span>, <span class="state"><?php echo get_option('gcf-address-state'); ?></span>
          <span class="country"><?php echo get_option('gcf-address-country'); ?></span> <span class="postal-code"><?php echo get_option('gcf-address-postal-code'); ?></span><br />
          <span class="phone"><?php echo get_option('gcf-address-phone'); ?></span><br />
          <span class="phone2"><?php echo get_option('gcf-address-phone2'); ?></span><br />
          <span class="fax"><?php echo get_option('gcf-address-fax'); ?></span><br />
          <span class="email"><?php echo get_option('gcf-address-email'); ?></span><br />

        </p>
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
