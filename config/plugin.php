<?php
/**
 * Fulcrum Site Plugin Runtime Configuration Parameters.
 *
 * @package     Fulcrum_Site
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site;

use Fulcrum\Config\Config;

return array(

	'plugin_activation_keys' => array(),
	
	'register_concretes' => array(
		'Fulcrum_Site\Widget\Member_Nav_Widget' => array(
			'autoload' => false,
			'concrete' => function ( $container ) {
				return new Config( FULCRUM_SITE_PLUGIN_DIR . 'config/widgets/member-nav.php' );
			}
		),
	),

	'service_providers' => array(

		/****************************
		 * Assets
		 ****************************/
		'style.fontawesome'   => array(
			'provider' => 'provider.asset',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/assets/font-awesome.php',
		),
		// This is the minified live site scripts
		'script.fulcrum_site'   => array(
			'provider' => 'provider.asset',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/assets/plugin-build.php',
		),
		// These are for local development.
//		'script.pricing'      => array(
//			'provider' => 'provider.asset',
//			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/assets/pricing.php',
//		),
//		'script.fulcrum_site' => array(
//			'provider' => 'provider.asset',
//			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/assets/site.php',
//		),

		/****************************
		 * Shortcodes
		 ****************************/
		'shortcode.clearfix'  => array(
			'provider' => 'provider.shortcode',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/shortcodes/clearfix.php',
		),
		'shortcode.info_box'  => array(
			'provider' => 'provider.shortcode',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/shortcodes/info-box.php',
		),

		/****************************
		 * Widgets
		 ****************************/
		'widget.member_nav'  => array(
			'provider' => 'provider.widget',
			'config' => array(
				'Fulcrum_Site\Widget\Member_Nav_Widget',
			),
		),
	),
);
