<?php get_header(); ?>


<div style="height: 1024px;"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, deleniti accusantium aliquam id dolores illum hic esse cum! Minima, illum quas accusamus alias consequuntur laborum beatae reprehenderit magni autem magnam!</p></div>

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