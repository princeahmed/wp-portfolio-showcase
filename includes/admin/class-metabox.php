<?php

/* Block direct access */
defined( 'ABSPATH' ) || exit();

/**
 * Class MetaBox
 *
 * Handle metaboxes
 *
 * @package Prince\WP_Radio
 *
 * @since 1.0.0
 */
class WP_Portfolio_Showcase_MetaBox {

	/**
	 * MetaBox constructor.
	 * Initialize the custom Meta Boxes for prince-settings api.
	 *
	 * @since 1.0.0
	 */
	function __construct() {
		add_action( 'admin_init', array( $this, 'meta_boxes' ) );
		add_filter( 'prince_media_buttons', array( $this, 'wp_editor_media_buttons' ), 10, 2 );
		add_filter( 'prince_tinymce', array( $this, 'wp_editor_tinymce' ), 10, 2 );
	}

	/**
	 * Create a custom meta boxes array that we pass to
	 * the Prince Meta Box API Class.
	 *
	 * @since 1.0.0
	 */
	function meta_boxes() {

		$metaboxes = [];

		$metaboxes['wp_portfolio_showcase_metabox'] = array(
			'id'       => 'wp_portfolio_showcase_metabox',
			'title'    => __( 'Project Information', 'wp-radio' ),
			//'desc'     => __( 'Add Additional Information for Project', 'wp-radio' ),
			'pages'    => array( 'portfolio' ),
			'context'  => 'normal',
			'priority' => 'high',
			'fields'   => apply_filters( 'wp_portfolio_showcase_metabox_fields', array(
					'client' => array(
						'label' => __( 'Client', 'wp-radio' ),
						'id'    => 'client',
						'type'  => 'text',
						'desc'  => __( 'Enter the project client name (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'Client Name'
						),
					),

					'date' => array(
						'label' => __( 'Date', 'wp-radio' ),
						'id'    => 'date',
						'type'  => 'text',
						'desc'  => __( 'Enter the project date (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'March 19, 2019'
						),
					),

					'skills' => array(
						'label' => __( 'Skills', 'wp-radio' ),
						'id'    => 'skills',
						'type'  => 'text',
						'desc'  => __( 'Enter the project related skills (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'HTML5, JS, CSS3'
						),
					),

					'url' => array(
						'label' => __( 'URL', 'wp-radio' ),
						'id'    => 'url',
						'type'  => 'text',
						'desc'  => __( 'Enter the project URL (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'https://projecturl.com'
						),
					),

				)
			)

		);

		$metaboxes['wp_portfolio_showcase_gallery_metabox'] = array(
			'id'       => 'wp_portfolio_showcase_gallery_metabox',
			'title'    => __( 'Project Gallery', 'wp-radio' ),
			'desc'     => __( 'Select the images for the project gallery', 'wp-radio' ),
			'pages'    => array( 'portfolio' ),
			'context'  => 'side',
			'priority' => 'low',
			'fields'   => array(
				array(
					'id'   => 'gallery',
					'type' => 'gallery',
				),
			)
		);

		if ( function_exists( 'prince_register_meta_box' ) ) {
			foreach ( $metaboxes as $metabox ) {
				prince_register_meta_box( $metabox );
			}
		}

	}

	/**
	 * Hide wp_editor media buttons for metabox specific ids
	 *
	 * @param $true
	 * @param $field_id
	 *
	 * @return bool
	 * @since 1.0.0
	 *
	 */
	function wp_editor_media_buttons( $true, $field_id ) {


		if ( 'additional' == $field_id ) {
			return false;
		}

		return $true;
	}

	/**
	 * Disallow wp_editor tinymce editor for metabox specific field ids
	 *
	 * @param $true
	 * @param $field_id
	 *
	 * @return bool
	 * @since 1.0.0
	 *
	 */
	function wp_editor_tinymce( $true, $field_id ) {
		if ( 'additional' == $field_id ) {
			return false;
		}

		return $true;
	}

}

new WP_Portfolio_Showcase_MetaBox();
