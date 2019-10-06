<?php

/**
 * =============================
 * Core Functions of this plugin
 * =============================
 */

defined( 'ABSPATH' ) || exit(); // Exit if accessed directly.


/**
 * Get post meta value. Default value return if meta value is empty
 *
 * @param $post_id
 * @param $key
 * @param string $default
 *
 * @return mixed|string
 */
function wpps_get_meta( $post_id, $key, $default = '' ) {
	$meta = get_post_meta( $post_id, $key, true );

	return ! empty( $meta ) ? $meta : $default;
}
