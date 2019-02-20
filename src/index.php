<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

get_header();
?>
<?php get_sidebar(); ?>
  <div class="column is-9">
    <?php bulmawp_breadcrumbs(); ?>
    <div class="content">
      <?php
      if( have_posts() ) : while( have_posts() ) : the_post();
        get_template_part( 'content' );
      endwhile; endif;
      ?>
    </div>
    <?php bulmawp_pagination(); ?>
  </div>

<?php get_footer(); ?>
