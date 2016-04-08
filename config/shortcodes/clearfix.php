<?php

/**
 * Clearfix Shortcode - Runtime Configuration Parameters
 *
 * @package     Fulcrum_Site\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site\Shortcode;

return array(
	'autoload' => true,
	'config'   => array(
		'shortcode' => 'clearfix',
		'view'      => FULCRUM_SITE_PLUGIN_DIR . 'src/shortcode/views/clearfix.php',
		'defaults'  => array(
			'class' => '',
		),
	),
);
