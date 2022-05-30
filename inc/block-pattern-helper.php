<?php

/**
 * Block pattern helper
 *
 * @package gaspesie
 * @since 0.1
 */

/**
 * Display a link to the privacy policy page, if one is published.

 * @since 0.1
 *
 * @return string Link to the privacy policy page, if one is published.
 */
function gaspesie_privacy()
{
	if (get_the_privacy_policy_link()) {
		return '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
	}
}
