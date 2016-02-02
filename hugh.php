<?php

/*
 * Plugin Name: Hugh
 * Plugin URI:  https://wordpress.org/plugins/hugh/
 * Description: Democratize coloring.
 * Version:     0.1.0
 * Author:      Michael Arestad and George Stephanis
 * Author URI:  http://blog.michaelarestad.com
 * Text Domain: hugh
 * Domain Path: /languages
 */

class Hugh { // Hugh is classy as fuck.

	public static function add_hooks() {
		add_action( 'widgets_init', array( __CLASS__, 'widgets_init' ) );
	}

	public static function widgets_init() {
		register_widget( 'Hugh_Widget' );
	}
}

Hugh::add_hooks();

class Hugh_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array(
			'class_name'  => 'hugh_widget',
			'description' => __( 'Hugh is classy.', 'hugh' ),
		);
		parent::__construct( 'hugh_widget', 'Hugh Widget', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		wp_enqueue_style( 'hugh', plugins_url( 'hugh/hugh.css' ) );
		echo $args['before_widget'];
		?>
		<div class="hugh__colorways">
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			<a href="#" aria-label="recently used color" class="hugh__colorway">
				<div class="hugh__colorway-accent"></div>
			</a>
			
		</div>
		<?php
		echo $args['after_widget'];
	}

}
