<?php
/**
 * Display a banner at the top of interior pages (when available)
 *
 * @package %Theme_Name%
 * @author %Author%
 */

if (is_home() || is_single()) {
	$headline_position = 'center center';
	$headline = get_the_title();

	if (is_home() || empty($headline)) {
		$headline = 'Blog';
	}
} else if (is_post_type_archive('my_custom_post_type')) {
	$headline = 'Posts Archive';
} else if (is_archive()) {
	if (is_day()) {
		$headline = sprintf(__('Daily Archives: %s', '%Text_Domain%'), get_the_date());
	} elseif (is_month()) {
		$headline = sprintf(__('Monthly Archives: %s', '%Text_Domain%'), get_the_date('F Y'));
	} elseif (is_year()) {
		$headline = sprintf(__('Yearly Archives: %s', '%Text_Domain%'), get_the_date('Y'));
	} else {
		$headline = __('Blog Archives', '%Text_Domain%');
	}
} else if (is_search() || is_404()) {
	$headline = (is_search() ? sprintf(__('Search results for "%s"', '%Text_Domain%'), get_search_query()) : (is_404() ? __('Page Not Found', '%Text_Domain%') : 'Archive'));
} else {
	$headline = get_the_title();
}

// Set a default background image
if (empty($headline_background)) {
	$headline_background = get_the_thumbnail(get_the_ID(), 'page_banner');
}

// Set a default headline
if (empty($headline)) {
	$headline = '%Theme_Name%';
}

?>

<div class="page-top-wrapper">
  <div class="page-top-banner">
    <div class="background" style="background-image: url(<?php echo $headline_background; ?>);
      <?php if (!empty($headline_position)): ?>background-position: <?php echo $headline_position;endif; ?>">
    </div>
    <div class="container">
      <div class="page-top">
        <h1><?php echo $headline; ?></h1>
      </div>
    </div>
  </div>
</div>