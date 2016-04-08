<?php

/**
 * Member Nav Widget - Runtime Configuration Parameters
 *
 * @package     Fulcrum_Site\Widget
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site\Widget;

return array(

	/*********************
	 * Widget Construct Args
	 ********************/
	'id_base'         => 'ktc-member-nav-widget',
	'name'            => __( 'KTC Member Nav', 'fulcrum_site' ),
	'widget_options'  => array(
		'classname'   => 'ktc-member-nav-widget',
		'description' => __( 'Displays a member navigation bar.', 'fulcrum_site' ),
	),
	'control_options' => array(
		'width'  => 400,
		'height' => 350,
	),
	/*********************
	 * Defaults
	 ********************/

	'defaults' => array(
		'class' => '',
	),
	/*********************
	 * Views
	 ********************/

	'view'      => array(
		'logged_in' => FULCRUM_SITE_PLUGIN_DIR . 'src/widget/views/member-nav-widget-logged-in.php',
		'logged_out' => FULCRUM_SITE_PLUGIN_DIR . 'src/widget/views/member-nav-widget-logged-out.php',
	),
	'form_view' => FULCRUM_SITE_PLUGIN_DIR . 'src/widget/views/member-nav-widget-form.php',
);