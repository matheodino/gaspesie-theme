<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gaspesie
 * @since 0.1
 */

/**
 * The theme version.
 *
 * @since 0.1
 */
define('GASPESIE_VERSION', wp_get_theme()->get('Version'));

/**
 * Add theme support.
 */
function gaspesie_setup()
{
	add_theme_support('wp-block-styles');
	add_editor_style('./assets/css/style-shared.css');

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [
		'button',
		'file',
		'quote',
		'search',
		'social-links',
		'post-excerpt',
		'post-featured-image',
	];
	foreach ($styled_blocks as $block_name) {
		$args = array(
			'handle' => "gaspesie-$block_name",
			'src'    => get_theme_file_uri("assets/css/blocks/$block_name.css"),
			'path'   => get_theme_file_path("assets/css/blocks/$block_name.css"),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style("core/$block_name", $args);
	}
}
add_action('after_setup_theme', 'gaspesie_setup');

/**
 * Enqueue the CSS files.
 *
 * @since 0.1
 *
 * @return void
 */
function gaspesie_styles()
{
	wp_enqueue_style(
		'gaspesie-style',
		get_stylesheet_uri(),
		[],
		GASPESIE_VERSION
	);
	wp_enqueue_style(
		'gaspesie-shared-styles',
		get_theme_file_uri('assets/css/style-shared.css'),
		[],
		GASPESIE_VERSION
	);
	wp_enqueue_style(
		'gaspesie-block-styles',
		get_theme_file_uri('assets/css/block-styles.css'),
		[],
		GASPESIE_VERSION
	);
}
add_action('wp_enqueue_scripts', 'gaspesie_styles');

// Block style examples.
require_once get_theme_file_path('inc/register-block-styles.php');

// Block pattern helper for the privacy policy.
require_once get_theme_file_path('inc/block-pattern-helper.php');

/**
 * Disable emojis rendering.
 * 
 * @link https://smartwp.com/disable-emojis-wordpress/
 */
add_action('init', 'disable_emojis');

function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

// Register custom Post Types
require_once get_theme_file_path('inc/custom-post-types.php');

// Register custom Taxonomies
require_once get_theme_file_path('inc/custom-taxonomies.php');