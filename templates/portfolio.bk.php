<!--Start Portfolio Section-->
<section class="portfolio_sec padding-bottom-90" id="portfolio">
    <div class="content">
        <div class="container">
            <div class="sec_title">
                <h2>Portfolio</h2>
            </div>
            <ul class="list-unstyled ul-filter">
                <li data-filter="*" class="active_filter">all</li>
                <li data-filter=".logo">logo</li>
                <li data-filter=".coding">coding</li>
                <li data-filter=".design">Design</li>
            </ul>

            <div class="row grid">

                <!--project 1 (Project popup)-->
                <div class="col-xs-12 col-sm-6 item grid-sizer design">
                    <div class="project_content">
                        <div class="my__img">
                            <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-1.jpg" alt=''>
                        </div>
                        <div class="info">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <a class="popup-with-zoom-anim" href="#slider_popup">
                                        <h3>Project Popup</h3>
                                        <p>Design</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Details-->
                <div id="slider_popup" class="zoom-anim-dialog mfp-hide">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="row">
                                <div class="col-sm-6">

                                    <!--Start slider-->
                                    <div class="project__slider">
                                        <ul class="project-slider">

                                            <!-- image 1 -->
                                            <li>
                                                <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-2.jpg" alt="">
                                            </li>

                                            <!-- image 2 -->
                                            <li>
                                                <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-3.jpg" alt="">
                                            </li>

                                            <!-- image 3 -->
                                            <li>
                                                <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-4.jpg" alt="">
                                            </li>

                                        </ul>
                                    </div>
                                    <!--End slider-->

                                    <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-5.jpg" alt="" class="margin-top-45">

                                    <!--= Youtube Video =-->
                                    <iframe height="342" src="https://www.youtube.com/embed/hpeYWdkUtcE?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;hd=1&amp;autohide=1&amp;feature=oembed" allowfullscreen class="margin-top-45"></iframe>

                                </div>
                                <div class="col-sm-6">
                                    <h3>Project Popup</h3>
                                    <ul class="list-unstyled project_info">
                                        <li><span>Client</span> : Envato</li>
                                        <li><span>Date</span> : March 19, 2017</li>
                                        <li><span>Skills</span> : HTML5, JS, CSS3</li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                    <a href="#" class="demo">Visit website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--project 2 (Image Overlay)-->
                <div class="col-xs-12 col-sm-6 item coding">
                    <div class="project_content">
                        <div class="my_img" data-mfp-src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-2.jpg">
                            <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-2.jpg" alt=''>
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

                <!--project 3 (Youtube Video)-->
                <div class="col-xs-12 col-sm-6 item design">
                    <div class="project_content">
                        <div class="my__img">
                            <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-3.jpg" alt=''>
                        </div>
                        <div class="info">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <a href="https://www.youtube.com/watch?v=hpeYWdkUtcE" class="video-popup">
                                        <h3>Youtube Video</h3>
                                        <p>Design</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

                <!--project 5 (open url)-->
                <div class="col-xs-12 col-sm-6 item logo">
                    <div class="project_content">
                        <div class="my__img">
                            <img src="<?php echo WP_PORTFOLIO_SHOWCASE_ASSETS_URL ?>/images/work-5.jpg" alt=''>
                        </div>
                        <div class="info">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <a href="http://www.google.com/" target="_blank">
                                        <h3>Project website</h3>
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
        </div><!--.container-->
    </div><!--.content-->
</section><!--End Portfolio Section-->