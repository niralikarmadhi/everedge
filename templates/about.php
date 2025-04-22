<?php

/*

  * Template Name: About

  */

?>



<main>
    <!-- Title Section Start -->
    <section class="about-hero-section position-relative overflow-hidden min-vh-100 d-flex flex-column justify-content-center">

        <?php $top_banner_image = get_field('top_banner_image');
        if ($top_banner_image) :

        ?>
            <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
                <img src="<?php echo esc_url($top_banner_image['url']); ?>" class="w-100 h-100 object-cover" alt="<?php echo esc_attr($top_banner_image['alt']); ?>">
                <div class="overlay--default"></div>
            </div>
        <?php endif; ?>

        <div class="container text-start position-relative z-index">
            <div class="col-md-10 col-xl-9">
                <?php if ($top_banner_tagline = get_field('top_banner_tagline')) : ?>
                    <h3 class="small-label font-body text-uppercase text-white tracking-0 mb-3 mb-md-3"><?php echo esc_html($top_banner_tagline); ?></h3>
                <?php endif; ?>

                <?php if ($top_banner_title = get_field('top_banner_title')) : ?>
                    <h1 class="large-hero-title text-white mb-md-4 mb-3"><?php echo esc_html($top_banner_title); ?></h1>
                <?php endif; ?>

                <?php if (have_rows('top_banner_buttons')) : ?>
                    <?php while (have_rows('top_banner_buttons')) :
                        the_row(); ?>

                        <?php if ($button_link = get_sub_field('button_link')) : ?>
                            <a href="<?php echo esc_html($button_link); ?>" class="btn btn-outline-secondary btn-lg">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><?php the_sub_field('button_text'); ?></span>
                                    <div class="ms-2 btn-arrow d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                            <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="bg-shape w-100 h-auto position-absolute start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/page-title-bottom-shape.svg" class="w-100 object-cover d-none d-md-block" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/mobile-page-title.svg" class="w-100 object-cover d-md-none" alt="">
        </div>
    </section>
    <!-- Title Section End -->

    <!-- About Content Section Start -->
    <section class="about-content-section slick-overflow">
        <div class=" container">
            <?php if ($content_block_heading = get_field('content_block_heading')) : ?>
                <h2 class="section-title text-primary mb-5 pb-2" data-aos="fade-up"><?php echo $content_block_heading; ?></h2>
            <?php endif; ?>

            <?php if ($content_block_content = get_field('content_block_content')) : ?>
                <div class="row gx-5 mb-3 mb-md-5 pb-1 pb-md-5" data-aos="fade-up">
                    <div class="col-12">
                        <div class="text-lg theme-content text-primary fw-light font-sans">
                            <div><?php echo $content_block_content; ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="position-relative">
                <div class="about-image-slider slick-indicators slick-horizontal-dots slick-group-arrow slick-arrow-bottom-right slick-arrow-bottom-center-mobile col-12 position-static mb-0">

                    <?php if (have_rows('slider_banner')) : ?>
                        <?php while (have_rows('slider_banner')) :
                            the_row(); ?>
                            <div data-aos="fade-up">
                                <?php $image = get_sub_field('image');
                                if ($image) : ?>
                                    <div class="img-box">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="w-100 h-100 object-cover" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- About Content Section End -->

    <!-- Team Section Start -->
    <section class="about-team-section position-relative slick-overflow">
        <div class="bg-shape w-100 position-absolute start-0 z-index">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/team-section-top-divider.svg" class="w-100 h-100 object-cover d-none d-md-block" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/team-section-top-divider-mobile.svg" class="w-100 h-100 object-cover d-md-none" alt="">
        </div>
        <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/team-section-bg.png" class="w-100 h-100 object-cover" alt="team-start">
        </div>
        <div class="container position-relative z-index">
            <div class="position-relative pb-4">
                <?php if ($team_heading = get_field('team_heading')) : ?>
                    <h2 class="section-title text-secondary text-uppercase mb-4 mb-md-5 pb-lg-2" data-aos="fade-up"><?php echo esc_html($team_heading); ?></h2>
                <?php endif; ?>
                <div class="team-slider slick-indicators slick-group-arrow slick-arrow-top-right slick-arrow-white col-xl-10 position-static">
                    <?php if (have_rows('team_members')) : ?>
                        <?php while (have_rows('team_members')) :
                            the_row(); ?>

                            <div class="" data-aos="fade-up">
                                <a href="javascript:void(0);" class="team-card card-hover overflow-hidden bg-white d-block">
                                    <?php $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <div class="team-img overflow-hidden">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover">
                                        </div>
                                    <?php endif; ?>
                                    <div class="team-body bg-secondary font-sans transition">
                                        <?php if ($role = get_sub_field('role')) : ?>
                                            <div class="small-label text-sm mb-0 font-body opacity-50 tracking-0 fw-semibold"><?php echo esc_html($role); ?></div>
                                        <?php endif; ?>

                                        <?php if ($name = get_sub_field('name')) : ?>
                                            <h4 class="title-sm text-primary mb-2 font-body uppercase"><?php echo esc_html($name); ?></h4>
                                        <?php endif; ?>

                                        <?php if ($description = get_sub_field('description')) : ?>
                                            <div class="text-s text-gray  3 mb-2"><?php echo $description; ?></div>
                                        <?php endif; ?>
                                        <!-- <button class="btn-arrow p-0 border-0 bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44.001" height="44.001"
                                        viewBox="0 0 44.001 44.001">
                                        <path id="Subtraction_65" data-name="Subtraction 65"
                                            d="M16203,12785a21.934,21.934,0,1,1,8.563-1.729A21.885,21.885,0,0,1,16203,12785Zm-8.706-22.917a.917.917,0,0,0,0,1.833h15.282l-6.775,7.162a.965.965,0,0,0,.036,1.295.862.862,0,0,0,.615.249.943.943,0,0,0,.68-.285l8.25-8.706a.817.817,0,0,0,.244-.63.953.953,0,0,0-.244-.629l-8.25-8.709a.942.942,0,0,0-.67-.284.911.911,0,0,0-.625.247.952.952,0,0,0-.036,1.295l6.775,7.162Z"
                                            transform="translate(-16180.999 -12741)" fill="currentcolor"></path>
                                    </svg>
                                </button> -->
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="cta-section pt-5 mt-5 text-center col-xl-5 px-xl-3 mx-auto">
                <?php if ($cta_heading = get_field('cta_heading', false, false)) : ?>
                    <h2 class="large-hero-title text-secondary text-uppercase mb-3 pb-1" data-aos="fade-up"><?php echo $cta_heading; ?>
                    </h2>
                <?php endif; ?>

                <?php if (have_rows('cta_buttons')) : ?>
                    <?php while (have_rows('cta_buttons')) :
                        the_row(); ?>

                        <?php if ($button_link = get_sub_field('button_link')) : ?>
                            <a href="<?php echo esc_html($button_link); ?>" class="btn btn-outline-secondary btn-md mx-auto" data-aos="fade-up">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><?php the_sub_field('button_text'); ?></span>
                                    <div class="ms-2 btn-arrow d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                            <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- Team Section End -->

</main>