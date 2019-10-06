<?php

/* Block direct access */
defined( 'ABSPATH' ) || exit();

/**
 * Class ShortCode
 *
 * add short codes
 *
 * @package Prince\WP_Radio
 *
 * @since 1.0.0
 */
class WP_Portfolio_Showcase_ShortCode {

	/* constructor */
	public function __construct() {
		add_shortcode( 'wp_radio_listing', array( $this, 'listing' ) );
	}

	/**
	 * Station listing
	 *
	 * @param $attrs
	 */
	function listing( $atts ) {
		$atts = shortcode_atts( array(
			'country' => '',
			'genre'   => '',
		), $atts );

		ob_start();
		wp_radio_get_template( 'listing-page', ['shortcode_args' => $atts] );
		$html = ob_get_clean();

		return $html;
	}


}

new WP_Portfolio_Showcase_ShortCode();