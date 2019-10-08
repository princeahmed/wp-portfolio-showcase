<?php

defined( 'ABSPATH' ) || exit;

//option name
add_filter( 'prince_options_id', function () {
	return 'wp_portfolio_showcase_settings';
} );

//settings menu slug
add_filter( 'prince_settings_menu_slug', function () {
	return 'wp-portfolio-showcase-settings';
} );

//settings page title
add_filter( 'prince_settings_page_title', function () {
	return 'WP Portfolio Showcase Settings';
} );

/**
 * Initialize the custom Settings.
 */
add_action( 'admin_init', 'wp_portfolio_showcase_settings' );

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
				'title' => __( 'General Settings', 'wp-portfolio-showcase' )
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

			array(
				'id'      => 'portfolio_page',
				'label'   => __( 'Portfolio Page', 'wp_radio' ),
				'desc'    => __( 'Select he portfolio page where all the portfolio will be displayed', 'wp_radio' ),
				'std'     => get_option('wp_portfolio_showcase_page'),
				'type'    => 'page_select',
				'section' => 'general'
			),

			array(
				'id'      => 'posts_per_page',
				'label'   => __( 'Portfolio per Page', 'wp_radio' ),
				'desc'    => __( 'How many portfolio will be displayed in the portfolio page', 'wp_radio' ),
				'std'     => 12,
				'type'    => 'text',
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