<?php
/**
 * Display the author avatar, information, Twitter link, etc.
 *
 * @package %Theme_Name%
 * @author %Author%
 */
?>

<p class="post-meta">
  <?php
    $author_id = get_the_author_meta( 'ID' );

    // get_avatar isn't working, so
    $post_date = sprintf(
      ' <time title="%s" class="post-date">%s</time>',
      get_the_time( 'c' ),
      sprintf( __( '%s', '%Text_Domain%' ), date('F j, Y', get_the_time( 'U' )) )
    );

    $categories = '';
    $categories_list = get_the_category_list( ', ' );
    $categories = sprintf(
      '<span class="post-categories">%s</span>',
      $categories_list
    );

    if(is_single()) {
      printf(
        __( '%s<span class="posted-by">%s by %s <a href="%s" rel="author">%s</a></span>', '%Text_Domain%' ),
        $categories,
        $post_date,
        get_author_posts_url( $author_id ),
        get_the_author()
      );
    } else {
      printf(
        __( '<span class="posted-by">%s by <a href="%s" rel="author">%s</a></span>', '%Text_Domain%' ),
        $post_date,
        get_author_posts_url( $author_id ),
        get_the_author()
      );
    }
  ?>
</p>