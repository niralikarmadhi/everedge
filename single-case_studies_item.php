
<main>
    <!-- Title Section Start -->
    <section class="page-title-section position-relative overflow-hidden">

        <?php $banner_image = get_field( 'banner_image' );
        if ( $banner_image ) : ?>
        <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
            <img src="<?php echo esc_url( $banner_image['sizes']['large'] ); ?>" class="w-100 h-100 object-cover" alt="">
            <div class="overlay--default"></div>
        </div>
        <?php endif; ?>

        <div class="container text-center position-relative z-index">
            <div class="col-md-10 col-xl-8 mx-auto">
                <!-- <h1 class="large-hero-title text-white mb-1">COMPLETED PROJECTS</h1>
                    <p class="text-base text-white mb-0  3 font-sans">EverEdge planters can be specified to virtually any shape or size and in a variety of finishes.</br> Our visualisation tool allows you to design a bespoke planter for podiums, public spaces and also private gardens.</p> -->
            </div>
        </div>

        <div class="bg-shape w-100 h-auto position-absolute start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/page-title-bottom-shape.svg" class="w-100 object-cover d-none d-md-block"
                alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/mobile-page-title.svg" class="w-100 object-cover d-md-none" alt="">
        </div>
    </section>
    <!-- Title Section End -->

    <!-- Case Studies Section Start -->
    <section class="case-studies-open-section">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-12 col-md-8 ps-lg-0">
                    <h1 class="section-title text-primary mb-4 fw-semibold"><?php the_title(); ?></h1>
                    <div class="d-flex align-items-center flex-wrap badge-list mb-4 pb-md-1">
                        <?php
                                $categories = get_the_terms( $post->id, 'case_studies_category' );

                                $cats = [];

                                foreach($categories as $category) {
                                    $cats[] = '<div class="badge text-primary font-body fw-semibold">' . $category->name . '</div>';
                                }

                                echo implode ($cats);
                                ?>
                    </div>
                    <div class="theme-content text-base text-gray fw-light pe-xl-5 me-lg-5">
                        <div><?php the_content(); ?></div>
                    </div>
                </div>
                
                <?php if ( have_rows( 'project_details' ) ) : ?>
                <div class="col-12 col-md-4 desktopHeight100">
                    <div class="card project-detail-card border-0 theme-radius">

                        <?php if ( $heading = get_field( 'heading', false, false ) ) : ?>
                        <h3 class="medium-title text-primary fw-semibold"><?php echo esc_html( $heading ); ?></h3>
                        <?php endif; ?>

                        <ul class="p-0 mb-0">
                        <?php if ( have_rows( 'project_details' ) ) : ?>
	                        <?php while ( have_rows( 'project_details' ) ) :
		                    the_row(); ?>
                            <li class="d-flex align-items-center justify-content-between">
                                
                                <?php if ( $detail_name = get_sub_field( 'detail_name' ) ) : ?>
                                <div class="text-sm text-spacing text-primary flex-grow-1 font-sans fw-semibold"><?php echo esc_html( $detail_name ); ?>
                                </div>
                                <?php endif; ?>

                                <?php if ( $detail = get_sub_field( 'detail' ) ) : ?>
                                <div class="text-sm text-spacing text-gray flex-shrink-0 font-sans"><?php echo esc_html( $detail ); ?></div>
                                    <?php endif; ?>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
            <div class="position-relative mt-md-4 pt-4 pt-md-5">
                <div
                    class="about-image-slider slick-indicators slick-horizontal-dots slick-group-arrow slick-arrow-bottom-right slick-arrow-bottom-center-mobile col-12 col-md-11 offset-md-1 position-static mb-0">

                    <?php if ( have_rows( 'slider_images' ) ) : ?>
                    <?php while ( have_rows( 'slider_images' ) ) :
                        the_row(); ?>
                    <div data-aos="fade-up">
                    <?php $image = get_sub_field( 'image' );
                    if ( $image ) : ?>
                        <div class="img-box">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" class="w-100 h-100 object-cover" alt="">
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        <div class="container">
            <!-- Spacer Bar -->
            <div class="spacer my-5 py-5">
                <div class="py-4 mt-4"></div>
            </div>
            <!-- Spacer Bar -->
            <?php if ( $heading = get_field( 'additional_heading' ) ) : ?>
            <h4 class="headingL text-primary mb-3 fw-semibold" data-aos="fade-up"><?php echo esc_html( $heading ); ?></h4>
            <?php endif; ?>

            <?php if ( $content = get_field( 'content' ) ) : ?>
            <div class="theme-content text-base text-gray fw-light col-lg-7 pe-xl-3 mb-3" data-aos="fade-up">
                <div><?php echo $content; ?></div>
            </div>
            <?php endif; ?>

            <?php if ( have_rows( 'buttons' ) ) : ?>
            <?php while ( have_rows( 'buttons' ) ) :
                the_row(); ?>

            <?php if ( $button_link = get_sub_field( 'button_link' ) ) : ?>
            <a href="<?php echo esc_html( $button_link ); ?>" class="btn btn-outline-primary mx-auto" data-aos="fade-up">
                <div class="d-flex justify-content-between align-items-center">
                    <span><?php the_sub_field('button_text'); ?></span>
                    <div class="ms-2 btn-arrow d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                            viewBox="0 0 19.249 19.242">
                            <path id="Path_12443" data-name="Path 12443"
                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                        </svg>
                    </div>
                </div>
            </a>
            <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>
    <!-- Case Studies Section End -->
    <?php if ( get_field( 'featured_products' ) ) :
        
            
        ?>
    <!-- Featured Product Section Start -->
    <section class="about-team-section position-relative slick-overflow">
        <div class="bg-shape w-100 position-absolute start-0 z-index">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/team-section-top-divider.svg"
                class="w-100 h-100 object-cover d-none d-md-block" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/team-section-top-divider-mobile.svg"
                class="w-100 h-100 object-cover d-md-none" alt="">
        </div>
        <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/team-section-bg.png" class="w-100 h-100 object-cover" alt="">
        </div>
        <div class="container position-relative z-index">
            <div class="position-relative pb-4 col-lg-9 mx-auto">

            <?php if ( $featured_heading = get_field( 'featured_heading' ) ) : ?>
                <h2 class="section-title text-secondary text-uppercase text-center mb-4 mb-md-5 pb-lg-2 fw-semibold" data-aos="fade-up"><?php echo esc_html( $featured_heading ); ?></h2>
                    <?php endif; ?>

                <div class="row flex-nowrap overflow-auto scroll-hidden gx-6">

                 
                            <?php while ( have_rows( 'featured_products' ) ) :
                                the_row(); ?>

                        <?php $product = get_sub_field( 'featured_products' );
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
                                        <h3 class="text-black fw-medium text-transform-none mb-0 fw-semibold"><?php echo $product->get_price_html(); ?> inc. VAT</h3>
                                    </div>
                                </a>
                            </div>
                            <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                            <?php endwhile; ?>
                        

                </div>
            </div>
        </div>
    </section>
    <!-- Featured Product Section End -->

    <?php endif; ?>
    <?php if ( $learn_more_heading = get_field( 'learn_more_heading', false, false ) ) : ?>
    <!-- Learn More Section Start -->
    <div class="learn-more-section cta-section text-center position-relative">
        <div class="bg-top-shape w-100 h-auto position-absolute start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/learn-more-section-top-shape.svg"
                class="w-100 object-cover d-none d-md-block" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/learn-more-section-top-shape-mobile.svg"
                class="w-100 object-cover d-md-none" alt="">
        </div>
        <div class="container">

            <?php if ( $learn_more_heading = get_field( 'learn_more_heading', false, false ) ) : ?>
            <h2 class="large-hero-title text-secondary text-uppercase mb-2 fw-semibold" data-aos="fade-up"><?php echo $learn_more_heading; ?></h2>
            <?php endif; ?>

            <?php if ( $learn_more_content = get_field( 'learn_more_content' ) ) : ?>
            <div class="leading-theme text-base text-white col-xl-6 px-xl-3 mx-auto mb-4" data-aos="fade-up">
                <div><?php echo $learn_more_content; ?></div>
            </div>
            <?php endif; ?>

            <?php if ( have_rows( 'learn_more_buttons' ) ) : ?>
            <?php while ( have_rows( 'learn_more_buttons' ) ) :
                the_row(); ?>

            <?php if ( $link = get_sub_field( 'link' ) ) : ?>
            <a href="<?php echo esc_html( $link ); ?>" class="btn btn-outline-secondary mx-auto" data-aos="fade-up">
                <div class="d-flex justify-content-between align-items-center">
                    <span><?php the_sub_field('button_text'); ?></span>
                    <div class="ms-2 btn-arrow d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                            viewBox="0 0 19.249 19.242">
                            <path id="Path_12443" data-name="Path 12443"
                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                        </svg>
                    </div>
                </div>
            </a>
            <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="bg-bottom-shape w-100 h-auto position-absolute start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/learn-more-section-bottom-shape.svg"
                class="w-100 object-cover d-none d-md-block" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/learn-more-section-bottom-shape-mobile.svg"
                class="w-100 object-cover d-md-none" alt="">
        </div>
    </div>
    <!-- Learn More Section End -->
    <?php endif; ?>

    <?php if ( $heading = get_field( 'related_heading', false, false ) ) : ?>

    <!-- Related Case Studies Section Start -->
    <section class="related-case-study-section">
        <div class="container">
            
            <?php if ( $heading = get_field( 'related_heading', false, false ) ) : ?>
            <div class="mb-3 pb-4">
                <h4 class="headingL text-primary text-uppercase mb-0" data-aos="fade-up"><?php echo esc_html( $heading ); ?></h4>
            </div>
            <?php endif; ?>

            <div class="row case-studies-grid g-4 g-md-3">
            <?php if ( have_rows( 'related_case_studies' ) ) : ?>
            <?php while ( have_rows( 'related_case_studies' ) ) :
                the_row(); ?>

                <?php
                $case_study = get_sub_field( 'case_study' );
                if ( $case_study ) :
                    $post = $case_study;
                    setup_postdata( $post ); 
                    ?>
                <div class="col-12 col-md-6 filter" data-aos="fade-up">
                    <a href="<?php the_permalink(); ?>"
                        class="case-study-card d-block position-relative overflow-hidden card-hover">
                        <div class="img-box">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="w-100 h-100 object-cover" alt="">
                        </div>
                        <div
                            class="case-study-body text-white font-body position-absolute w-100 bottom-0 start-0 z-index">

                            <?php
                            $categories = get_the_terms( $post->id, 'blog_posts_category' );
                            if($categories):
                                $cats = '';
                                foreach($categories as $category):
                                $cats .=  $category->name.', ';
                                endforeach; ?>
                            <div class="text-base tracking-0 mb-1">
                                <?php echo substr($cats,0,-2); ?>
                            </div>
                            <?php endif; ?>

                            <h3 class="headingM mb-0"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Related Case Studies Section End -->
    <?php endif; ?>

</main>