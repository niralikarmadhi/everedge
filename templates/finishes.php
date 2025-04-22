<?php

/*

  * Template Name: Finishes

  */

?>

<main>
    <!-- Title Section Start -->
    <section class="page-title-section position-relative overflow-hidden rounded-0">
        <div class="section-bg w-100 h-100 position-absolute top-0 start-0">

            <?php $page_banner_background = get_field('page_banner_background');
            if ($page_banner_background) : ?>
                <img src="<?php echo esc_url($page_banner_background['sizes']['large']); ?>" class="w-100 h-100 object-cover d-none d-lg-block" alt="<?php echo esc_attr($page_banner_background['alt']); ?>">
            <?php endif; ?>

            <?php $page_banner_background_mobile = get_field('page_banner_background_mobile');
            if ($page_banner_background_mobile) : ?>
                <img src="<?php echo esc_url($page_banner_background_mobile['sizes']['large']); ?>" class="w-100 h-100 object-cover d-block d-lg-none" alt="<?php echo esc_attr($page_banner_background_mobile['alt']); ?>">
            <?php endif; ?>

            <div class="overlay--default"></div>

        </div>
        <div class="container text-center position-relative z-index">
            <div class="col-md-10 col-xl-8 mx-auto">

                <?php if ($page_banner_title = get_field('page_banner_title')) : ?>
                    <h1 class="large-hero-title text-white mb-1"><?php echo esc_html($page_banner_title); ?></h1>
                <?php endif; ?>

                <?php if ($page_banner_content = get_field('page_banner_content')) : ?>
                    <p class="text-base text-white mb-0  3 font-sans">
                        <?php echo $page_banner_content; ?>
                    </p>
                <?php endif; ?>

            </div>
        </div>
        <div class="bg-shape w-100 h-auto position-absolute start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/page-title-bottom-shape.svg" class="w-100 object-cover d-none d-md-block" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/mobile-page-title.svg" class="w-100 object-cover d-md-none" alt="">
        </div>
    </section>
    <!-- Title Section End -->

    <!-- About us Section Start -->
    <section class="finishes-about-section little-about-us position-relative">
        <div class="container">

            <?php

            $i = 0;

            $args = array(
                'post_type' => 'finishes_post_item',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => -1,
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                    <?php if ($i % 2 == 0) : ?>
                        <span id="<?php echo clean(get_the_title()) ?>"></span>

                        <div class="row g-0 justify-content-between pb-5 mb-3 mb-md-4">
                            <div class="col-12 col-lg-5 col-xxl-6 mb-md-2">
                                <div class="col-lg-10 mx-auto about-content d-flex flex-column justify-content-center align-items-start ps-lg-5 h-100">
                                    <h3 class="section-title text-primary mb-3 line-height-1" data-aos="fade-up"><?php the_title(); ?></h3>
                                    <div class="text-lg mb-lg-3 mb-4 text-gray fw-light  6 pe-lg-3" data-aos="fade-up">
                                        <?php the_content(); ?>
                                    </div>
                                    <a href="/product-category/domestic/?filters=25,16" class="btn btn-outline-primary btn-lg" data-aos="fade-up">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Explore products</span>
                                            <div class="ms-2 btn-arrow d-flex justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                                    <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 col-xxl-6 position-relative ps-xl-5 pt-4 pt-lg-0 mx-auto mb-md-2" data-aos="fade-up">
                                <div class=" about-img ps-xl-4 position-relative">
                                    <?php $example_image = get_field('example_image');
                                    if ($example_image) : ?>
                                        <img src="<?php echo esc_url($example_image['sizes']['large']); ?>" alt="<?php echo esc_attr($example_image['alt']); ?>" class="object-cover">
                                    <?php endif; ?>

                                    <?php $finish_image = get_field('finish_image');
                                    if ($finish_image) : ?>
                                        <div class="small-img position-absolute">
                                            <img src="<?php echo esc_url($finish_image['sizes']['large']); ?>" alt="<?php echo esc_attr($finish_image['alt']); ?>" class="object-cover transition">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <span id="<?php echo clean(get_the_title()) ?>"></span>
                        <div class="row g-0 justify-content-between pb-5 mb-3 mb-md-4">
                            <div class="col-12 col-lg-5 col-xxl-6 mb-md-2 order-md-2">
                                <div class="col-lg-10 mx-auto about-content d-flex flex-column justify-content-center align-items-start ps-lg-5 h-100">
                                    <h3 class="section-title text-primary mb-3 line-height-1" data-aos="fade-up"><?php the_title(); ?></h3>
                                    <div class="text-lg mb-lg-3 mb-4 text-gray fw-light  6 pe-lg-3" data-aos="fade-up">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 col-xxl-6 position-relative ps-xl-5 pt-4 pt-lg-0 mx-auto mb-md-2 order-md-1" data-aos="fade-up">
                                <div class=" about-img ps-xl-4 position-relative">
                                    <?php $example_image = get_field('example_image');
                                    if ($example_image) : ?>
                                        <img src="<?php echo esc_url($example_image['sizes']['large']); ?>" alt="<?php echo esc_attr($example_image['alt']); ?>" class="object-cover">
                                    <?php endif; ?>

                                    <?php $finish_image = get_field('finish_image');
                                    if ($finish_image) : ?>
                                        <div class="small-img position-absolute">
                                            <img src="<?php echo esc_url($finish_image['sizes']['large']); ?>" alt="<?php echo esc_attr($finish_image['alt']); ?>" class="object-cover transition">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

            <?php $i++;
                endwhile;
            endif;
            wp_reset_query(); ?>
        </div>
    </section>
    <!-- About us Section End -->

    <div class="container d-md-none mt-5">
        <div class="col-12 mx-auto border-bottom"></div>
    </div>

    <?php if (have_rows('testimonials', 'options')) : ?>
        <!-- Why choose everedge Start -->
        <section class="why-choose-sec slick-overflow">
            <div class="container">
                <h2 class="section-title text-primary mb-5 pb-lg-2 text-center" data-aos="fade-up">WHY CHOOSE EVEREDGE?</h2>
                <div class="col-lg-8 choose-slider mx-auto">
                    <?php while (have_rows('testimonials', 'options')) :
                        the_row(); ?>

                        <div class="px-lg-3" data-aos="fade-up">
                            <div class="choose-box bg-primary text-white">

                                <?php if ($heading = get_sub_field('heading', 'options')) : ?>
                                    <h4 class="mb-3"><?php echo esc_html($heading); ?></h4>
                                <?php endif; ?>

                                <?php if ($quote = get_sub_field('quote', 'options')) : ?>
                                    <p class="text-xl fw-light mb-0 pe-lg-5 mb-5 pb-lg-4 pb-3"><span>"</span><?php echo $quote; ?><span>"</span></p>
                                <?php endif; ?>

                                <?php if ($quotee = get_sub_field('quotee', 'options')) : ?>
                                    <span class="text-base text-capitalize font-sans"><?php echo esc_html($quotee); ?></span>
                                <?php endif; ?>

                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <!-- Why choose everedge End -->
    <?php endif; ?>

    <!-- Spacer Bar -->
    <div class="spacer py-5">
        <div class="container">
            <div class="col-12 mx-auto border-top d-md-none mb-5 pb-4"></div>
        </div>
    </div>
    <!-- Spacer Bar -->

    <!-- Feature Section Start -->
    <section class="featured-product-sec position-relative pb-0 pb-lg-5">
        <div class="container py-5">
            <div class="col-lg-9 mx-auto">
                <?php if ($featured_heading = get_field('featured_heading')) : ?>
                    <h2 class="headingXL text-primary mb-lg-5 mb-4 pb-2 text-center line-height-1" data-aos="fade-up"><?php echo esc_html($featured_heading); ?></h2>
                <?php endif; ?>
                <div class="row flex-nowrap overflow-auto scroll-hidden gx-6">

                    <?php if (have_rows('featured_products')) : ?>
                        <?php while (have_rows('featured_products')) :
                            the_row(); ?>

                            <div class="col-11 col-lg-4" data-aos="fade-up">

                                <?php
                                $product = get_sub_field('product');
                                if ($product) :
                                    $post = $product;
                                    setup_postdata($post);
                                ?>
                                    <a href="<?php the_permalink(); ?>" class="featured-card card-hover overflow-hidden bg-white d-block">
                                        <div class="featured-img overflow-hidden">
                                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100 h-100 object-cover">
                                        </div>
                                        <div class="featured-body bg-white font-sans transition">
                                            <h4 class="text-primary mb-2 text-transform-none"><?php the_title(); ?></h4>
                                            <h3 class="text-black fw-medium text-transform-none mb-0"><?php echo $product->get_price_html(); ?> inc. VAT</h3>
                                        </div>
                                    </a>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Spacer Bar -->
    <div class="spacer py-4 py-md-5"></div>
    <!-- Spacer Bar -->

</main>