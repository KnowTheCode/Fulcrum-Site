<?php
/**
 * Grid structures
 *
 * @package     Fulcrum_Site\Structure
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Fulcrum_Site\Structure;

add_action( 'fulcrum_grid', __NAMESPACE__ . '\do_grid' );
/**
 * Do the Grid structure.
 *
 * @since 1.0.0
 *
 * @return void
 */
function do_grid() {
	add_action( 'genesis_meta', __NAMESPACE__ . '\unregister_events' );

	add_filter( 'body_class', __NAMESPACE__ . '\add_grid_body_class' );

	add_filter( 'post_class', 'fulcrum_add_grid_to_post_class' );

	add_action( 'genesis_entry_content', 'the_excerpt' );

	add_action( 'genesis_after_endwhile', __NAMESPACE__ . '\add_clearfix_after_the_grid', 1 );

	if ( is_category() || is_tag() ) {
		add_filter( 'genesis_post_meta', __NAMESPACE__ . '\modify_post_meta' );
	}
}

/**
 * Add Fulcrum Grid to the body classes.
 *
 * @since 1.0.0
 *
 * @param array $classes
 *
 * @return array
 */
function add_grid_body_class( $classes ) {
	$classes[] = 'fulcrum-grid';

	return $classes;
}

/**
 * Unregister events.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_events() {
	remove_action( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );
	remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
}

/**
 * We need to render out a clearfix div after the posts but before the navigation.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_clearfix_after_the_grid() {
	echo '<div class="clearfix"></div>';
}

/**
 * Modify the post meta shortcode.
 *
 * @since 1.0.0
 *
 * @param string $meta
 *
 * @return string
 */
function modify_post_meta( $meta ) {
	return '[post_terms sep=", "]';
}
