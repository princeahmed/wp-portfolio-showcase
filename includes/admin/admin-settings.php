<?php

defined( 'ABSPATH' ) || exit;

//option name
add_filter( 'prince_options_id', function () {
	return 'wp_portfolio_showcase_settings';
} );

/**
 * Initialize the custom Settings.
 */
add_action( 'init', 'wp_portfolio_showcase_settings' );

/**
 * Build the custom settings & update Prince.
 *
 * @return    void
 * @since     1.0.0
 */
function wp_portfolio_showcase_settings() {

	/* Prince is not loaded yet, or this is not an admin request */
	if ( ! function_exists( 'prince_settings_id' ) || ! is_admin() ) {
		return;
	}

	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( prince_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be
	 * passes to the Prince Settings API Class.
	 */

	$custom_settings = array(

		'sections' => array(
			array(
				'id'    => 'general',
				'icon'  => 'dashicons dashicons-admin-generic',
				'title' => __( 'General Settings', 'wp-radio' )
			),

		),
		'settings' => array(
			//general
			array(
				'id'      => 'delete_data',
				'label'   => __( 'Delete Data on Plugin Uninstalling', 'wp_radio' ),
				'desc'    => __( 'Turn on to delete all the data (Portfolio, Settings) on uninstalling of this plugin.', 'wp_radio' ),
				'std'     => 'off',
				'type'    => 'on_off',
				'section' => 'general'
			),
		)
	);

	/* allow settings to be filtered before saving */
	$custom_settings = apply_filters( prince_settings_id() . '_args', $custom_settings );

	/* settings are not the same update the DB */
	if ( $saved_settings !== $custom_settings ) {
		update_option( prince_settings_id(), $custom_settings );
	}

	/* Lets Prince know the UI Builder is being overridden */
	global $prince_has_custom_settings;
	$prince_has_custom_settings = true;

}