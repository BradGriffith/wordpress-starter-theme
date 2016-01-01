<?php
/**
 * Default page template
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header();?>

<?php while (have_posts()): the_post();?>

  <?php get_template_part( 'block', 'page-banner' ); ?>
    
	<div id="content" class="container">

    <div class="content-main">
      <?php the_content();?>
    </div>

    <div class="sidebar-right">
      <?php get_sidebar();?>
    </div>

  </div>

<?php endwhile;?>

<?php get_footer();?>