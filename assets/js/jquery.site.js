/**
 * Fulcrum Site JavaScript handling.  This script handles opening/closing of the questions and answers,
 * toggling of the icon handle, and setting of the class states.
 *
 * @package     Fulcrum Site
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthcode.io
 * @license     GNU General Public License 2.0+
 */
;(function ( $, window, document, undefined ) {
	'use strict'

	function init() {
		_scrollToTop();
		_smoothScroll();
		_helloBar();
	}

	function _helloBar() {
		var $helloBar = $('.hello-bar');
		if ( typeof $helloBar == "undefined") {
			return false;
		}

		$(window).scroll(function(){
			if ($(this).scrollTop() > 50) {
				$helloBar.slideDown();
			} else {
				$helloBar.slideUp();
			}
		});
	}

	function _scrollToTop() {
		var $scrollup = $('.scrollup');

		_scrollupScrollHandler( $scrollup );
		_scrollupClickHandler( $scrollup );
	}

	function _scrollupScrollHandler( $element ) {
		var height = $( window ).height() / 2;

		$( window ).scroll( function () {
			var position =  $( this ).scrollTop();

			if ( position > height ) {
				$element.addClass( 'active' );
			} else {
				$element.removeClass( 'active' );
			}
		} );
	}
	function _scrollupClickHandler( $element ) {

		$element.on('click', function(){

			$("html, body").animate({
				scrollTop: 0
			}, 600);

			return false;
		});
	}

	function _smoothScroll() {

		$('a[href*=#]:not([href=#])').click(function()
		{
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	}
	$( document ).ready( function () {
		init();
	} );

}( jQuery, window, document ));