<?php
  if(function_exists("register_nav_menus")) {
    register_nav_menus(array("primary" => "Header navigation"));
  }

  if(function_exists("add_theme_support")) {
    add_theme_support("post-thumbnails");
  }

  if(function_exists("add_image_size")) {
    add_image_size("featured", 640, 480, true);
    add_image_size("post-thumb", 320, 240, true);
  }

  // Global custom fields
  // Courtesy: http://digwp.com/2009/09/global-custom-fields-take-two
  add_action('admin_menu', 'add_global_website_settings_ui');

  function add_global_website_settings_ui() {
    add_options_page('Global website settings', 'Global website settings', '8', 'functions', 'edit_global_website_settings');
  }

  function edit_global_website_settings() {
?>
  <div class="wrap">
    <h2>Global website settings</h2>
    <form method="post" action="options.php">
      <?php wp_nonce_field('update-options') ?>

      <fieldset>
        <h3><legend>Header section</legend></h3>
        <div>
          <strong><label for="gcf-tertiary-title">Tertiary title:</label></strong><br />
          <input type="text" size="64" name="gcf-tertiary-title" value="<?php echo get_option('gcf-tertiary-title'); ?>" />
          <small>The 3rd level title for the website (appears below the description).</small>
        </div>
      </fieldset>

      <fieldset>
        <h3><legend>Footer section</legend></h3>
        <div>
          <strong><label for="gcf-copyright-notice">Copyright notice:</label></strong><br />
          <input type="text" size="64" name="gcf-copyright-notice" value="<?php echo get_option('gcf-copyright-notice'); ?>" />
          <small>The copyright notice appears in the footer.</small>
        </div>
      </fieldset>

      <fieldset>
        <h3><legend>Address</legend></h3>
        <div>
          <strong><label for="gcf-address-title">Title:</label></strong><br />
          <input type="text" size="64" name="gcf-address-title" value="<?php echo get_option('gcf-address-title'); ?>" />
          <small>Your name for addressing.</small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-subtitle">Sub-title:</label></strong><br />
          <input type="text" size="64" name="gcf-address-subtitle" value="<?php echo get_option('gcf-address-subtitle'); ?>" />
          <small>Your secondary name for addressing.</small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-line1">Line 1:</label></strong><br />
          <input type="text" size="64" name="gcf-address-line1" value="<?php echo get_option('gcf-address-line1'); ?>" />
          <small>Door number, street name, cross number etc.</small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-line2">Line 2:</label></strong><br />
          <input type="text" size="64" name="gcf-address-line2" value="<?php echo get_option('gcf-address-line2'); ?>" />
          <small>Neighbourhood, area name etc.</small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-city">City:</label></strong><br />
          <input type="text" size="64" name="gcf-address-city" value="<?php echo get_option('gcf-address-city'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-state">State:</label></strong><br />
          <input type="text" size="64" name="gcf-address-state" value="<?php echo get_option('gcf-address-state'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-country">Country:</label></strong><br />
          <input type="text" size="64" name="gcf-address-country" value="<?php echo get_option('gcf-address-country'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-postal-code">Postal code:</label></strong><br />
          <input type="text" size="64" name="gcf-address-postal-code" value="<?php echo get_option('gcf-address-postal-code'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-phone">Phone number:</label></strong><br />
          <input type="text" size="64" name="gcf-address-phone" value="<?php echo get_option('gcf-address-phone'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-phone2">Secondary phone number:</label></strong><br />
          <input type="text" size="64" name="gcf-address-phone2" value="<?php echo get_option('gcf-address-phone2'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-fax">Fax number:</label></strong><br />
          <input type="text" size="64" name="gcf-address-fax" value="<?php echo get_option('gcf-address-fax'); ?>" />
          <small></small>
        </div>

        <br />

        <div>
          <strong><label for="gcf-address-email">Email:</label></strong><br />
          <input type="email" size="64" name="gcf-address-email" value="<?php echo get_option('gcf-address-email'); ?>" />
          <small></small>
        </div>

      </fieldset>

      <p>Click the <strong>Save</strong> button below when you are done filling up the above form.</p>

      <div>
        <input type="submit" name="Submit" value="Save" />
      </div>
      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="page_options" value="gcf-tertiary-title,gcf-copyright-notice,gcf-address-title,gcf-address-subtitle,gcf-address-line1,gcf-address-line2,gcf-address-city,gcf-address-state,gcf-address-country,gcf-address-postal-code,gcf-address-phone,gcf-address-phone2,gcf-address-fax,gcf-address-email" />
    </form>
  </div>
<?php
  }
?>