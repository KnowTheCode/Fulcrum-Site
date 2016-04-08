<?php

/**
 * Info Box Shortcode
 *
 * @package     Fulcrum_Site\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 * @copyright   2015 WP Developers Club
 */

namespace Fulcrum_Site\Shortcode;

use Fulcrum\Custom\Shortcode\Shortcode;

class Info_Box extends Shortcode {

	/**
	 * Build the Shortcode HTML and then return it.
	 *
	 * @since 1.0.0
	 *
	 * @return string Shortcode HTML
	 */
	protected function render() {
		$content = do_shortcode( $this->content );
		$content = wp_kses_post( $this->content );

		$type  = $this->atts['type'] ? ' ' . esc_attr( $this->atts['type'] ) : '';
		$class = $this->atts['class'] ? esc_attr( $this->atts['class'] ) : '';

		ob_start();
		include( $this->config->view );

		return ob_get_clean();
	}
}
