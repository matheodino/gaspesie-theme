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

// Styles loading.
require_once get_theme_file_path('inc/theme-styles.php');

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


/**
 * Import Google Fonts by head tag.
 */
function google_fonts_import()
{
?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<?php
}
add_action('wp_head', 'google_fonts_import');