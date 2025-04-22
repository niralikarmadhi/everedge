<?php

/*

  * Template Name: Case Studies

  */

?>


<main>
    <!-- Title Section Start -->
    <section class="page-title-section title-overlay position-relative overflow-hidden rounded-0">
    <?php $image = get_field( 'banner_image' );
        if ( $image ) : ?>
        <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" class="w-100 h-100 object-cover" alt="<?php echo esc_url( $image['alt'] ); ?>">
            <div class="overlay--default"></div>
        </div>
        <?php endif; ?>

        <div class="container text-center position-relative z-index">
            <div class="col-md-10 col-xl-8 mx-auto">
            <?php if ( $heading = get_field( 'banner_heading' ) ) : ?>
                <h1 class="large-hero-title text-white mb-1"><?php echo esc_html( $heading ); ?></h1>
                <?php endif; ?>

                <?php if ( $content = get_field( 'banner_content' ) ) : ?>
                <div class="text-base text-white mb-0  3 font-sans"><?php echo $content; ?></div>
                    <?php endif; ?>
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
    <section class="case-studies-section overflow-hidden">
        <div class="container">
            <ul
                class="filter-tab-nav d-flex flex-nowrap filter-title align-items-center justify-content-md-end scroll-hidden overflow-auto px-md-0 mb-4 pb-2 pb-md-0">
                <?php 
                    $terms = get_terms([
                    'taxonomy' => 'case_studies_category',
                    'hide_empty' => false,
                ]); ?>

                <?php 
                $i = '0';
                foreach ($terms as $term):?>

                <li><a href="javascript:void(0)" data-filter="all"
                        class="filter-tab-btn d-block text-nowrap text-sm text-spacing font-sans fw-medium handlebar--trigger <?php if ($i == 0): echo 'active'; endif?>" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name?></a></li>

                <?php $i++;endforeach; ?>
            </ul>


            <?php

            $args = array(
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 4,
                'post_type' => 'case_studies_item',
            );

            $the_query = new WP_Query($args);

            ?> 

            <div class="row case-studies-grid g-4 g-md-3"> 
                
            <?php 

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                <div class="col-12 col-md-6 filter filter-1" data-aos="fade-up">
                    <a href="<?php the_permalink(); ?>"
                        class="case-study-card d-block position-relative overflow-hidden card-hover">
                        <div class="img-box">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="w-100 h-100 object-cover" alt="<?php the_title(); ?>">
                        </div>
                        <div
                            class="case-study-body text-white font-body position-absolute w-100 bottom-0 start-0 z-index">
                            <?php
                                $categories = get_the_terms( $post->id, 'case_studies_category' );

                                $cats = [];

                                foreach($categories as $category) {
                                    $cats[] = '<div class="text-base d-inline-block tracking-0 mb-1 me-1">' . $category->name . '</div>';
                                }

                                echo implode ($cats);
                                ?>
                            <h3 class="headingM mb-0"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>

            <?php if($the_query->found_posts >= 4) : ?>
            <div class="text-center mt-lg-5 mt-4 pt-3 pt-lg-5">
                <a href="javascript:void(0);" class="btn btn-outline-primary btn-md loadMore" data-items="4">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Load More</span>
                        <div class="ms-1 btn-arrow d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.351" height="20.351"
                                viewBox="0 0 20.351 20.351">
                                <g id="Group_2889" data-name="Group 2889"
                                    transform="translate(3838.663 -5398.846) rotate(45)">
                                    <line id="Line_610" data-name="Line 610" x2="18.551"
                                        transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#f5f3f0"
                                        stroke-linecap="round" stroke-width="1.8" />
                                    <line id="Line_611" data-name="Line 611" x2="18.551"
                                        transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#f5f3f0"
                                        stroke-linecap="round" stroke-width="1.8" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- Case Studies Section End -->

    <!-- Spacer Bar -->
    <div class="spacer py-2 py-md-5"></div>
    <!-- Spacer Bar -->
</main>


<script id="handlebar-template" type="text/x-handlebars-template">
    <div class="col-12 col-md-6 filter filter-1" data-aos="fade-up">
        <a href="{{ link }}"
            class="case-study-card d-block position-relative overflow-hidden card-hover">
            <div class="img-box">
                <img src="{{ image }}" class="w-100 h-100 object-cover" alt="{{ title }}">
            </div>
            <div
                class="case-study-body text-white font-body position-absolute w-100 bottom-0 start-0 z-index">
                <div class="text-base tracking-0 mb-1">
                {{ cats }}
                </div>
                <h3 class="headingM mb-0">{{ title }}</h3>
            </div>
        </a>
    </div>
</script>