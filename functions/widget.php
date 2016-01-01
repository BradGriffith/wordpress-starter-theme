<?php
/**
 * Child Pages Widget
 */

class Theme_Name_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array(
			'class_name' => 'themename_widget',
			'description' => 'Description of this widget',
		);

		parent::__construct('themename_widget', 'Theme_Name Widget', $widget_ops);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget($args, $instance) {
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form($instance) {
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update($new_instance, $old_instance) {
	}
}

//add_action( 'widgets_init', function(){ register_widget( 'Theme_Name_Widget' ); });