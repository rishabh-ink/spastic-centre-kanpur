<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ashayen
 */
?>

<?php get_header(); ?>

  <div class="content-area">
    <div class="site-content" role="main">

      <ul data-orbit="data-orbit" class="featured-posts">

        <?php
          $featured_posts = new WP_Query(array(
            "category_name" => "Featured",
            "posts_per_page" => 3
          ));

          while($featured_posts -> have_posts()):
            $featured_posts -> the_post();
        ?>

          <li class="featured-post">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(array('auto', 320)); ?>

              <div class="orbit-caption">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field("Subtitle"); ?></p>
              </div>
            </a>
          </li>

        <?php
          endwhile;
        ?>
      </ul>

    </div><!-- .content-area -->
  </div><!-- .site-content -->

<?php get_footer(); ?>