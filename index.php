<?php
/**
 * Default template
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header();?>

<?php get_template_part('block', 'page-banner');?>

<div id="content">

  <div class="content-main">
  <?php while (have_posts()): the_post();?>

	<?php get_template_part('content', 'index');?>

  <?php endwhile;?>

  <?php echo themenamePostNavLinks(); ?>

  </div>

  <div class="sidebar-right">
	  <?php get_sidebar('posts');?>
  </div>

</div><!-- #content -->

<?php get_footer();?>