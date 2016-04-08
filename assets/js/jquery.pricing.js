/**
 * Pricing Table JavaScript handling.  This script handles opening/closing of the questions and answers,
 * toggling of the icon handle, and setting of the class states.
 *
 * @package     KTC
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthcode.io
 * @license     GNU General Public License 2.0+
 */
;(function ( $, window, document, undefined ) {
	'use strict'

	function init() {
		termSwitcher();
	}

	function termSwitcher() {
		$( '.plan_select__term' ).on('click', function(event){
			var $selectedTerm = $( this ),
				buttonClass = '.' + $selectedTerm.data( 'button' ),
				linkHref = $selectedTerm.data( 'link' );

			$( buttonClass ).attr( 'href', linkHref );
		});
	}

	$( document ).ready( function () {
		init();
	} );

}( jQuery, window, document ));