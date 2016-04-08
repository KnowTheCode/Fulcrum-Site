<?php
/**
 * Fulcrum Site Script runtime configuration parameters
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
	'handle'    => 'site_js',
	'config'    => array(
		'file'      => FULCRUM_SITE_PLUGIN_URL . 'assets/js/jquery.site.js',
		'deps'      => array( 'jquery' ),
		'version'   => Plugin::VERSION,
		'in_footer' => true,
	),
);
