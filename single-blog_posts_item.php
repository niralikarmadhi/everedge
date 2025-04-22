<main>

        <!-- Blog Details Section Start -->
        <section class="blog-details-section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 blog-sidebar">
                        <div class="back-btn position-sticky p-0 pb-5 mb-5 d-none d-md-block">
                            <a href="/blog/" class="btn btn-outline-primary prev-btn me-3">
                                <div class="d-flex justify-content-end align-items-center w-100">
                                    <div class="me-1 btn-arrow d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                            <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor"></path>
                                        </svg>
                                    </div>
                                    <span>Go back</span>
                                </div>
                            </a>
                        </div>
                        <div class="social-icons d-flex flex-md-column flex-row align-items-center align-items-md-start position-sticky mt-5 pt-5 d-none d-md-block">
                            <h4 class="text-xl mb-0 mb-md-2 text-black">SHARE THIS POST</h4>
                            <?php echo do_shortcode('[addtoany]')?>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <h1 class="section-title text-primary mb-4"><?php the_title(); ?></h1>
                        <div class="theme-content text-base text-gray fw-light mb-4">
                            <div><?php the_content(); ?></div>
                        </div>

                        <?php if ( have_rows( 'additional_images' ) ) : ?>
                        <?php while ( have_rows( 'additional_images' ) ) :
                            the_row(); ?>
		
                        <div class="img-box mb-5">

                            <?php $image = get_sub_field( 'image' );
                            if ( $image ) : ?>
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" class="img-fluid theme-radius w-100" alt="">
                            <?php endif; ?>

                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                        <div class="theme-content text-base text-gray fw-light mb-5">
                        <?php if ( $additional_heading = get_field( 'additional_heading', false, false ) ) : ?>
                                <h2 class="section-title text-primary mb-4" data-aos="fade-up"><?php echo esc_html( $additional_heading ); ?></h2>
                            <?php endif; ?>

                            <?php if ( $additional_content = get_field( 'additional_content' ) ) : ?>
                            <div data-aos="fade-up"><?php echo $additional_content; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="d-block">

                        <?php if ( have_rows( 'buttons' ) ) : ?>
                        <?php while ( have_rows( 'buttons' ) ) :
                            the_row(); ?>

                            <?php if ( $button_link = get_sub_field( 'button_link' ) ) : ?>
                            <a href="<?php echo esc_html( $button_link ); ?>" class="btn btn-outline-primary" data-aos="fade-up">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><?php the_sub_field('button_text'); ?></span>
                                    <div class="ms-2 btn-arrow d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                            <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        </div>
                        <div class="social-icons d-flex flex-md-column flex-row align-items-center align-items-md-start mt-3 pt-4 d-md-none">
                            <h4 class="text-xl mb-0 mb-md-2 text-black me-4">SHARE THIS POST</h4>
                            <ul class="d-flex p-0 mb-0">
                                <?php if ( $facebook = get_field( 'facebook' ) ) : ?>
                                <li>
                                    <a href="<?php echo esc_html( $facebook ); ?>" class="d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8.776" height="18.805" viewBox="0 0 8.776 18.805">
                                            <g id="facebook-letter-logo_1_" data-name="facebook-letter-logo (1)" transform="translate(0 0)">
                                                <path id="Facebook" d="M116.593,3.643V6.232h-1.9V9.4h1.9v9.408h3.9V9.4H123.1s.245-1.518.364-3.178H120.5V4.056a.92.92,0,0,1,.845-.759h2.123V0h-2.887C116.5,0,116.593,3.17,116.593,3.643Z" transform="translate(-114.696 -0.001)" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if ( $twitter = get_field( 'twitter' ) ) : ?>
                                <li>
                                    <a href="<?php echo esc_html( $twitter ); ?>" class="d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.003" height="17.068" viewBox="0 0 21.003 17.068">
                                            <g id="twitter_1_" data-name="twitter (1)" transform="translate(0 0)">
                                                <path id="Path_11" data-name="Path 11" d="M21,49.976a8.616,8.616,0,0,1-2.475.678,4.322,4.322,0,0,0,1.895-2.384,8.626,8.626,0,0,1-2.736,1.046,4.313,4.313,0,0,0-7.343,3.93,12.233,12.233,0,0,1-8.881-4.5A4.314,4.314,0,0,0,2.8,54.5a4.291,4.291,0,0,1-1.952-.539c0,.018,0,.036,0,.054A4.312,4.312,0,0,0,4.3,58.238a4.313,4.313,0,0,1-1.946.074A4.313,4.313,0,0,0,6.38,61.3a8.645,8.645,0,0,1-5.352,1.845A8.722,8.722,0,0,1,0,63.088a12.2,12.2,0,0,0,6.605,1.936,12.176,12.176,0,0,0,12.26-12.26q0-.28-.013-.557A8.754,8.754,0,0,0,21,49.976Z" transform="translate(-0.001 -47.956)" fill="#f5f3f0"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if ( $linkedin = get_field( 'linkedin' ) ) : ?>
                                <li>
                                    <a href="<?php echo esc_html( $linkedin ); ?>" class="d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.572" height="18.702" viewBox="0 0 19.572 18.702">
                                            <g id="linkedin-logo" transform="translate(0 0)">
                                                <path id="LinkedIn" d="M19.572,21.024V28.26H15.377V21.509c0-1.7-.607-2.853-2.125-2.853A2.3,2.3,0,0,0,11.1,20.19a2.87,2.87,0,0,0-.139,1.023V28.26h-4.2s.057-11.434,0-12.619h4.2V17.43c-.009.013-.02.028-.028.041h.028V17.43a4.166,4.166,0,0,1,3.781-2.085C17.5,15.345,19.572,17.148,19.572,21.024ZM2.375,9.558a2.187,2.187,0,1,0-.056,4.361h.028a2.187,2.187,0,1,0,.028-4.361ZM.249,28.26H4.444V15.641H.249Z" transform="translate(0 -9.558)" fill="#f5f3f0"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- Space Bar -->
                        <div class="spacer py-5"></div>
                        <!-- Space Bar -->
                        <?php if ( $featured_heading = get_field( 'featured_heading' ) ) : ?>
                        <h2 class="section-title text-primary text-center mb-4" data-aos="fade-up"><?php echo esc_html( $featured_heading ); ?></h2>
                        <?php endif; ?>
                        <div class="row d-none flex-nowrap overflow-auto scroll-hidden justify-content-lg-center gx-6">

                        <?php if ( have_rows( 'featured_products' ) ) : ?>
                            <?php while ( have_rows( 'featured_products' ) ) :
                                the_row(); ?>

                        <?php $product = get_sub_field( 'product' );
                        if ( $product ) :
                            $post = $product;
                            setup_postdata( $post );  ?>
                            <div class="col-11 col-lg-4" data-aos="fade-up">
                                <a href="<?php the_permalink(); ?>" class="featured-card card-hover overflow-hidden bg-white d-block">
                                    <div class="featured-img overflow-hidden">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="featured-img" class="w-100 h-100 object-cover">
                                    </div>
                                    <div class="featured-body bg-white font-sans transition">
                                        <h4 class="text-primary mb-2 text-transform-none"><?php the_title(); ?></h4>
                                        <h3 class="text-black fw-medium text-transform-none mb-0"><?php echo $product->get_price_html(); ?> inc. VAT</h3>
                                    </div>
                                </a>
                            </div>
                            <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Section End -->

        <!-- Interested Section Start -->
        <section class="interested-section about-team-section position-relative slick-overflow">
            <div class="bg-shape w-100 position-absolute start-0 z-index">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/team-section-top-divider.svg" class="w-100 h-100 object-cover d-none d-md-block" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/team-section-top-divider-mobile.svg" class="w-100 h-100 object-cover d-md-none" alt="">
            </div>
            <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/team-section-bg.png" class="w-100 h-100 object-cover" alt="">
                <div class="overlay--default"></div>
            </div>
            <div class="container position-relative z-index">
                <h2 class="headingM text-secondary text-uppercase mb-4 mb-md-5 pb-2" data-aos="fade-up">YOU MIGHT ALSO BE INTERESTED IN…</h2>
                <div class="team-slider slick-indicators slick-group-arrow slick-arrow-top-right slick-arrow-white col-xl-10 position-static">

                    <?php 


                $args = array(
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 8,
                    'post_type' => 'blog_posts_item',
                    'post__not_in'   => array(get_the_ID()),
                    
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                    <div class="" data-aos="fade-up">
                        <a href="<?php the_permalink()?>" class="team-card card-hover overflow-hidden bg-white d-block position-relative">
                        <?php
                        $categories = get_the_terms( $post->id, 'blog_posts_category' );
                        if($categories):
                            $cats = '';
                            foreach($categories as $category):
                            $cats .=  $category->name.', ';
                            endforeach; ?>
                            <div class="badge font-body fw-medium position-absolute text-white z-index">
                            <?php echo substr($cats,0,-2); ?>
                            </div>
                            <?php endif; ?>
                            <div class="team-img overflow-hidden">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="team-member-img" class="w-100 h-100 object-cover">
                            </div>
                            <div class="team-body bg-secondary font-sans transition">
                                <h4 class="title-sm text-primary mb-2 text-transform-none font-body"><?php  echo wp_trim_words(get_the_title(), 4, '...');; ?></h4>
                                <div class="text-xs text-gray  2 mb-2">
                                    <?php
                                        echo wp_trim_words(get_the_content(), 10, '...');
                                        ?>
                                </div>
                                <button class="btn-arrow p-0 border-0 bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44.001" height="44.001" viewBox="0 0 44.001 44.001">
                                        <path id="Subtraction_65" data-name="Subtraction 65" d="M16203,12785a21.934,21.934,0,1,1,8.563-1.729A21.885,21.885,0,0,1,16203,12785Zm-8.706-22.917a.917.917,0,0,0,0,1.833h15.282l-6.775,7.162a.965.965,0,0,0,.036,1.295.862.862,0,0,0,.615.249.943.943,0,0,0,.68-.285l8.25-8.706a.817.817,0,0,0,.244-.63.953.953,0,0,0-.244-.629l-8.25-8.709a.942.942,0,0,0-.67-.284.911.911,0,0,0-.625.247.952.952,0,0,0-.036,1.295l6.775,7.162Z" transform="translate(-16180.999 -12741)" fill="currentcolor"></path>
                                    </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>
            </div>
        </section>
        <!-- Interested Section End -->

    </main>