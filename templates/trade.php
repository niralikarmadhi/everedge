<?php

/*

  * Template Name: Trade

  */

?>

<main class="overflow-hidden trade-page">
    <?php $image_banner = get_field('image_banner');
    if ($image_banner) : ?>
        <!-- Title Section Start -->
        <section class="trade-hero-img overflow-hidden">
            <div class="trade-img">
                <img src="<?php echo esc_url($image_banner['sizes']['fullscreen']); ?>" class="w-100 h-100 object-cover" alt="<?php echo esc_attr($image_banner['alt']); ?>">
            </div>
        </section>
        <!-- Title Section End -->
    <?php endif; ?>

    <section class="contact-section position-relative">
        <div class="container">
            <div class="col-12 col-lg-7 mx-auto pt-3 pt-lg-0 text-primary">
                <?php if ($heading = get_field('heading')) : ?>
                    <h1 class="trade-form-title text-center mb-0 pb-lg-3 pb-2 line-height-1"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>
                <div class="d-flex justify-content-center py-2 mx-auto mb-4 bg-primary form-tag">
                    <span class=" d-inline-block fw-light text-center text-lg text-secondary font-sans line-height-1">
                        UK Customers Only</span>
                </div>

                <?php if ($content = get_field('content')) : ?>
                    <p class="text-lg fw-light  2 mb-lg-4"><?php echo $content; ?></p>
                <?php endif; ?>

                <?php echo do_shortcode('[contact-form-7 id="212" title="Trade Account"]'); ?>
                <div class="row g-0 d-none">
                    <div class="col-12 text-center mt-4  pt-2">
                        <button class="btn btn-outline-primary btn-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Submit form</span>
                                <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                        <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (have_rows('other_pages')) : ?>
        <!-- why choose everedge -->
        <section class="why-choose-everedge bg-transparent contact-bottom-cards">
            <div class="container">
                <div class="row g-0">

                    <?php while (have_rows('other_pages')) :
                        the_row(); ?>

                        <div class="col-12 col-lg-4">
                            <div class="d-block choose-card">
                                <div class="card-img overflow-hidden position-relative card-img-radius">
                                    <?php $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <a href="<?php the_sub_field('page'); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover">
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($Page_Name = get_sub_field('page_name')) : ?>
                                        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 d-block d-lg-none text-center">
                                            <h3 class="text-white img-text"><?php echo esc_html($Page_Name); ?></h3>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="card-body text-center bg-secondary card-shadow transition d-none d-lg-block card-body-radius">
                                    <?php if ($Page_Name = get_sub_field('page_name')) : ?>
                                        <a href="<?php the_sub_field('page'); ?>">
                                            <h3 class="text-primary mb-2"><?php echo esc_html($Page_Name); ?></h3>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($page_details = get_sub_field('page_details')) : ?>
                                        <p class="text-lg text-gray px-4 mb-0 fw-light">
                                            <?php echo $page_details; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>
        </section>
    <?php endif; ?>
</main>