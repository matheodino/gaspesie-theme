<?php

/**
 * Enqueue the CSS files.
 *
 * @since 0.1
 *
 * @return void
 */
function gaspesie_styles()
{
	// Load general style.
	wp_enqueue_style(
		'gaspesie-style',
		get_stylesheet_uri(),
		[],
		GASPESIE_VERSION
	);
	add_editor_style('style.css');

	// Load shared style (front and editor).
	wp_enqueue_style(
		'gaspesie-shared-styles',
		get_theme_file_uri('assets/css/style-shared.css'),
		[],
		GASPESIE_VERSION
	);
	add_editor_style('./assets/css/style-shared.css');

	// Load additional block styles.
	$styled_blocks = [
		'button',
		'file',
		'quote',
		'search',
		'social-links',
		'post-excerpt',
		'post-featured-image',
		'html',
		'query',
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

	// Load additional part styles.
	$styled_parts = [
		'header',
		'footer',
	];
	foreach ($styled_parts as $part_name) {

		// Load on the front.
		wp_enqueue_style(
			"gaspesie-part-$part_name",
			get_theme_file_uri("assets/css/parts/$part_name.css"),
			[],
			GASPESIE_VERSION
		);
	}
}
add_action('init', 'gaspesie_styles');
