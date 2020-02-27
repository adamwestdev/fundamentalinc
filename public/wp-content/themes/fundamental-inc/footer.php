            <!-- Latest News -->
            <section class="latest-news">
                <header class="section--header">
                    Latest News
                </header>
                <div class="flex-container">
                    <!-- Article -->
                    <article class="block third card">
                        <a href="#" class="card--image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="test">
                        </a>
                        <div class="latest-news--time">
                            <p><time pubdate="pubdate">Feb 20, 2020</time></p>
                            <a href="#">News</a>
                        </div>
                        <div class="card--content">
                            <a href="#" class="latest-news--header">
                                <h1>This is my title</h1>
                            </a>
                            <p class="latest-news--content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="latest-news--readmore">
                                Read More
                            </a>
                        </div>
                    </article>
                    <!-- Article -->
                    <article class="block third card">
                        <a href="#" class="card--image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="test">
                        </a>
                        <div class="latest-news--time">
                            <p><time pubdate="pubdate">Feb 20, 2020</time></p>
                            <a href="#">News</a>
                        </div>
                        <div class="card--content">
                            <a href="#" class="latest-news--header">
                                <h1>This is my title</h1>
                            </a>
                            <p class="latest-news--content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="latest-news--readmore">
                                Read More
                            </a>
                        </div>
                    </article>
                    <!-- Article -->
                    <article class="block third card">
                        <a href="#" class="card--image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="test">
                        </a>
                        <div class="latest-news--time">
                            <p><time pubdate="pubdate">Feb 20, 2020</time></p>
                            <a href="#">News</a>
                        </div>
                        <div class="card--content">
                            <a href="#" class="latest-news--header">
                                <h1>This is my title</h1>
                            </a>
                            <p class="latest-news--content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="latest-news--readmore">
                                Read More
                            </a>
                        </div>
                    </article>
                </div>
                <div class="container align-center padding-top">
                    <a href="#" class="btn btn--lg btn--yellow">
                        View All Articles
                    </a>
                </div>
            </section>
            <!-- /Latest News -->

            <!-- Featured Project -->
            <section class="featured-project">
                <header class="section--header">
                    Featured Project
                </header>
                <div class="flex-container">
                    <!-- Article -->
                    <article class="block full card">
                        <a href="#" class="featured-project--image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="test">
                        </a>
                        <div class="featured-project--container">
                            <a href="#" class="featured-project--header">
                                <h1>This is my title</h1>
                            </a>
                            <p class="featured-project--content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn--sm btn--purple">
                                View Project
                            </a>
                        </div>
                    </article>
                </div>
                <div class="container align-center padding-top">
                    <a href="#" class="btn btn--lg btn--yellow">
                        View All Projects
                    </a>
                </div>
            </section>
            
            
            <footer class="footer">
                <div class="container">
                    <a href="<?php echo home_url(); ?>" class="footer--logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fundamentalinc-logo-stacked.png" alt="Fundamental Inc">
                    </a>
                    <div class="footer--nav">
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Projects</a></li>
                            <li><a href="">Resources</a></li>
                            <li><a href="">News &amp; Articles</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer--content">
                        <div class="footer--content-block">
                            <p>Copyright &copy; <?php echo date( 'Y' ); ?> • <?php echo get_bloginfo( 'site_name' ); ?></p>
                        </div>
                        <div class="footer--content-block">
                            <p><a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
                

            </footer>

        </div><!-- /Site wrapper -->
        <?php wp_footer(); ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <?php if ( is_front_page() ) : ?>
            <script>
            video.addEventListener('loadedmetadata', function() {
                if (video.buffered.length === 0) return;

                var bufferedSeconds = video.buffered.end(0) - video.buffered.start(0);
                console.log(bufferedSeconds + ' seconds of video are ready to play!');
            });
            </script>
        <?php endif; ?>
    </body>
</html>