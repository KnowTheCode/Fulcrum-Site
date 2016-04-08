<?php
/**
 * Post structures
 *
 * @package     Fulcrum_Site\Structure
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Fulcrum_Site\Structure;

add_action( 'genesis_meta', __NAMESPACE__ . '\adjust_page_header' );
/**
 * Adjust page header content.
 *
 * @since 1.0.0
 *
 * @return void
 */
function adjust_page_header() {
	if ( ! is_page() ) {
		return;
	}

	add_action( 'genesis_entry_header', __NAMESPACE__ . '\render_page_header_subtitle', 11 );
	add_action( 'genesis_entry_header', __NAMESPACE__ . '\render_page_header_content', 12 );
	remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
}

/**
 * Render page subtitle, if one exists.
 *
 * @since 1.0.0
 *
 * @return void
 */
function render_page_header_subtitle() {
	$subtitle = genesis_get_custom_field( '_fulcrum_header_subtitle' );
	if ( ! $subtitle ) {
		return;
	}

	esc_html_e( $subtitle );
}

/**
 * Render page header content.
 *
 * @since 1.0.0
 *
 * @return void
 */
function render_page_header_content() {
	$content = genesis_get_custom_field( '_fulcrum_header_content' );
	if ( ! $content ) {
		return;
	}

	$content = do_shortcode( $content );
	$content = wp_kses_post ( $content );

	echo wpautop( $content );
}