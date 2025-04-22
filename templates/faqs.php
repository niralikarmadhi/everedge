<?php

/*

  * Template Name: FAQs

  */

?>

<main>
    <section class="faqs-page text-white bg-green-img">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-xl-10 px-lg-5  mx-auto">
                    <div class="col-lg-9 mx-auto px-lg-4 text-center">
                        <h1 class="font-medium text-uppercase text-title mb-0 pb-lg-1 pb-2">FREQUENTLY ASKED QUESTIONS
                        </h1>
                        <div class="position-relative faqs-input mt-4 pt-lg-3 px-lg-2">
                            <input type="text" class="form-control text-base fw-normal position-relative transition filter--search" placeholder="Search for your question…">
                            <button type="button" class="serch-icon search--icon position-absolute border-0 d-flex justify-content-center align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/faqs-search.svg" alt="FAQ search">
                            </button>
                        </div>
                    </div>
                    <div class="accordion theme-accordion mt-lg-5 mt-4 pt-2 questions--wrap" id="accordionExample">
                        <?php

                        $args = array(
                            'post_type' => 'questions_post_item',
                            'order' => 'DESC',
                            'orderby' => 'date',
                            'posts_per_page' => -1,
                        );

                        $the_query = new WP_Query($args);

                        $i = 0;

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                        ?>

                                <?php if (! get_field( 'hide_question' ) ) : ?>
                                    <div class="accordion-item" data-aos="fade-up">
                                        <h2 class="accordion-header" id="heading<?php the_id(); ?>">
                                            <button class="accordion-button medium-title text-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php the_id(); ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                                <span><?php the_title(); ?></span>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php the_id(); ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 text-gray text-sm">
                                                <div class="col-lg-10 pe-lg-4">
                                                    <div class="pb-lg-4 pb-3"><?php the_content(); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                        <?php $i++;
                            endwhile;
                        endif;
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>



<!-- posts handlebars -->

<script id="questions-template" type="text/x-handlebars-template">
    <div class="accordion-item" data-aos="fade-up">
        <h2 class="accordion-header" id="heading{{ ID }}">
            <button class="accordion-button medium-title text-primary collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse{{ ID }}" aria-expanded="false"
                aria-controls="collapse{{ ID }}">
                <span>{{ title }}</span>
            </button>
        </h2>
        <div id="collapse{{ ID }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body p-0 text-gray text-sm">
                <div class="col-lg-10 pe-lg-4">
                    <div class="pb-lg-4 pb-3">
                        <p>
                            {{{ description }}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>