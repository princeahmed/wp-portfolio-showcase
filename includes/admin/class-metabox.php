<?php

/* Block direct access */
defined( 'ABSPATH' ) || exit;

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
			'title'    => __( 'Portfolio Information', 'wp-radio' ),
			'pages'    => array( 'portfolio' ),
			'context'  => 'normal',
			'priority' => 'high',
			'fields'   => apply_filters( 'wp_portfolio_showcase_metabox_fields', array(
					array(
						'label' => __( 'General', 'wp-radio' ),
						'id'    => 'general_tab',
						'type'  => 'tab',
					),
					array(
						'label'    => __( 'Portfolio Type', 'wp-radio' ),
						'id'       => 'type',
						'type'     => 'radio',
						'desc'     => __( 'Select the portfolio type.', 'wp-radio' ),
						'std'      => 'default',
						'operator' => 'and',
						'choices'  => array(
							array(
								'value' => 'default',
								'label' => __( 'Default', 'theme-text-domain' ),
							),
							array(
								'value' => 'gallery',
								'label' => __( 'Image Gallery', 'theme-text-domain' ),
							),
							array(
								'value' => 'video',
								'label' => __( 'Video', 'theme-text-domain' ),
							),
							array(
								'value' => 'external',
								'label' => __( 'External Link', 'theme-text-domain' ),
							),
						)
					),
					array(
						'label' => __( 'Details', 'wp-radio' ),
						'id'    => 'details_tab',
						'type'  => 'tab',
					),
					array(
						'label' => __( 'Client', 'wp-radio' ),
						'id'    => 'client',
						'type'  => 'text',
						'desc'  => __( 'Enter the project client name (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'Client Name'
						),
					),

					array(
						'label' => __( 'Date', 'wp-radio' ),
						'id'    => 'date',
						'type'  => 'text',
						'desc'  => __( 'Enter the project date (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'March 19, 2019'
						),
					),

					array(
						'label' => __( 'Skills', 'wp-radio' ),
						'id'    => 'skills',
						'type'  => 'text',
						'desc'  => __( 'Enter the project related skills (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'HTML5, JS, CSS3'
						),
					),

					array(
						'label' => __( 'URL', 'wp-radio' ),
						'id'    => 'url',
						'type'  => 'text',
						'desc'  => __( 'Enter the project URL (Optional).', 'wp-radio' ),
						'attrs' => array(
							'placeholder' => 'https://projecturl.com'
						),
					),
					array(
						'label' => __( 'Gallery/ Video', 'wp-radio' ),
						'id'    => 'gallery_tab',
						'type'  => 'tab',
					),
					array(
						'label' => __( 'Portfolio Gallery', 'wp-radio' ),
						'desc'  => __( 'Select the images for the portfolio', 'wp-radio' ),
						'id'    => 'gallery',
						'type'  => 'gallery',
					),
					array(
						'label' => __( 'Portfolio Video', 'wp-radio' ),
						'desc'  => __( 'Enter the video URL or select the video from media', 'wp-radio' ),
						'id'    => 'video',
						'type'  => 'upload',
					),

				)
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
