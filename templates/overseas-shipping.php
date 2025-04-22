<?php

/*

  * Template Name: Oveseas

  */

?>


<main>
    <section class="overseas-shipping-form text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-xl-8 px-lg-4  mx-auto">
                    <div class="px-lg-3">
                        <?php if ($heading = get_field('heading')) : ?>
                            <h1 class="font-medium text-uppercase text-title mb-3 mb-lg-0 pb-1 line-height-1"><?php echo esc_html($heading); ?></h1>
                        <?php endif; ?>

                        <?php if ($content = get_field('content')) : ?>
                            <p class="text-lg font-sans fw-light text-white opacity-75  2 px-lg-5 mb-0">
                                <?php echo $content; ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="215" title="Overseas"]'); ?>
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
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" class="w-100 h-100 object-cover">
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