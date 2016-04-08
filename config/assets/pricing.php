<?php
/**
 * Pricing Table Script runtime configuration parameters
 *
 * @package     Fulcrum_Site\Asset\Repo;
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site\Asset\Repo;

use Fulcrum_Site\Plugin;

return array(
	'is_script' => true,
	'handle'    => 'pricing_table_js',
	'config'    => array(
		'file'                 => FULCRUM_SITE_PLUGIN_URL . 'assets/js/jquery.pricing.js',
		'deps'                 => array( 'jquery' ),
		'version'              => Plugin::VERSION,
		'in_footer'            => true,
		'pre_conditional_load' => true,
		'load_on_page'         => array(
			'membership',
		),
	),
);
