<?php
/**
 * Block styles.
 *
 * @package gaspesie
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function gaspesie_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'gaspesie-flat-button',
			'label' => __( 'Flat button', 'gaspesie' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'gaspesie-shadow-button',
			'label' => __( 'Button with shadow', 'gaspesie' ),
		)
	);
}
add_action( 'init', 'gaspesie_register_block_styles' );
