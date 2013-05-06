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
          $featuredPosts = new WP_Query(array(
            "category_name" => "Featured",
            "posts_per_page" => 3
          ));

          while($featuredPosts -> have_posts()):
            $featuredPosts -> the_post();
        ?>

          <li class="featured-post">
            <?php the_post_thumbnail("full"); ?>

            <div class="orbit-caption">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </li>

        <?php
          endwhile;
        ?>
      </ul>

    </div><!-- .content-area -->
  </div><!-- .site-content -->

<?php get_footer(); ?>