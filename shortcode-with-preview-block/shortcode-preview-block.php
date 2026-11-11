<?php
/**
 * Plugin Name: Shortcode Preview Block
 * Plugin URI: https://wordpress.org/plugins/shortcode-with-preview-block/
 * Description: Shows a preview of any shortcode in the editor. It renders the shortcode on the editor side so you do not need to view the front end to see the result.
 * Version: 1.1.0
 * Requires at least: 6.3
 * Requires PHP: 7.2
 * Author: Ronak Ganatra
 * Author URI: https://profiles.wordpress.org/ronakganatra/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: shortcode-with-preview-block
 *
 * @package Shortcode_Preview_Block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'swp_rnk_init_callback' );

/**
 * Register the dynamic shortcode preview block.
 */
function swp_rnk_init_callback() {
	register_block_type(
		__DIR__ . '/block.json',
		array(
			'render_callback' => 'swp_rnk_shortcode_preview_callback',
		)
	);
}

/**
 * Render the shortcode on the front end and in the editor preview.
 *
 * @param array $atts Block attributes.
 * @return string
 */
function swp_rnk_shortcode_preview_callback( $atts ) {
	$shortcode = isset( $atts['shortcodeText'] ) ? $atts['shortcodeText'] : '';
	$output    = '';

	if ( '' !== $shortcode ) {
		$output = do_shortcode( $shortcode );
	}

	return sprintf(
		'<div %s>%s</div>',
		get_block_wrapper_attributes(
			array(
				'class' => 'swp-rnk-preview',
			)
		),
		$output
	);
}
