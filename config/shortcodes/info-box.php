<?php

/**
 * Info Box Shortcode - Runtime Configuration Parameters
 *
 * @package     Fulcrum_Site\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site\Shortcode;

return array(
	'autoload'  => true,
	'classname' => 'Fulcrum_Site\Shortcode\Info_Box',
	'config'    => array(
		'shortcode' => 'infobox',
		'view'      => FULCRUM_SITE_PLUGIN_DIR . 'src/shortcode/views/info-box.php',
		'defaults'  => array(
			'class' => '',
			'type'  => '',
		),
	),
);
