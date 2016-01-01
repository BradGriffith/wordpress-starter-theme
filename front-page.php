<?php
/**
 * Homepage template
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header();?>

<div id="homepage">

    <!-- Hero -->
    <div class="hero-wrapper">
        <div class="hero">
          <?php get_template_part('block', 'home-hero');?>
        </div>
    </div>


    <!-- Main Body -->
    <div class="mainbody">

        <?php while (have_posts()): the_post();?>

        <?php the_content();?>

        <?php endwhile;?>

    </div>


</div><!-- #homepage -->

<?php get_footer();?>