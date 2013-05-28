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

      <?php while (have_posts()) : the_post(); ?>

        <div class="page-heading">
          <h3 class="<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></h3>
        </div>

        <div class="page-content">
          <?php the_content(); ?>
        </div>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template();
        ?>

      <?php endwhile; // end of the loop. ?>

    </div><!-- .content-area -->
  </div><!-- .site-content -->

<?php get_footer(); ?>
