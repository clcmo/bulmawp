<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

get_header();
?>
  <section class="section">
    <?php
    bulmawp_breadcrumbs();
    if( have_posts() ) : while( have_posts() ) : the_post();
    ?>
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="content">
        <?php the_content(); ?>
      </div>
      <?php
      comments_template();
    endwhile; endif;
    ?>
  </section>
<?php get_footer(); ?>
