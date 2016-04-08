<?php
/**
 * Fulcrum Site Specific plugin for KnowTheCode.io.
 *
 * @package     Fulcrum_Site
 * @since       1.0.8
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site;

use Fulcrum\Addon\Addon;

class Plugin extends Addon {

	/**
	 * The plugin's version
	 *
	 * @var string
	 */
	const VERSION = '1.0.8';

	/**
	 * The plugin's minimum WordPress requirement
	 *
	 * @var string
	 */
	const MIN_WP_VERSION = '3.5';

	/*************************
	 * Instantiate & Init
	 ************************/

	/**
	 * Addons can overload this method for additional functionality
	 *
	 * @since 1.0.0
	 *
	 * @return null
	 */
	protected function init_addon() {
		do_action( 'fulcrum_site_loaded' );

		add_action( 'edit_form_after_title', array( $this, 'enable_page_for_posts_editor' ) );

		add_filter( 'login_redirect', array( $this, 'redirect_to_account_after_login' ), 10, 3 );

		add_filter( 'register_post_type_args', array( $this, 'add_genesis_layouts_to_memberpressproduct' ), 10, 2 );

		add_filter( 'genesis_load_deprecated', '__return_false' );
	}

	/**
	 * Add the Genesis Layouts to the MemberPress Product Pages 'support'
	 *
	 * @since 1.0.3
	 *
	 * @param array $args Array of Arguments
	 * @param string $post_type Post type
	 *
	 * @return array
	 */
	public function add_genesis_layouts_to_memberpressproduct( array $args, $post_type ) {
		if ( 'memberpressproduct' != $post_type ) {
			return $args;
		}

		$args['supports'][] = 'genesis-layouts';

		return $args;
	}

	/**
	 * Redirect the user to their account page after logging in.
	 *
	 * @since 1.0.0
	 *
	 * @param string $redirect_to
	 * @param $request
	 * @param $user
	 *
	 * @return string|void
	 */
	public function redirect_to_account_after_login( $redirect_to, $request, $user ) {
		if ( ! $this->is_user( $user ) ) {
			return $redirect_to;
		}

		return site_url( '/account', 'https' );
	}

	/**
	 * Enable the editor again on the page_for_posts.
	 *
	 * @since 1.0.0
	 *
	 * @param $post
	 *
	 * @return void
	 */
	public function enable_page_for_posts_editor( $post ) {
		if ( $post->ID == get_option( 'page_for_posts' ) ) {
			add_post_type_support( 'page', 'editor' );
		}
	}

	/**
	 * Checks if the user object is setup and ready.
	 *
	 * @since 1.0.0
	 *
	 * @param null $user
	 *
	 * @return bool
	 */
	protected function is_user( $user = null ) {
		if ( ! is_object( $user ) ) {
			global $user;
		}

		return isset( $user->roles ) && is_array( $user->roles );
	}
}
