<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


?>



<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>





<main class="pb-5">
    <?php
    // HERE we print the notices
    wc_print_notices();
    ?>
    <!-- hero section -->
    <section class="position-relative">
        <div class="container d-none">

            <?php
            if (function_exists('woocommerce_breadcrumb')) {
                woocommerce_breadcrumb(array(
                    'delimiter'   => ' / ',
                    'wrap_before' => '<nav class="d-none d-lg-block>',
                    'wrap_after'  => '</nav>',
                    'before'      => '',
                    'after'       => '',
                    'home'        => _x('Home', 'breadcrumb', 'woocommerce'),
                ));
            }
            ?>
        </div>
        <div class="container">
            <div class="row g-0 product-info-sec">
                <div class="col-lg-7 h-auto product-images-sec row row6">

                    <?php $attachment_ids = $product->get_gallery_image_ids();

                    foreach ($attachment_ids as $attachment_id) {
                    ?>
                        <div class="product-block">
                            <div class="product-img overflow-hidden">
                                <img src="<?php echo wp_get_attachment_image_url($attachment_id, 'large'); ?>" alt="image" class="w-100 h-100 object-cover">
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <?php global $product;
                ?>
                <?php if ($product->is_type('variable')) { ?>
                    <?php
                    do_action('woocommerce_single_product_summary');
                    ?>

                <?php } else { ?>

                    <?php
                    if (!$product->is_type('simple')) {

                        $attributes = $product->get_attributes();
                        $attribute_keys  = array_keys($attributes);
                        $variations_json = wp_json_encode($available_variations);
                        $variations_attr = function_exists('wc_esc_json') ? wc_esc_json($variations_json) : _wp_specialchars($variations_json, ENT_QUOTES, 'UTF-8', true);
                    }
                    ?>

                    <div class="col-lg-5 product-info-block">
                        <div class="col-lg-10 ms-auto d-flex flex-column justify-content-center h-100 pt-4 pt-lg-0 mt-3 mt-lg-0">
                            <div class="d-flex">
                                <div class=""><?php if ($product->is_in_stock()): ?> in Stock <?php else: ?> Out of stock <?php endif; ?> </div>
                                <div class=""><?php if (get_field('is_root_product')) : ?> Trad only <?php endif; ?></div>
                            </div>
                            <?php do_action('woocommerce_before_add_to_cart_form'); ?>
                            <form class="variations_form cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint($product->get_id()); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. 
                                                                                                                                                                                                                                                                                                                    ?>">

                                <?php the_title('<h1 class="headingXXL text-primary mb-2 pb-1 pb-lg-0 line-height-1">', '</h1>'); ?>



                                <?php $short_description = apply_filters('woocommerce_short_description', $post->post_excerpt);
                                if ($short_description) { ?>
                                    <div class="col-lg-10">
                                        <div class="text-sm fw-light text-gray product-description"><?php echo $short_description; // WPCS: XSS ok. 
                                                                                                    ?></div>
                                    </div>
                                <?php }

                                ?>

                                <?php if (have_rows('alternate_products')) : ?>

                                    <div class="d-flex flex-wrap justify-content-between mb-3">

                                        <?php while (have_rows('alternate_products')) :
                                            the_row(); ?>

                                            <?php $currentURL = get_permalink(); ?>

                                            <?php
                                            $product = get_sub_field('product');
                                            if ($product) :
                                                $post = $product;
                                                setup_postdata($post);
                                            ?>

                                                <a class="alternative-product-link d-inline-block <?php if ($currentURL == get_permalink()): ?>product-link-outline<?php endif; ?>" href="<?php the_permalink(); ?>">

                                                    <?php
                                                    $alternate_image = get_sub_field('alternate_image');
                                                    if ($alternate_image) : ?>

                                                        <img src="<?php echo esc_url($alternate_image['url']); ?>" alt="<?php echo esc_attr($alternate_image['alt']); ?>" class="alternative-product-image">

                                                    <?php else: ?>

                                                        <img src="<?php echo get_the_post_thumbnail_url();  ?>" class="alternative-product-image">

                                                    <?php endif; ?>

                                                    <div class="alternative-product-title text-center mt-2">

                                                        <?php if ($alternate_title = get_sub_field('alternate_title')) : ?>

                                                            <?php echo esc_html($alternate_title); ?>

                                                        <?php else: ?>

                                                            <?php the_title(); ?>

                                                        <?php endif; ?>

                                                    </div>
                                                </a>

                                                <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>

                                        <?php endwhile; ?>

                                        <?php if ($alternate_description = get_field('alternate_description')) : ?>
                                            <div class="mb-3 mt-3 text-sm fw-light font-sans text-gray short-description">
                                                <?php echo $alternate_description; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                <?php endif; ?>


                                <?php if (have_rows('related_documents')) : ?>
                                    <ul class="flex-wrap product-modal-label mb-4 pb-lg-2 pb-3 justify-content-lg-start">
                                        <?php while (have_rows('related_documents')) :
                                            the_row(); ?>

                                            <?php $file = get_sub_field('file');
                                            if ($file) : ?>
                                                <li class="">
                                                    <a target="_blank" href="<?php echo esc_url($file['url']); ?>"
                                                        class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans"><?php the_sub_field('file_title'); ?></a>
                                                </li>
                                            <?php endif; ?>

                                        <?php endwhile; ?>
                                        <li>
                                            <a class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans" href="/nbs/" target="_blank">NBS</a>
                                        </li>
                                    </ul>
                                <?php endif; ?>

                                <?php if (! have_rows('alternate_products')) : ?>
                                    <div class="border-bottom"></div>
                                <?php endif; ?>

                                <div class="product-prize pt-lg-3 mb-4 mb-lg-0 pb-lg-5 pb-3">
                                    <?php if (get_field('custom_product') != 'Yes'): ?>
                                        <h3 class="text-primary mb-lg-0 mb-3"><?php if (get_field('is_root_product')) : ?>From<?php endif; ?><?php echo $product->get_price_html(); ?><sub
                                                class="ps-2 text-xs text-capitalize font-sans">(Inc. Vat)</sub></h3>

                                        <div class="text-xs text-capitalize font-sans">(Delivery Added At Checkout)</div>
                                    <?php else: ?>
                                        <h3 class="text-primary mb-lg-0 mb-3">POA</h3>
                                    <?php endif; ?>
                                </div>

                                <div
                                    class="row my-3 my-lg-0 justify-content-end align-items-center">
                                    <?php
                                    do_action('woocommerce_before_add_to_cart_quantity'); ?>
                                    <div class="col-lg-3">

                                        <div class="prize-counters-btns font-sans d-block fw-medium controls--qty__product mb-2 me-3">
                                            <!-- <div type="button" class="cartMinusProduct bg-transparent border-0 text-primary me-2">-</div> -->
                                            <div class="fakeQtyInput">
                                                <?php
                                                woocommerce_quantity_input(
                                                    array(
                                                        'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
                                                        'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                                                        'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                                                    )
                                                );
                                                ?>
                                            </div>

                                            <!-- <div type="button" class="cartPlusProduct bg-transparent border-0 text-primary ms-2">+</div> -->
                                        </div>

                                    </div>




                                    <div class="col-lg-9">
                                        <?php if (get_field('replace_custom_button')) : ?>

                                            <a href="/contact/" class="btn-primary-bg ms-lg-auto w-100 <?php if (get_field('is_root_product')) : ?>disable-button<?php endif; ?>">Get in touch</a>

                                        <?php elseif (get_field('is_trade_product') == 'yes') : ?>

                                            <a href="/trade/" class="btn-primary-bg ms-lg-auto w-100">Contact us for price</a>

                                        <?php else : ?>

                                            <?php if (get_field('custom_product') != 'Yes'): ?>
                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="btn-primary-bg ms-lg-auto w-100 <?php if (get_field('is_root_product')) : ?>disable-button<?php endif; ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
                                            <?php else: ?>
                                                <a href="/custom-planter/" class="btn-primary-bg ms-lg-auto w-100">Start Customising</a>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                    </div>

                                </div>

                                <?php if (have_rows('product_alternative_details')): ?>
                                    <?php while (have_rows('product_alternative_details')) :  the_row();
                                        $product_description_list = get_sub_field('product_description_list');
                                        $read_more_content = get_sub_field('read_more_content');
                                    ?>
                                        <?php if (!empty($product_description_list)): ?>
                                            <?php foreach($product_description_list as $product_list): ?>
                                                <?php if(!empty($product_list['list'])): ?>
                                                    <div class=""> <?php echo $product_list['list']; ?> </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php if (!empty($read_more_content)): ?>
                                            <?php foreach($read_more_content as $read_content): ?>
                                                <?php if(!empty($read_content['title'])): ?>
                                                    <div class=""> <?php echo $read_content['title']; ?> </div>
                                                <?php endif; ?>
                                                <?php if(!empty($read_content['description'])): ?>
                                                    <div class=""> <?php echo $read_content['description']; ?> </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>


                                <?php do_action('woocommerce_before_add_to_cart_button'); ?>




                                <?php do_action('woocommerce_after_variations_form'); ?>
                            </form>
                            <?php do_action('woocommerce_after_add_to_cart_form'); ?>

                        </div>
                    </div>
                <?php } ?>
                <div class="woocommerce-notices-wrapper"></div>
            </div>
        </div>
    </section>

    <!-- choose titan -->
    <section class="choose-titan-sec why-choose-everedge bg-primary position-relative">
        <div class="container">
            <?php if ($cards_title = get_field('cards_title')) : ?>
                <h2 class="text-secondary section-title mb-0 fw-semibold"><?php echo esc_html($cards_title); ?></h2>
            <?php endif; ?>

            <div class="row g-0 mt-lg-5 mt-4 pt-lg-2 pt-1">
                <?php if (have_rows('cards')) : ?>
                    <?php while (have_rows('cards')) :
                        the_row(); ?>
                        <div class="col-12 col-lg-4">
                            <div class="d-block choose-card overflow-hidden">
                                <?php $image = get_sub_field('image');
                                if ($image) : ?>
                                    <div class="card-img overflow-hidden">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt=""
                                            class="w-100 h-100 object-cover">
                                    </div>
                                <?php endif; ?>
                                <div class="card-body text-center bg-secondary transition">
                                    <?php if ($heading = get_sub_field('heading')) : ?>
                                        <h3 class="text-primary mb-2 fw-semibold"><?php echo esc_html($heading); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($content = get_sub_field('content')) : ?>
                                        <p class="text-lg text-gray px-4 mb-0 fw-light"><?php echo $content; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php
    /*
    $attributes = $product->get_attributes();
   
    if ( ! empty( $attributes ) ) :
    
    ?>

    <!-- dimensions -->
    <section class="dimensions-sec bg-primary text-secondary pb-5 position-relative">
        <div class="container pb-3">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0 pb-2 pb-lg-0">
                    <h3 class="section-title">Product Specifications</h3>
                </div>
                <?php 
                 foreach ( $attributes as $attribute ) : 
                    $attribute_label = wc_attribute_label( $attribute->get_name() );
                    if ( $attribute->is_taxonomy() ) {
                        $attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
                        $attribute_values_string = implode( ', ', $attribute_values );
                    } else {
                        // For custom product attributes (not a taxonomy), get the values as is
                        $attribute_values_string = implode( ', ', $attribute->get_options() );
                    }
                 ?>
                    <div class="col-12 col-lg-6 dimensions-content">
                        <h4 class="medium-title mb-2 pb-1"><?php echo $attribute_label; ?>: <?php echo $attribute_values_string; ?></h4>
                     
                    </div>
                <?php break; endforeach; ?>
            </div>

			<?php $image = get_field( 'image' );
			if ( $image ) : ?>
            <div class="w-100 text-center mt-4 d-none d-lg-block">
                <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="dimension-img" class="mx-auto">
            </div>
			<?php endif; ?>

            <?php if(count($attributes) > 1) : ?>
                <div class="row justify-content-between dimension-block mt-4">
                    <?php  
                    array_shift($attributes);
                    foreach ( $attributes as $attribute ) : 
                        $attribute_label = wc_attribute_label( $attribute->get_name() );
                        if ( $attribute->is_taxonomy() ) {
                            $attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
                            $attribute_values_string = implode( ', ', $attribute_values );
                        } else {
                            // For custom product attributes (not a taxonomy), get the values as is
                            $attribute_values_string = implode( ', ', $attribute->get_options() );
                        }
                       
                    ?>
                    <div
                        class="col-12 col-lg-4 dimensions-content border-block-end text-lg-end d-flex flex-column justify-content-end pt-lg-5">
                        <h4 class="medium-title mb-2 pb-1 "><?php echo $attribute_label; ?>: <?php echo  $attribute_values_string; ?></h4>
                    </div>
                   
                    <?php $i++; endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; */ ?>

    <?php if ($video_link = get_field('video_link')) : ?>
        <!-- product video -->
        <section class="product-video-sec position-relative text-center">
            <a href="<?php echo esc_html($video_link); ?>" class="product-video-img" data-fancybox>

                <?php $video_thumbnail = get_field('video_thumbnail');
                if ($video_thumbnail) : ?>
                    <img src="<?php echo esc_url($video_thumbnail['sizes']['large']); ?>" alt="<?php echo esc_attr($video_thumbnail['alt']); ?>" class="h-100 w-100 object-cover">
                <?php endif; ?>

                <i class="fa-solid fa-play"></i>

            </a>
        </section>
    <?php endif; ?>

    <?php if (have_rows('recommended_finishes')) :


    ?>
        <?php while (have_rows('recommended_finishes')) :
            the_row();

            $finish_1 = get_sub_field('finish_1');
            $finish_2 = get_sub_field('finish_2');

            if ($finish_1 ||  $finish_2) :
        ?>
                <!-- suitable finishes -->
                <section class="suitable-finishes position-relative">
                    <div class="container">
                        <h2 class="text-primary section-title fw-semibold">MOST SUITABLE FINISHES</h2>
                        <div class="row pt-4 mt-3 flex-nowrap overflow-auto scroll-hidden -mr-4">
                            <?php

                            if ($finish_1) :
                                $post = $finish_1;
                                setup_postdata($post);
                            ?>

                                <div class="col-11 col-lg-6 px-lg-2 px-1">
                                    <a href="/finishes/#<?php echo clean(get_the_title()) ?>" class="suitable-card  overflow-hidden d-block position-relative transition">
                                        <div class="suitable-img theme-radius overflow-hidden">
                                            <?php $example_image = get_field('example_image');
                                            if ($example_image) : ?>
                                                <img src="<?php echo esc_url($example_image['sizes']['large']); ?>" alt="image"
                                                    class="w-100 h-100 object-cover">
                                            <?php endif; ?>

                                            <div class="small-img position-absolute">
                                                <?php $finish_image = get_field('finish_image');
                                                if ($finish_image) : ?>
                                                    <img src="<?php echo esc_url($finish_image['sizes']['large']); ?>" alt="about-img"
                                                        class="object-cover transition">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="suitable-card-body mt-4 pt-3">
                                            <h3 class="text-primary mb-3 fw-semibold"><?php the_title(); ?></h3>
                                            <button class="btn btn-outline-primary btn-md">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span>Learn more</span>
                                                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                                            viewBox="0 0 19.249 19.242">
                                                            <path id="Path_12443" data-name="Path 12443"
                                                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                            <?php
                            $finish_2 = get_sub_field('finish_2');
                            if ($finish_2) :
                                $post = $finish_2;
                                setup_postdata($post);
                            ?>

                                <div class="col-11 col-lg-6 px-lg-2 px-1">
                                    <a href="/finishes/#<?php echo clean(get_the_title()) ?>" class="suitable-card  overflow-hidden d-block position-relative">
                                        <div class="suitable-img theme-radius overflow-hidden">
                                            <?php $example_image = get_field('example_image');
                                            if ($example_image) : ?>
                                                <img src="<?php echo esc_url($example_image['sizes']['large']); ?>" alt="image"
                                                    class="w-100 h-100 object-cover">
                                            <?php endif; ?>

                                            <div class="small-img position-absolute">
                                                <?php $finish_image = get_field('finish_image');
                                                if ($finish_image) : ?>
                                                    <img src="<?php echo esc_url($finish_image['sizes']['large']); ?>" alt="about-img"
                                                        class="object-cover transition">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="suitable-card-body mt-4 pt-3">
                                            <h3 class="text-primary mb-3 fw-semibold"><?php the_title(); ?></h3>
                                            <button class="btn btn-outline-primary btn-md">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span>Learn more</span>
                                                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                                            viewBox="0 0 19.249 19.242">
                                                            <path id="Path_12443" data-name="Path 12443"
                                                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
        <?php endif;
        endwhile; ?>
    <?php endif; ?>

    <!-- faqs -->
    <section class="bg-primary bg-green-img product-faqs">
        <div class="container">
            <div class="col-lg-10 px-lg-5 mx-auto">
                <h3 class="headingL text-white text-center mb-0 fw-semibold">FREQUENTLY ASKED QUESTIONS</h3>
                <div class="pt-4 mt-2 mt-lg-0 pt-md-5">
                    <div class="accordion theme-accordion" id="accordionExample1">
                        <?php

                        $relatedQuestions = get_field('related_faq_questions');

                        $args = array(
                            'post_type' => 'questions_post_item',
                            'order' => 'DESC',
                            'orderby' => 'date',
                            'posts_per_page' => 3,
                        );

                        if ($relatedQuestions) {
                            $args['post__in'] = $relatedQuestions;
                            $args['posts_per_page'] = 99;
                        }

                        $the_query = new WP_Query($args);

                        $i = 0;

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php the_id(); ?>">
                                        <button class="accordion-button medium-title text-primary collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?php the_id(); ?>" aria-expanded="false"
                                            aria-controls="collapse<?php echo $i; ?>">
                                            <span class="fw-semibold"><?php the_title(); ?></span>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php the_id(); ?>" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 text-gray text-sm">
                                            <div class="col-lg-10 pe-lg-4">
                                                <div class="pb-lg-4 pb-3"><?php the_content(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php $i++;
                            endwhile;
                        endif;
                        wp_reset_query(); ?>
                        <div class="text-center mt-4 pt-2">
                            <a href="/faqs/" class="btn">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>View all</span>
                                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                            viewBox="0 0 19.249 19.242">
                                            <path id="Path_12443" data-name="Path 12443"
                                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (have_rows('related_posts')) : ?>
        <?php while (have_rows('related_posts')) :
            the_row(); ?>
            <!-- related post -->
            <section class="related-post-sec position-relative">
                <div class="container">
                    <h2 class="section-title text-primary">RELATED POSTS</h2>
                    <div class="row mt-4 pt-3 flex-nowrap overflow-auto scroll-hidden -mr-4">
                        <?php
                        $post_1 = get_sub_field('post_1');
                        if ($post_1) :
                            $post = $post_1;
                            setup_postdata($post);
                        ?>

                            <div class="col-11 col-lg-6 px-2">
                                <a href="<?php the_permalink(); ?>"
                                    class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                                    <div class="resources-img position-relative overflow-hidden">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="resources-img"
                                            class="w-100 h-100 object-cover">
                                        <?php
                                        $categories = get_the_terms($post->id, 'blog_posts_category');
                                        if ($categories):
                                            $cats = '';
                                            foreach ($categories as $category): ?>
                                                <div
                                                    class="resources-tag  position-absolute text-lg text-uppercase text-center text-secondary">
                                                    <?php echo $category->name ?>
                                                </div>
                                        <?php endforeach;

                                        endif;
                                        ?>

                                    </div>
                                    <div class="card-body bg-white p-4 transition">
                                        <h3 class=" mb-3"><?php echo wp_trim_words(get_the_title(), 3, '...'); ?></h3>
                                        <div class="text-gray fw-light pe-lg-5 me-lg-5 mb-2 pb-1  2">
                                            <?php the_content(); ?>
                                        </div>
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
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <?php
                        $post_2 = get_sub_field('post_2');
                        if ($post_2) :
                            $post = $post_2;
                            setup_postdata($post);
                        ?>

                            <div class="col-11 col-lg-6 px-2">
                                <a href="<?php the_permalink(); ?>"
                                    class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                                    <div class="resources-img position-relative overflow-hidden">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="resources-img"
                                            class="w-100 h-100 object-cover">
                                        <div
                                            class="resources-tag  position-absolute text-lg text-uppercase text-center text-secondary">
                                            GENERAL
                                        </div>
                                    </div>
                                    <div class="card-body bg-white p-4 transition">
                                        <h3 class="mb-3"><?php echo wp_trim_words(get_the_title(), 3, '...'); ?></h3>
                                        <div class="text-gray fw-light pe-lg-5 me-lg-5 mb-2 pb-1  2">
                                            <?php the_content(); ?></div>
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
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ($heading = get_field('heading', 'options')) : ?>
        <!-- the-trade -->
        <section class="the-trade  product-trade-sec">
            <div class="container">
                <div class="trade-content-box theme-radius overflow-hidden">
                    <div class="trade-img">

                        <?php $image = get_field('image', 'options');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="trade-img"
                                class="w-100 h-100 object-cover d-none d-lg-block">
                        <?php endif; ?>

                        <?php $image_mobile = get_field('image_mobile', 'options');
                        if ($image_mobile) : ?>
                            <img src="<?php echo esc_url($image_mobile['sizes']['large']); ?>" alt="trade-img"
                                class="w-100 h-100 object-cover d-block d-lg-none">
                        <?php endif; ?>

                    </div>
                    <div class="trade-info">

                        <h2 class="headingXL text-secondary mb-2 fw-semibold"><?php echo esc_html($heading); ?></h2>
                        <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start">
                            <?php if ($content = get_field('content', 'options')) : ?>
                                <div class="col-lg-8 mb-2 pb-1 pb-lg-0 mb-lg-0">
                                    <div class="text-lg fw-light text-secondary opacity-75 mb-0  2">
                                        <?php echo $content; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($link = get_field('link', 'options')) : ?>
                                <a href="<?php echo esc_html($link); ?>" class="btn btn-lg">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><?php the_field('button', 'options'); ?></span>
                                        <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- div border -->
    <div class="container">
        <div class="border-bottom d-block d-lg-none"></div>
    </div>


    <?php if (have_rows('testimonials', 'options')) : ?>
        <!-- Why choose everedge Start -->
        <section class="why-choose-sec slick-overflow">
            <div class="container">
                <h2 class="section-title text-primary mb-5 pb-lg-2 text-center fw-semibold">WHY CHOOSE EVEREDGE?</h2>
                <div class="col-lg-8 choose-slider mx-auto">
                    <?php while (have_rows('testimonials', 'options')) :
                        the_row(); ?>

                        <div class="px-lg-3">
                            <div class="choose-box bg-primary text-white">

                                <?php if ($heading = get_sub_field('heading', 'options')) : ?>
                                    <h4 class="mb-3 fw-semibold"><?php echo esc_html($heading); ?></h4>
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

    <!-- div border -->
    <div class="container">
        <div class="border-bottom d-block d-lg-none"></div>
    </div>

    <!-- want to explore -->
    <section class="want-to-explore">
        <div class="container text-center">
            <?php if ($heading_top = get_field('heading_top', 'options')) : ?>
                <h3 class="text-primary mb-0 line-height-1 fw-semibold"><?php echo esc_html($heading_top); ?></h3>
            <?php endif; ?>

            <?php if ($heading_bottom = get_field('heading_bottom', 'options')) : ?>
                <h5 class="headingL text-primary-light mb-lg-4 pb-2 mb-lg-0 mb-1 fw-semibold"><?php echo esc_html($heading_bottom); ?></h5>
            <?php endif; ?>

            <?php if ($link = get_field('link_link', 'options')) : ?>
                <a href="<?php echo esc_html($link); ?>" class="btn btn-outline-primary">
                    <div class="d-flex justify-content-between align-items-center">
                        <span><?php the_field('link_button', 'options'); ?></span>
                        <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
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
        </div>
    </section>

    <section class="hero-section home-bottom-cards product-bottom-card pb-0">
        <div class="container">
            <div class="row g-0 -mx-4">

                <?php if (have_rows('blocks', 'options')) : ?>
                    <?php while (have_rows('blocks', 'options')) :
                        the_row(); ?>
                        <div class="col-12 col-lg-6 px-lg-2">
                            <?php if ($link = get_sub_field('link', 'options')) : ?>
                                <a href="<?php echo esc_html($link); ?>" class="theme-radius d-block card-hover overflow-hidden w-100">
                                    <div class="hero-img position-relative overflow-hidden">
                                        <?php $background_image = get_sub_field('background_image', 'options');
                                        if ($background_image) : ?>
                                            <img src="<?php echo esc_url($background_image['sizes']['large']); ?>" alt="<?php echo esc_attr($background_image['alt']); ?>"
                                                class="h-100 w-100 object-cover">
                                        <?php endif; ?>
                                        <div
                                            class="position-absolute top-50 translate-middle-y hero-content w-100 text-lg-center text-start">
                                            <?php if ($heading = get_sub_field('heading', 'options')) : ?>
                                                <h2 class="section-title text-secondary mb-lg-3 mb-2 pb-1 fw-semibold"><?php echo esc_html($heading); ?></h2>
                                            <?php endif; ?>
                                            <button class="btn">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span>View all</span>
                                                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                                            viewBox="0 0 19.249 19.242">
                                                            <path id="Path_12443" data-name="Path 12443"
                                                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <!-- new design -->

    <!-- Why chhose Us -->
    <?php if (have_rows('why_choose_everedge')) : ?>
        <section class="why-choose-everedge-sec" style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/home/everedge-rust-min-min.jpg') no-repeat;">
            <div class="padding-top--140px"></div>
            <div class="container">
                <div class="row">
                    <?php while (have_rows('why_choose_everedge')): the_row();
                        $title = get_sub_field('title');
                        $button = get_sub_field('button');
                        $accordion_group = get_sub_field('accordion_group');
                    ?>
                        <div class="col-lg-4">
                            <?php if (!empty($title)): ?>
                                <div class=" text-white font-sans font50 leading60 mb-4 pe-5"><?php echo $title; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($button)): ?>
                                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-lg">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>
                                            <?php echo $button['title']; ?>
                                        </span>
                                        <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                                <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-8">
                            <?php if (!empty($accordion_group)): ?>
                                <div class="accordion why-us-accordion" id="accordionExample">
                                    <?php foreach ($accordion_group as $key => $a_group): ?>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="heading-<?php echo $key; ?>">
                                                <button class="accordion-button medium-title alt-font text-white collapsed " type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $key; ?>" aria-expanded="false"
                                                    aria-controls="collapse<?php echo $key; ?>">
                                                    <span class="fw-normal"><?php echo $a_group['title'] ?></span>
                                                </button>
                                            </div>
                                            <div id="collapse-<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body p-0 alt-font text-white text-sm">
                                                    <div class="col-lg-11 pt-3">
                                                        <div class=""><?php echo $a_group['description'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="padding-top--130px"></div>
        </section>
    <?php endif; ?>
    <!-- installation and versatility -->
    <?php if (have_rows('installation_and_versatility')) : ?>
        <section class="bg-secondary installation-section">
            <div class="padding-top--95px"></div>
            <div class="container">
                <div class="row row8">
                    <?php while (have_rows('installation_and_versatility')) :
                        the_row();
                        $image_position = get_sub_field('image_position');
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $installation_cards = get_sub_field('installation_cards');
                    ?>
                        <?php if ($image_position == 'left'): ?>
                            <div class="col-lg-6">
                                <div class="img-part border--radius overflow-hidden position-relative">
                                    <img src="<?php echo $image['sizes']['fullscreen'] ?>" alt="<?php echo $image['title'] ?>" class="h-100 w-100 object-cover">
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-6">
                            <div class="">
                                <?php if (!empty($title)): ?>
                                    <div class="text-primary font-sans font50 leading60 col-lg-6">
                                        <?php echo $title; ?>
                                    </div>
                                    <div class="padding-top--30px"></div>
                                <?php endif; ?>

                                <?php if (!empty($installation_cards)): ?>
                                    <div class="row row8">
                                        <?php foreach ($installation_cards as $installation): ?>
                                            <div class="col-lg-6 mb-3">
                                                <div class="bg-white installation-card border--radius">
                                                    <?php if (!empty($installation['icon'])): ?>
                                                        <div class="icon_img">
                                                            <img src="<?php echo $installation['icon']['url'] ?>" alt="<?php echo $installation['icon']['title'] ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($installation['title'])): ?>
                                                        <div class="text-black text-lg alt-font mb-3 fw-medium installation_title">
                                                            <?php echo $installation['title'] ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($installation['content'])): ?>
                                                        <div class="text-7C7C7C text-sm text-spacing alt-font installation_content">
                                                            <?php echo $installation['content'] ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($installation['link'])): ?>
                                                        <a href="<?php echo $installation['link']['url'] ?>" target="<?php echo $installation['link']['target'] ?>" class="text-7C7C7C fw-normal text-sm text-spacing alt-font text-decoration-underline">
                                                            <?php echo $installation['link']['title'] ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($image_position == 'right'): ?>
                            <div class="col-lg-6">
                                <div class="img-part border--radius overflow-hidden position-relative">
                                    <img src="<?php echo $image['sizes']['fullscreen'] ?>" alt="<?php echo $image['title'] ?>" class="h-100 w-100 object-cover">
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="padding-top--95px"></div>
        </section>
    <?php endif; ?>


    <!-- testimonial -->
    <?php if ($customer_satisfaction_guaranteed = get_field('customer_satisfaction_guaranteed', 'options')) :
    ?>
        <section class="testimonial-section">
            <div class="container">
                <?php
                $title = $customer_satisfaction_guaranteed['title'];
                $testimonial_logo = $customer_satisfaction_guaranteed['testimonial_logo'];
                $testimonial_card = $customer_satisfaction_guaranteed['testimonial_card'];
                ?>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <?php if (!empty($title)): ?>
                        <div class="font50 leading60 font-sans text-primary"><?php echo $title ?></div>
                    <?php endif; ?>
                    <?php if (!empty($testimonial_logo)): ?>
                        <div class=""><img src="<?php echo $testimonial_logo['sizes']['medium'] ?>" alt="<?php echo $testimonial_logo['alt'] ?>"></div>
                    <?php endif; ?>
                </div>
                <?php if (!empty($testimonial_card)): ?>
                    <div class="testimonial-slider">
                        <?php foreach ($testimonial_card as $testimonial): ?>
                            <div class="bg-white border--radius h-100 testimonial-card d-flex flex-column justify-content-between">
                                <div class="">
                                    <div class="stars-img mb-2">
                                        <img src="<?php echo get_template_directory_uri() ?>/templates/icons/stars-5.svg" alt="stars-5" class="h-100 w-auto">
                                    </div>
                                    <?php if (!empty($testimonial['title'])): ?>
                                        <div class="text-lg alt-font testimonial-title col-lg-11"><?php echo $testimonial['title']; ?></div>
                                    <?php endif; ?>
                                    <?php if (!empty($testimonial['description'])): ?>
                                        <div class="text-xs text-7C7C7C alt-font testimonial-content col-lg-11"><?php echo $testimonial['description']; ?></div>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($testimonial['name'] || $testimonial['date'])): ?>
                                    <div class="d-flex">
                                        <div class="text-xs text-black alt-font testimonial-content"><?php echo $testimonial['name']; ?></div>
                                        <div class="text-xs text-black alt-font testimonial-content"><?php echo $testimonial['date']; ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Related Post -->

    <?php if (have_rows('related_product')): ?>
        <section class="related-post">
            <div class="padding-top--95px"></div>
            <div class="container">
                <?php while (have_rows('related_product')) :
                    the_row();
                    $title = get_sub_field('title');
                    $select_product = get_sub_field('select_product');
                ?>
                    <div class="">
                        <?php if (!empty($title)): ?>
                            <div class="text-primary font-sans font50 leading60 mb-3"><?php echo $title; ?></div>
                        <?php endif; ?>
                        <div class="row row6 ">
                            <?php if (!empty($select_product)): ?>
                                <?php foreach ($select_product as $s_product):
                                    $related_product = wc_get_product($s_product->ID);
                                    if (!$related_product) continue;
                                ?>
                                    <div class="col-lg-3 product-box mb-3">
                                        <a href="<?php echo get_permalink($s_product->ID); ?>">
                                            <div class="product-img position-relative overflow-hidden">
                                                <img src="<?php echo get_the_post_thumbnail_url($s_product->ID); ?>" alt="" class="dynamic-image">
                                            </div>
                                        </a>
                                        <div class="product-title mt-3 font-body fw-medium text-primary text-uppercase dynamic-title"><?php echo esc_html($related_product->get_name()); ?></div>
                                        <div class="product-price fw-medium text-base alt-font mt-1 text-7C7C7C dynamic-price"><?php echo $related_product->get_price_html(); ?></div>

                                        <?php if ($related_product->is_type('variable')): ?>
                                            <?php
                                            $available_variations = $related_product->get_available_variations();
                                            $color_variations = [];
                                            foreach ($available_variations as $variation) {
                                                $attributes = $variation['attributes'];
                                                if (isset($attributes['attribute_finish'])) {
                                                    $slug = $attributes['attribute_finish'];
                                                    if (!isset($color_variations[$slug])) {
                                                        $color_variations[$slug] = [
                                                            'slug'     => $slug,
                                                            'image'    => $variation['image']['url'] ?? '',
                                                            'price'    => wc_price($variation['display_price']),
                                                        ];
                                                    }
                                                } elseif (isset($attributes['attribute_pa_finish'])) {
                                                    $slug = $attributes['attribute_pa_finish'];
                                                    if (!isset($color_variations[$slug])) {
                                                        $color_variations[$slug] = [
                                                            'slug'     => $slug,
                                                            'image'    => $variation['image']['url'] ?? '',
                                                            'price'    => wc_price($variation['display_price']),
                                                        ];
                                                    }
                                                }
                                            }
                                            $color_variations = array_unique($color_variations, SORT_REGULAR);
                                            ?>

                                            <?php if (!empty($color_variations)): ?>
                                                <div class="product-color-variations d-flex mt-2">
                                                    <?php $i = 0;
                                                    foreach ($color_variations as $variation_data):

                                                        $color_slug = $variation_data['slug'];
                                                        $term = get_term_by('slug', $color_slug, 'pa_finish');

                                                        if ($term):
                                                            $primary_color   = get_term_meta($term->term_id, 'product_attribute_color', true);
                                                            $is_dual_color   = get_term_meta($term->term_id, 'is_dual_color', true);
                                                            $secondary_color = get_term_meta($term->term_id, 'secondary_color', true);

                                                            $style = ($is_dual_color === 'yes' && !empty($secondary_color))
                                                                ? "background: linear-gradient(130deg, $primary_color 50%, $secondary_color 50%)"
                                                                : "background-color: $primary_color";

                                                            $active_class = ($i === 0) ? 'active' : '';
                                                    ?>
                                                            <span class="swatch d-block rounded-full me-2 cursor-pointer <?php echo $active_class; ?>"
                                                                title="<?php echo esc_attr($term->name); ?>"
                                                                style="<?php echo esc_attr($style); ?>"
                                                                data-image="<?php echo esc_url($variation_data['image']); ?>"
                                                                data-price="<?php echo esc_attr($variation_data['price']); ?>"
                                                                data-title="<?php echo esc_attr(get_the_title()); ?>">
                                                            </span>
                                                    <?php $i++;
                                                        endif;
                                                    endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach;
                                wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="padding-top--95px"></div>
        </section>
    <?php endif; ?>
    <?php if ($heading = get_field('heading', 'options')) : ?>
        <!-- the-trade -->
        <section class="the-trade pt-0 pb-0 product-trade-sec">
            <div class="padding-top--100px"></div>

            <div class="container">
                <div class="trade-content-box theme-radius overflow-hidden d-flex bg-primary" data-aos="fade-up">

                    <div class="col-lg-6 h-100">
                        <div class="trade-content">
                            <div class="font50 leading60 fw-medium font-sans text-secondary mb-2"><?php echo esc_html($heading); ?></div>
                            <div class="">
                                <?php if ($content = get_field('content', 'options')) : ?>
                                    <div class="col-lg-10">
                                        <div class="text-sm pb-2 alt-font text-secondary text-spacing">
                                            <?php echo $content; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($link = get_field('link', 'options')) : ?>
                                    <a href="<?php echo esc_html($link); ?>" class="btn btn-lg">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><?php the_field('button', 'options'); ?></span>
                                            <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                                    <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php $image = get_field('image', 'options');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover d-none d-lg-block">
                        <?php endif; ?>
                        <?php $image_mobile = get_field('image_mobile', 'options');
                        if ($image_mobile) : ?>
                            <img src="<?php echo esc_url($image_mobile['sizes']['large']); ?>" alt="<?php echo esc_url($image_mobile['alt']); ?>" class="w-100 h-100 object-cover d-block d-lg-none">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Center text with read more -->
    <?php if ($center_text_with_read_more = get_field('center_text_with_read_more', 'options')) :
    ?>
        <section class="center-text-section">
            <div class="padding-top--95px"></div>
            <div class="container">
                <?php
                $title = $center_text_with_read_more['title'];
                $description = $center_text_with_read_more['description'];
                ?>
                <div class="text-center col-lg-9 mx-auto">
                    <div class="col-lg-11 px-2 mx-auto">
                        <?php if (!empty($title)): ?>
                            <div class="font50 leading60 font-sans text-primary mb-3"><?php echo $title ?></div>
                        <?php endif; ?>
                        <?php if (!empty($description)): ?>
                            <div class="text-base alt-font text-7C7C7C description-text"><?php echo $description ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="padding-top--50px"></div>

        </section>
    <?php endif; ?>

</main>


<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>



<?php
// get_footer( 'shop' );



/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
