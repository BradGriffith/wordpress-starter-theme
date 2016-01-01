<?php
/**
 * Post archive template
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header();?>

<?php get_template_part( 'block', 'page-banner' ); ?>

<div id="content" class="container">

  <div class="main-content">

    <?php while (have_posts()): the_post();?>

      <?php get_template_part('content', 'archive');?>

    <?php endwhile;?>

    <?php echo themenamePostNavLinks(); ?>

  </div>
  <div class="sidebar-right">
    <?php get_sidebar('posts');?>
  </div>

</div><!-- #content -->

<?php get_footer();?>