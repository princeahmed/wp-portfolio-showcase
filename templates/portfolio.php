<div class="portfolio_sec">
    <div class="ul-filter">
        <span data-filter="*" class="active_filter">All</span>

		<?php
		$terms = get_terms( [
			'taxonomy' => 'portfolio_category'
		] );

		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				printf( '<span data-filter=".%1$s">%2$s</span>', $term->slug, $term->name );
			}
		}

		?>
    </div>

    <div class="portfolio-items">

		<?php

		$posts = get_posts( [
			'numberposts' => prince_get_settings( 'posts_per_page', 12 ),
			'post_type'   => 'portfolio'
		] );

		foreach ( $posts as $post ) {
			$type = prince_get_meta( $post->ID, 'type', 'default' );
			wp_portfolio_showcase_template( $type, [ 'post' => $post ] );
		}

		?>

    </div>
</div>
