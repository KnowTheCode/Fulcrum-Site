<?php
/**
 * Membership Metabox
 *
 * @package     Library\Admin\Metaboxes
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knownthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Library\Admin\Metaboxes;

add_action( 'admin_menu', __NAMESPACE__ . '\add_page_header_metabox' );
/**
 * Register a new meta box to the post or page edit screen.
 *
 * @since 1.0.0
 *
 * @retun void
 */
function add_page_header_metabox() {
	add_meta_box(
		'ktc_page_header_metabox',
		__( 'Page Header', 'fulcrum-site' ),
		__NAMESPACE__ . '\page_header_metabox',
		'page',
		'normal',
		'high'
	);
}

/**
 * Callback for Library Options Metabox
 *
 * @since 1.0.0
 *
 * @uses genesis_get_custom_field() Get custom field value.
 */
function page_header_metabox() {

	wp_nonce_field( 'ktc_page_header_save', 'ktc_page_header_nonce' );

	include( 'views/header.php' );
}

add_action( 'save_post', __NAMESPACE__ . '\page_header_save', 1, 2 );
/**
 * Save the page header settings when we save a page.
 *
 * @since 1.0.0
 *
 * @uses genesis_save_custom_fields() Perform checks and saves post meta / custom field data to a post or page.
 *
 * @param integer $post_id Post ID.
 * @param stdClass $post Post object.
 *
 * @return mixed Returns post id if permissions incorrect, null if doing autosave, ajax or future post, false if update
 *               or delete failed, and true on success.
 */
function page_header_save( $post_id, $post ) {
	if ( ! isset( $_POST['ktc_page_header'] ) ) {
		return;
	}

	$defaults = array(
		'_fulcrum_header_content' => '',
		'_fulcrum_subtitle'       => '',
	);

	$data = wp_parse_args( $_POST['ktc_page_header'], $defaults );

	foreach ( (array) $data as $key => $value ) {
		$data[ $key ] = $key == '_fulcrum_header_content' ? $value : strip_tags( $value );
	}

	genesis_save_custom_fields( $data, 'ktc_page_header_save', 'ktc_page_header_nonce', $post );
}
