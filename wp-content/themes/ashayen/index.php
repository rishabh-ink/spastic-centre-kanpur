<?php get_header(); ?>

<?php
/*
<section class="featured-posts">
  <ul>
    <?php
      $featured = array(
        "category_name" => "Featured",
        "posts_per_page" => 3
      );

      $featuredPosts = new WP_Query($featured);

      while ($featuredPosts -> have_posts()):
        $featuredPosts -> the_post();
    ?>
        <li class="featured-post">
          <?php the_post_thumbnail("featured"); ?>
          <div class="caption">
            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
            <?php the_excerpt(); ?>
          </div>
        </li>
    <?php
      endwhile;
    ?>
  </ul>
</section>
*/
?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>