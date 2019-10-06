<?php

/**
 * Template Functions
 *
 * @since 1.0.0
 *
 * @package WP_Radio
 */

/* Block direct access */
defined( 'ABSPATH' ) || exit();

/**
 * Get template files
 *
 * since 1.0.0
 *
 * @param        $template_name
 * @param array $args
 * @param string $template_path
 * @param string $default_path
 *
 * @return void
 */
function wp_radio_get_template( $template_name, $args = array(), $template_path = 'wp-radio', $default_path = '' ) {

	/* Add php file extension to the template name */
	$template_name = $template_name . '.php';

	/* Extract the args to variables */
	if ( $args && is_array( $args ) ) {
		extract( $args );
	}

	/* Look within passed path within the theme - this is high priority. */
	$template = locate_template( array( trailingslashit( $template_path ) . $template_name ) );

	/* Get default template. */
	if ( ! $template && false !== $default_path ) {
		$default_path = $default_path ? $default_path : WP_RADIO_TEMPLATES_DIR;
		if ( file_exists( trailingslashit( $default_path ) . $template_name ) ) {
			$template = trailingslashit( $default_path ) . $template_name;
		}
	};

	// Return what we found.
	include( apply_filters( 'wp_radio_locate_template', $template, $template_name, $template_path ) );

}

/**
 * Station Listing
 */
function wp_radio_listing_page_content() {

	$queried_object = get_queried_object();

	ob_start();
	wp_radio_get_template( 'listing-page' );
	$html = ob_get_clean();


	global $wp_query, $post;

	// Description handling.
	$content_prefix = '';
	if ( ! empty( $queried_object->description ) ) {
		$content_prefix = '<div class="wp-radio-listing-page-content">' . $queried_object->description . '</div>';
	} elseif ( is_page() && ! empty( $post->post_content ) ) {
		$content_prefix = '<div class="wp-radio-listing-page-content">' . $post->post_content . '</div>';
	}

	$post_title = '';

	if ( ! empty( $queried_object->name ) ) {
		if ( 'radio_country' == $queried_object->taxonomy ) {
			$post_title = sprintf( '<h2 class="wp-radio-page-title"> <img src="%s">  <span class="country">%s</span> <span class="station-txt"> <i class="dashicons dashicons-arrow-right-alt"></i> %s</span></h2>',
				wp_radio_get_country_image_url( $queried_object->slug, 48 ),
				$queried_object->name,
				__( 'Radio Stations', 'wp_radio' ) );

		} elseif ( 'radio_genre' == $queried_object->taxonomy ) {
			$post_title = '<h2 class="wp-radio-page-title"><span class="genre">' . $queried_object->name . '</span></h2>';
		}
	} elseif ( ! empty( $post->post_title ) ) {
		$post_title = $post->post_title;
	}


	$post_name = ! empty( $queried_object->slug ) ? $queried_object->slug : ( ! empty( $post->post_name ) ? $post->post_name : '' );

	$dummy_post_properties = array(
		'ID'                    => 0,
		'post_status'           => 'publish',
		'post_author'           => '',
		'post_parent'           => 0,
		'post_type'             => 'page',
		'post_date'             => '',
		'post_date_gmt'         => '',
		'post_modified'         => '',
		'post_modified_gmt'     => '',
		'post_content'          => $content_prefix . $html,
		'post_title'            => $post_title,
		'post_excerpt'          => '',
		'post_content_filtered' => '',
		'post_mime_type'        => '',
		'post_password'         => '',
		'post_name'             => $post_name,
		'guid'                  => '',
		'menu_order'            => 0,
		'pinged'                => '',
		'to_ping'               => '',
		'ping_status'           => '',
		'comment_status'        => 'closed',
		'comment_count'         => 0,
		'filter'                => 'raw',
	);

	// Set the $post global.
	$post = new WP_Post( (object) $dummy_post_properties );

	// Copy the new post global into the main $wp_query.
	$wp_query->post  = $post;
	$wp_query->posts = array( $post );

	// Prevent comments form from appearing.
	$wp_query->post_count    = 1;
	$wp_query->is_404        = false;
	$wp_query->is_page       = true;
	$wp_query->is_single     = true;
	$wp_query->is_archive    = false;
	$wp_query->is_tax        = true;
	$wp_query->max_num_pages = 0;

	// Prepare everything for rendering.
	setup_postdata( $post );
	remove_all_filters( 'the_content' );
	remove_all_filters( 'the_excerpt' );

	add_filter( 'template_include', 'wp_radio_force_single_template_filter' );
}


//check whether the sidebar is hidden or not
function wp_radio_sidebar_layout() {
	$layout              = prince_get_option( 'template_layout', 'left-sidebar' );
	$country_list_hidden = prince_get_option( 'country_list_hidden', 'on' );

	if ( 'full-width' != $layout && 'off' == $country_list_hidden ) {
		return $layout;
	} elseif ( 'full-width' == $layout && 'on' == $country_list_hidden && is_page() ) {
		return $layout;
	} else {
		return 'full-width';
	}
}


/**
 * Force the loading of one of the single templates instead of whatever template was about to be loaded.
 *
 * @param string $template Path to template.
 *
 * @return string
 * @since 2.0.2.1
 */
function wp_radio_force_single_template_filter( $template ) {
	$possible_templates = array(
		'page',
		'single',
		'singular',
		'index',
	);


	foreach ( $possible_templates as $possible_template ) {
		$path = get_query_template( $possible_template );
		if ( $path ) {
			return $path;
		}
	}

	return $template;
}


/**
 * Change the default template for the station listing page
 *
 * Change template for radio_country & radio_genre archive
 * and wp_radio single post
 *
 * @param $template
 *
 * @return string
 * @since 1.0.0
 *
 */
function wp_radio_filter_template( $template ) {

	if ( ! empty( $_GET['player'] ) && 'popup' == $_GET['player'] ) {
		remove_action( 'in_admin_header', 'wp_admin_bar_render', 0 );
		remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
		$template = wp_radio_get_template( 'player/popup' );
	}

	return $template;
}

add_filter( 'template_include', 'wp_radio_filter_template' );


function wp_radio_template_redirect() {
	if ( is_tax( 'radio_country' ) || is_tax( 'radio_genre' ) || ( ! empty( prince_get_option( 'stations_page' ) ) && is_page( prince_get_option( 'stations_page' ) ) ) ) {
		if ( is_tax( 'radio_genre' ) ) {
			add_filter( 'edit_post_link', '__return_false' );
		}
		wp_radio_listing_page_content();
	}
}

add_action( 'template_redirect', 'wp_radio_template_redirect' );

function wp_radio_filter_content( $content ) {
	if ( is_singular( 'wp_radio' ) ) {
		ob_start();
		wp_radio_get_template( 'single' );
		$content = ob_get_clean();
	}

	return $content;
}

add_filter( 'the_content', 'wp_radio_filter_content' );