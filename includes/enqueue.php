<?php

/* Block direct access */
defined( 'ABSPATH' ) || exit;

/**
 * Register and enqueue frontend scripts
 *
 * @param $hook
 *
 * @since 1.0.0
 *
 */
function wp_portfolio_scripts() {
	wp_enqueue_style( 'magnific-popup', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/css/magnific-popup.css' );
	wp_enqueue_style( 'responsiveslides', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/css/responsiveslides.css' );
	wp_enqueue_style( 'bootstrap', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/css/bootstrap.css' );
	wp_enqueue_style( 'wp-portfolio-showcase', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/css/frontend.min.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'responsiveslides.min', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/js/responsiveslides.min.js', [ 'jquery' ], WP_PORTFOLIO_SHOWCASE_VERSION, true );
	wp_enqueue_script( 'isotope.pkgd.min', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/js/isotope.pkgd.min.js', [ 'jquery' ], WP_PORTFOLIO_SHOWCASE_VERSION, true );
	wp_enqueue_script( 'jquery.magnific-popup.min', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/js/jquery.magnific-popup.min.js', [ 'jquery' ], WP_PORTFOLIO_SHOWCASE_VERSION, true );
	wp_enqueue_script( 'wp-portfolio-showcase', WP_PORTFOLIO_SHOWCASE_ASSETS_URL . '/js/frontend.min.js', [ 'jquery' ], WP_PORTFOLIO_SHOWCASE_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'wp_portfolio_scripts' );



