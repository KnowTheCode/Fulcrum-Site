<?php
/**
 * Remove Emojis Support from the site.
 *
 * @package     Fulcrum_Site\Foundation
 * @since       1.0.5
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Fulcrum_Site\Foundation;

add_action( 'init', __NAMESPACE__ . '\remove_emojis_support_from_the_site' );
/**
 * Remove Emojis support from the site, by removing all of the callbacks that load it.
 *
 * @since 1.0.5
 *
 * @return void
 */
function remove_emojis_support_from_the_site() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	add_filter( 'tiny_mce_plugins', __NAMESPACE__ . '\remove_emojis_from_tinymce' );
}

/**
 * Remove the wpemoji from the tinyMCE plugins.
 *
 * @since 1.0.5
 *
 * @param mixed $plugins
 *
 * @return array
 */
function remove_emojis_from_tinymce( $plugins ) {
	if ( ! is_array( $plugins ) ) {
		return array();
	}

	return array_diff( $plugins, array( 'wpemoji' ) );
}
