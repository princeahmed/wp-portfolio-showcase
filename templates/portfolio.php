<div class="portfolio_sec">
    <ul class="list-unstyled ul-filter">
        <li data-filter="*" class="active_filter">all</li>
        <li data-filter=".logo">logo</li>
        <li data-filter=".coding">coding</li>
        <li data-filter=".design">Design</li>
    </ul>

    <div class="row grid">

		<?php

		$posts = get_posts( [
			'numberposts' => prince_get_settings( 'posts_per_page', 12 ),
			'post_type'   => 'portfolio'
		] );

		foreach ($posts as $post){
		    $type = prince_get_meta($post->ID, 'type', 'default');

		    if('default' == $type){
		        wp_portfolio_showcase_template('default', ['post' => $post]);
            }
        }

		?>





        <!--project 4 (Vimeo Video)-->
        <div class="col-xs-12 col-sm-6 item logo">
            <div class="project_content">
                <div class="my__img">
                    <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-4.jpg" alt=''>
                </div>
                <div class="info">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <a href="https://vimeo.com/45830194" class="video-popup">
                                <h3>Vimeo Video</h3>
                                <p>logo</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--project 6 (Image Overlay)-->
        <div class="col-xs-12 col-sm-6 item coding">
            <div class="project_content">
                <div class="my_img" data-mfp-src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-6.jpg">
                    <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-6.jpg" alt=''>
                </div>
                <div class="info">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <a href="#" class="image_overlay">
                                <h3>Image Overlay</h3>
                                <p>coding</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
