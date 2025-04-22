<?php

/*

  * Template Name: Blog

  */

?>

<main class="blog-page">
    <!-- Title Section Start -->
    <section class="page-title-section title-overlay position-relative overflow-hidden rounded-0">
        <?php

        $args = array(
            'order' => 'DESC',
            'orderby' => 'date',
            'posts_per_page' => 1,
            'post_type' => 'blog_posts_item',
        );

        $the_query = new WP_Query($args);

        ?>

        <?php
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>

                <div class="section-bg w-100 h-100 position-absolute top-0 start-0">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" class="w-100 h-100 object-cover" alt="<?php the_title(); ?>">
                    <div class="overlay--default"></div>
                </div>
                <div class="container position-relative z-index">
                    <div class="col-md-10 col-xl-6">
                        <h6 class="text-xs text-white">FEATURED POST</h6>
                        <h1 class="section-title text-white mb-1"><?php the_title(); ?></h1>
                        <div class="col-lg-9 d-none d-lg-block">
                            <div class="text-base text-white mb-0  2 font-sans"><?php echo wp_trim_excerpt(get_the_excerpt()); ?></div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn mt-3 btn-md d-none d-lg-inline-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Read post</span>
                                <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                        <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <button class="btn mt-3 d-block d-lg-none">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Explore projects</span>
                                <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                        <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
            <?php endwhile;
        endif;
        wp_reset_query(); ?>
                </div>
                <div class="bg-shape w-100 h-auto position-absolute start-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/page-title-bottom-shape.svg" class="w-100 object-cover d-none d-md-block" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dividers/mobile-page-title.svg" class="w-100 object-cover d-md-none" alt="">
                </div>
    </section>
    <!-- Title Section End -->

    <!-- Case Studies Section Start -->
    <section class="case-studies-section everedge-blog-sec overflow-hidden">
        <div class="container">
            <div class="d-flex flex-lg-row flex-column align-items-lg-center justify-content-between text-primary">
                <h3 class="mb-0">EVEREDGE BLOG</h3>
                <ul class="filter-tab-nav d-lg-flex d-none flex-nowrap filter-title align-items-center justify-content-md-end scroll-hidden overflow-auto px-md-0 mb-0">
                    <?php
                    $terms = get_terms([
                        'taxonomy' => 'blog_posts_category',
                        'hide_empty' => false,
                    ]);
                    $i = 0;
                    foreach ($terms as $term) : ?>
                        <li><a href="javascript:void(0)" data-filter="all" class="filter-tab-btn d-block text-nowrap text-sm text-spacing font-sans fw-medium handlebar--trigger__blog <?php if ($i == 0) : echo 'active';
                                                                                                                                                                                        endif ?>" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name ?></a></li>
                    <?php $i++;
                    endforeach; ?>
                </ul>
            </div>

            <?php

            $args = array(
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 6,
                'post_type' => 'blog_posts_item',
                'offset' => '1'
            );

            $the_query = new WP_Query($args);

            ?>

            <?php

            if ($the_query->have_posts()) : ?>
                <div class="row mt-lg-5 mt-4 pt-lg-2 pt-3 blog--wrap">
                    <?php
                    $postsCount = count($the_query->posts);

                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>

                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 mb-4 filter filter-1" data-aos="fade-up">
                            <a href="<?php the_permalink(); ?>" class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                                <div class="resources-img position-relative overflow-hidden">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100 h-100 object-cover">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-placeholder.jpg" alt="<?php the_title(); ?>" class="w-100 h-100 object-cover">
                                    <?php endif; ?>
                                    <div class="resources-tag py-2 position-absolute text-xs text-uppercase text-center text-secondary">
                                        <?php
                                        $categories = get_the_terms($post->id, 'blog_posts_category');
                                        if ($categories) :
                                            $cats = '';
                                            foreach ($categories as $category) :
                                                $cats .=  $category->name . ' / ';
                                            endforeach;
                                            echo substr($cats, 0, -3);
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="card-body bg-secondary p-4 ms-lg-2 transition">
                                    <h3 class="mb-3"><?php echo wp_trim_words(get_the_title(), 3, '...'); ?></h3>
                                    <div class="text-base text-gray fw-light pe-lg-5 mb-2  2"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></div>
                                    <div class="card-arrow-btn bg-primary d-flex justify-content-center align-items-center rounded-full transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                            <path id="Path_12456" data-name="Path 12456" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>
                </div>
                <div class="text-center pt-4 pt-lg-0 <?php if ($postsCount < 6) echo 'd--none'; ?>" data-aos="fade-up">
                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-md loadMoreBlog" data-items="7">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Load More</span>
                            <div class="ms-1 btn-arrow d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.351" height="20.351" viewBox="0 0 20.351 20.351">
                                    <g id="Group_2889" data-name="Group 2889" transform="translate(3838.663 -5398.846) rotate(45)">
                                        <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#f5f3f0" stroke-linecap="round" stroke-width="1.8" />
                                        <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#f5f3f0" stroke-linecap="round" stroke-width="1.8" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </section>
    <!-- Case Studies Section End -->

    <!-- Spacer Bar -->
    <div class="spacer py-2 py-md-5"></div>
    <!-- Spacer Bar -->
</main>


<script id="handlebar-blog-template" type="text/x-handlebars-template">


    <div class="col-12 col-md-6 col-lg-4 pb-lg-5 mb-4 filter filter-1" data-aos="fade-up">
        <a href="{{ link }}"
            class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
            <div class="resources-img position-relative overflow-hidden">
                <img src="{{ image }}" alt="{{ title }}"
                    class="w-100 h-100 object-cover">
                <div
                    class="resources-tag py-2 position-absolute text-xs text-uppercase text-center text-secondary">
                    {{ cats }}
                </div>
            </div>
            <div class="card-body bg-secondary p-4 ms-lg-2 transition">
                <h3 class="mb-3">{{ title }}</h3>
                <div class="text-base text-gray fw-light pe-lg-5 mb-2  2">{{ description }}</div>
                <div
                    class="card-arrow-btn bg-primary d-flex justify-content-center align-items-center rounded-full transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                        viewBox="0 0 19.249 19.242">
                        <path id="Path_12456" data-name="Path 12456"
                            d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                            transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                    </svg>
                </div>
            </div>
        </a>
    </div>
</script>