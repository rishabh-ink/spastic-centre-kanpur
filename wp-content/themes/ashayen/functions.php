<?php
/**
 * ashayen functions and definitions
 *
 * @package ashayen
 */
?>

<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
  $content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'ashayen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ashayen_setup() {

  /**
   * Custom template tags for this theme.
   */
  require( get_template_directory() . '/inc/template-tags.php' );

  /**
   * Custom functions that act independently of the theme templates
   */
  require( get_template_directory() . '/inc/extras.php' );

  /**
   * Customizer additions
   */
  require( get_template_directory() . '/inc/customizer.php' );

  /**
   * Make theme available for translation
   * Translations can be filed in the /languages/ directory
   * If you're building a theme based on ashayen, use a find and replace
   * to change 'ashayen' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'ashayen', get_template_directory() . '/languages' );

  /**
   * Add default posts and comments RSS feed links to head
   */
  add_theme_support( 'automatic-feed-links' );

  /**
   * Enable support for Post Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  /**
   * This theme uses wp_nav_menu() in one location.
   */
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ashayen' ),
  ) );

  /**
   * Enable support for Post Formats
   */
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // ashayen_setup
add_action( 'after_setup_theme', 'ashayen_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function ashayen_register_custom_background() {
  $args = array(
    'default-color' => 'ffffff',
    'default-image' => '',
  );

  $args = apply_filters( 'ashayen_custom_background_args', $args );

  if ( function_exists( 'wp_get_theme' ) ) {
    add_theme_support( 'custom-background', $args );
  } else {
    define( 'BACKGROUND_COLOR', $args['default-color'] );
    if ( ! empty( $args['default-image'] ) )
      define( 'BACKGROUND_IMAGE', $args['default-image'] );
    add_custom_background();
  }
}
add_action( 'after_setup_theme', 'ashayen_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ashayen_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'ashayen' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
}
add_action( 'widgets_init', 'ashayen_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function ashayen_scripts() {
  wp_enqueue_style( 'ashayen-style', get_stylesheet_uri() );

  wp_enqueue_script( 'ashayen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

  wp_enqueue_script( 'ashayen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  if ( is_singular() && wp_attachment_is_image() ) {
    wp_enqueue_script( 'ashayen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
  }
}
add_action( 'wp_enqueue_scripts', 'ashayen_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
?>









<?php
remove_action('wp_head', '_admin_bar_bump_cb');

if(function_exists("register_nav_menus")) {
  register_nav_menus(
    array(
      "header-menu" => "Header menu",
      "footer-menu" => "Footer menu",
      "social-media-menu" => "Social media menu"
    )
  );
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