<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;



$pageUrl = $_SERVER['REQUEST_URI'];
if ($_GET) {
    $filters = explode(' ', $_GET['filters']);
}

$cat = get_queried_object();
$catId = $cat->term_id;


$parentID = $cat->parent;

?>
<span class="catId" data-cat-id="<?php echo $catId ?>"></span>

<main>
    <section class="category-page pt-lg-5 mt-lg-4 mt-3">
        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-12 mx-auto">
                    <?php if ($header = get_field('header', 'product_cat' . '_' . $catId)) : ?>
                        <h1 class="headingXL text-primary mb-lg-2 mb-4 pb-2 text-center line-height-1" data-aos="fade-up">
                            <?php echo $header; ?>
                        </h1>
                    <?php endif; ?>


                    <?php if ($subheader = get_field('subheader', 'product_cat' . '_' . $catId)) : ?>
                        <div class="category-subtitle mb-lg-5 mb-5 pb-1 text-lg fw-medium text-gray alt-font mx-auto text-center" data-aos="fade-up">
                            <?php echo $subheader; ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-3 text-primary pe-lg-3">

                    <!-- this div for Mobile -->
                    <div class="filter-trigger d-flex d-md-none align-items-center mb-4 pb-2 cursor-pointer text-primary" data-menu="true" data-menu-name="#product-filter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.895" height="23.217" viewBox="0 0 20.895 23.217">
                            <path id="Path_12607" data-name="Path 12607" d="M105.48,56.682A1.677,1.677,0,1,1,103.8,55,1.677,1.677,0,0,1,105.48,56.682Zm1.608,1.161a3.484,3.484,0,0,1-6.569,0H99.16a1.161,1.161,0,0,1,0-2.322h1.359a3.484,3.484,0,0,1,6.569,0h12.967a1.161,1.161,0,0,1,0,2.322Zm8.324,9.287a3.484,3.484,0,0,0,3.284-2.322h1.359a1.161,1.161,0,1,0,0-2.322H118.7a3.484,3.484,0,0,0-6.569,0H99.16a1.161,1.161,0,1,0,0,2.322h12.967A3.484,3.484,0,0,0,115.412,67.129ZM99.16,69.451a1.161,1.161,0,0,0,0,2.322H104a3.484,3.484,0,0,0,6.57,0l.068,0h9.416a1.161,1.161,0,1,0,0-2.322h-9.416l-.068,0a3.484,3.484,0,0,0-6.57,0Zm6.449,1.161a1.677,1.677,0,1,0,1.677-1.677A1.677,1.677,0,0,0,105.609,70.612Zm9.8-5.288a1.677,1.677,0,1,0-1.677-1.677A1.677,1.677,0,0,0,115.412,65.323Z" transform="translate(74.094 -97.999) rotate(90)" fill="#61714b" fill-rule="evenodd" />
                        </svg>
                        <h3 class="text-primary text-xxl text-uppercase ms-3 mb-0 fw-semibold">
                            FILTER BY
                        </h3>
                    </div>

                    <div class="filter-block product-filter theme-radius bg-secondary" id="product-filter">
                        <!-- div close -->
                        <div class="filter-close text-end mb-5 mb-2  me-3 d-lg-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663" viewBox="0 0 15.73 15.663">
                                <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
                                    <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                                    <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                                </g>
                            </svg>

                        </div>
                        <!--END this div for Mobile -->
                        <div class="d-flex align-items-center pb-4 pb-lg-0 mb-3 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.895" height="23.217" viewBox="0 0 20.895 23.217" class="d-block d-lg-none me-3">
                                <path id="Path_12607" data-name="Path 12607" d="M105.48,56.682A1.677,1.677,0,1,1,103.8,55,1.677,1.677,0,0,1,105.48,56.682Zm1.608,1.161a3.484,3.484,0,0,1-6.569,0H99.16a1.161,1.161,0,0,1,0-2.322h1.359a3.484,3.484,0,0,1,6.569,0h12.967a1.161,1.161,0,0,1,0,2.322Zm8.324,9.287a3.484,3.484,0,0,0,3.284-2.322h1.359a1.161,1.161,0,1,0,0-2.322H118.7a3.484,3.484,0,0,0-6.569,0H99.16a1.161,1.161,0,1,0,0,2.322h12.967A3.484,3.484,0,0,0,115.412,67.129ZM99.16,69.451a1.161,1.161,0,0,0,0,2.322H104a3.484,3.484,0,0,0,6.57,0l.068,0h9.416a1.161,1.161,0,1,0,0-2.322h-9.416l-.068,0a3.484,3.484,0,0,0-6.57,0Zm6.449,1.161a1.677,1.677,0,1,0,1.677-1.677A1.677,1.677,0,0,0,105.609,70.612Zm9.8-5.288a1.677,1.677,0,1,0-1.677-1.677A1.677,1.677,0,0,0,115.412,65.323Z" transform="translate(74.094 -97.999) rotate(90)" fill="#61714b" fill-rule="evenodd" />
                            </svg>
                            <h4 class="mb-lg-4 mb-0 pb-lg-2 open-filter-label fw-semibold
                            ">FILTER BY</h4>
                        </div>
                        <ul class="ps-0 mb-0">
                            <?php
                            $terms = get_terms(
                                array(
                                    'taxonomy'   => 'product_cat',
                                    'hide_empty' => false,
                                )
                            ); ?>
                            <?php foreach ($terms as $term) : ?>
                                <?php if ($term->parent == $parentID) { ?>
                                    <?php
                                    $active = false;
                                    if (preg_match('/(?>(^|[^0-9])' . $term->term_id . '([^0-9]|$))/', $pageUrl)) {
                                        $active = 'checked';
                                    }


                                    ?>

                                    <li class="d-flex cursor-pointer align-items-center mb-4">
                                        <div class="checkbox-control me-md-3 me-3">
                                            <input type="checkbox" <?php echo $active ?> name="filter" id="category<?php echo $term->term_id ?>" value="<?php echo $term->term_id ?>" <?php if (($catId == $term->term_id && $active) || ($catId == $term->term_id && !isset($_GET['filters']))) : echo 'checked';
                                                                                                                                                                                    endif ?>>
                                            <span class="d-block theme-checkbox"></span>
                                        </div>
                                        <label for="category<?php echo $term->term_id ?>" class="w-100 cursor-pointer font-sans filter-lable"><?php echo $term->name; ?></label>
                                    </li>
                                <?php } ?>
                            <?php endforeach; ?>
                        </ul>

                        <button type="button" class="btn btn-primary filterTrigger">Filter</button>
                    </div>
                </div>
                <div class="col-lg-9 ps-lg-3 filter-image-box">
                    <?php

                    /**
                     * Hook: woocommerce_before_shop_loop.
                     *
                     * @hooked woocommerce_output_all_notices - 10
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    // do_action('woocommerce_before_shop_loop');



                    ?>

                    <?php

                    if (woocommerce_product_loop()) {

                        woocommerce_product_loop_start();


                        $tax_query = array();
                        if ($filters) {

                            foreach ($filters as $filter) {


                                $filter = explode(',', $filter);
                                //$filter = implode(',',$filter);


                                array_push(
                                    $tax_query,
                                    array(
                                        'relation' => 'OR',
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'terms' => $filter,
                                            'field' => 'term_id',
                                            'operator' => 'IN'
                                        )
                                    )
                                );
                            }
                        } else {

                            array_push(
                                $tax_query,
                                array(
                                    'relation' => 'AND',
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'terms' => $catId,
                                        'field' => 'term_id',
                                        'operator' => 'IN'
                                    )
                                )
                            );
                        }

                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => 21,
                            'tax_query' => $tax_query,
                            'paged' => $paged,
                            'post__not_in' => array(29670, 29669, 29668),
                        );




                        $result = new WP_Query($args);

                        if ($result->have_posts()) :
                            $i = 0;
                            while ($result->have_posts()) : $result->the_post();

                                wc_get_template_part('content', 'product');
                            endwhile ?>

                            <div class="cat-pagination">
                                <?php
                                echo paginate_links(array(
                                    'base'         => str_replace(100, '%#%', esc_url(get_pagenum_link(100))),
                                    'total'        => $result->max_num_pages,
                                    'current'      => $paged,
                                    //'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'plain',

                                ));
                                // Restore original Post Data
                                wp_reset_postdata();
                                ?>
                            </div>
                        <?php else : ?>
                            <p>There are no product available, please try changing your selection</p>
                    <?php endif;

                        woocommerce_product_loop_end();


                        /**
                         * Hook: woocommerce_after_shop_loop.
                         *
                         * @hooked woocommerce_pagination - 10
                         */
                        do_action('woocommerce_after_shop_loop');
                    } else {
                        /**
                         * Hook: woocommerce_no_products_found.
                         *
                         * @hooked wc_no_products_found - 10
                         */
                        do_action('woocommerce_no_products_found');
                    }

                    /**
                     * Hook: woocommerce_after_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action('woocommerce_after_main_content');
                    ?>

                    <div class="text-center mt-4 mt-lg-3 d-none">
                        <a href="javascript:void(0);" class="btn btn-outline-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Load more</span>
                                <div class="ms-1 btn-arrow load-more-bg rounded-full bg-primary d-flex justify-content-center align-items-center">
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
                </div>
            </div>
        </div>
    </section>


    <?php if (have_rows('faqs-repeater', 'product_cat' . '_' . $catId)) : ?>
        <section class="faqs-page text-white bg-green-img">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-xl-10 px-lg-5  mx-auto">
                        <div class="col-lg-9 mx-auto px-lg-4 text-center">
                            <h2 class="font-medium text-uppercase text-title mb-0 pb-lg-1 pb-2">FREQUENTLY ASKED QUESTIONS
                            </h2>
                        </div>
                        <div class="accordion theme-accordion mt-lg-5 mt-4 pt-2 questions--wrap" id="accordionExample">

                            <?php $i = 0; ?>

                            <?php while (have_rows('faqs-repeater', 'product_cat' . '_' . $catId)) :
                                the_row(); ?>

                                <?php
                                $faqs = get_sub_field('faqs');
                                if ($faqs) :
                                    $post = $faqs;
                                    setup_postdata($post);

                                    $post_title = get_the_title($post);
                                    $post_content = get_the_content(null, false, $post);
                                    $post_id = get_the_ID($post);

                                ?>

                                    <div class="accordion-item" data-aos="fade-up">
                                        <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                            <button class="accordion-button medium-title text-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                                <span><?php echo $post_title; ?></span>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 text-gray text-sm">
                                                <div class="col-lg-10 pe-lg-4">
                                                    <div class="pb-lg-4 pb-3"><?php echo $post_content; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>

                                <?php $i++; ?>

                            <?php endwhile; ?>



                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php if ( have_rows( 'image_content_block', 'product_cat' . '_' . $catId ) ) : ?>
        <?php while ( have_rows( 'image_content_block', 'product_cat' . '_' . $catId ) ) :
            the_row(); ?>

            <!-- little about us -->
            <section class="little-about-us position-relative pt-lg-4 home-about-sec">
                <div class="container pt-5 pt-lg-0">
                    <div class="row g-0 justify-content-between">
                        <div class="col-12 col-lg-5 col-xxl-6">
                            <div class="col-lg-11 mx-auto about-content d-flex flex-column justify-content-center align-items-start ps-lg-5 h-100">
                                <?php if ($content_heading = get_sub_field('content_heading')) : ?>
                                    <h3 class="section-title text-primary mb-4 pb-lg-2 line-height-1" data-aos="fade-up"><?php echo esc_html($content_heading); ?></h3>
                                <?php endif; ?>

                                <?php if ($content_content = get_sub_field('content_content')) : ?>
                                    <div class="text-lg mb-lg-3 mb-4 text-gray  fw-light  6 pe-lg-1" data-aos="fade-up"><?php echo $content_content; ?></div>
                                <?php endif; ?>

                                <?php if ($content_subheading = get_sub_field('content_subheading')) : ?>
                                    <h3 class="headingM text-primary mb-4 pb-lg-2 line-height-1 text-xl" data-aos="fade-up"><?php echo esc_html($content_subheading); ?></h3>
                                <?php endif; ?>

                                <?php if ($content_subcontent = get_sub_field('content_subcontent')) : ?>
                                    <div class="text-lg mb-lg-3 mb-4 text-gray  fw-light  6 pe-lg-1" data-aos="fade-up"><?php echo $content_subcontent; ?></div>
                                <?php endif; ?>

                                <?php if (have_rows('content_buttons')) : ?>
                                    <?php while (have_rows('content_buttons')) :
                                        the_row(); ?>

                                        <?php if ($link = get_sub_field('link')) : ?>
                                            <a href="<?php echo esc_html($link); ?>" class="btn btn-md btn-outline-primary" data-aos="fade-up">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <?php if ($button_text = get_sub_field('button_text')) : ?>
                                                        <span><?php echo esc_html($button_text); ?></span>
                                                        <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                                                <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                            </svg>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-12 col-lg-7 col-xxl-6 position-relative ps-xl-5 pt-5 pt-lg-0 mx-auto">
                            <div class=" about-img ps-xl-4 position-relative" data-aos="fade-up">
                                <?php $content_large_image = get_sub_field('content_large_image');
                                if ($content_large_image) : ?>
                                    <img src="<?php echo esc_url($content_large_image['sizes']['large']); ?>" alt="about-img" class="object-cover">
                                <?php endif; ?>

                                <?php $content_small_image = get_sub_field('content_small_image');
                                if ($content_small_image) : ?>
                                    <div class="small-img position-absolute">
                                        <img src="<?php echo esc_url($content_small_image['sizes']['large']); ?>" alt="about-img" class="object-cover transition">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>



</main>