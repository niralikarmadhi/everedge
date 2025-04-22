<?php

/*

  * Template Name: Custom Planter

  */

?>

<main>
    <!-- Title Section Start -->
    <section class="page-title-section position-relative overflow-hidden">
        <?php $image = get_field('image');
        if ($image) : ?>
            <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="w-100 h-100 object-cover" alt="<?php echo esc_url($image['alt']); ?>">
                <div class="overlay--default"></div>
            </div>
        <?php endif; ?>

        <div class="container text-center position-relative z-index">
            <div class="col-md-10 col-xl-8 mx-auto">

                <?php if ($heading = get_field('heading')) : ?>
                    <h1 class="large-hero-title text-white mb-1"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('content')) : ?>
                    <p class="text-base text-white mb-0  3 font-sans"><?php echo $content; ?></p>
                <?php endif; ?>

            </div>
        </div>

        <div class="bg-shape w-100 h-auto position-absolute start-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/page-title-bottom-shape.svg" class="w-100 object-cover" alt="">
        </div>
    </section>
    <!-- Title Section End -->



    <!-- Planter Form Section Start -->
    <section class="planter-form-section position-relative">
        <div class="container">

            <?php echo do_shortcode('[contact-form-7 id="358" title="Custom Planter"]'); ?>

        </div>
    </section>
    <!-- Planter Form Section End -->

</main>