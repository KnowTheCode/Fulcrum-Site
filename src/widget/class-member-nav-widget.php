<?php

/**
 * Member Nav - displays menu links based upon if s/he is logged in or not.
 *
 * @package     Fulcrum_Site\Widget
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site\Widget;

use Fulcrum\Custom\Widget\Widget;

class Member_Nav_Widget extends Widget {

	/**
	 * Echo the widget content.
	 *
	 * @since 1.1.1
	 *
	 * @param array $args Display arguments including
	 *                          before_title, after_title, before_widget, & after_widget.
	 * @param array $instance The settings for the particular instance of the widget
	 *
	 * @return null
	 */
	protected function render_widget( array &$args, array &$instance ) {
		if ( is_user_logged_in() ) {
			global $current_user;
			get_currentuserinfo();
			$view = $this->config->view['logged_in'];

		} else {
			$view = $this->config->view['logged_out'];
		}

		if ( is_readable( $view ) ) {
			include( $view );
		}
	}

	/**
	 * Update a particular instance.
	 *
	 * This function should check that $new_instance is set correctly.
	 * The newly calculated value of $instance should be returned.
	 * If false is returned, the instance won't be saved / updated.
	 *
	 * @since 1.0.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user via form().
	 * @param array $old_instance Old settings for this instance.
	 *
	 * @return array Settings to save or bool false to cancel saving
	 */
	public function update( $new_instance, $old_instance ) {
		$new_instance['class'] = strip_tags( $new_instance['class'] );

		return $new_instance;
	}
}
