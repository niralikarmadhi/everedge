<?php

/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters('woocommerce_short_description', $post->post_excerpt);

if (!$short_description) {
    return;
}

?>
<div class="col-lg-10">
    <div class="mb-3 text-sm fw-light font-sans text-gray short-description">
        <?php echo $short_description; // WPCS: XSS ok. 
        ?>
    </div>
</div>


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

                <a class="alternative-product-link d-inline-block <?php if ($currentURL == get_permalink()) : ?>product-link-outline<?php endif; ?>" href="<?php the_permalink(); ?>">

                    <?php
                    $alternate_image = get_sub_field('alternate_image');
                    if ($alternate_image) : ?>

                        <img src="<?php echo esc_url($alternate_image['url']); ?>" alt="<?php echo esc_attr($alternate_image['alt']); ?>" class="alternative-product-image">

                    <?php else : ?>

                        <img src="<?php echo get_the_post_thumbnail_url();  ?>" class="alternative-product-image">

                    <?php endif; ?>

                    <div class="alternative-product-title text-center mt-2">

                        <?php if ($alternate_title = get_sub_field('alternate_title')) : ?>

                            <?php echo esc_html($alternate_title); ?>

                        <?php else : ?>

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



<ul class=" flex-wrap product-modal-label mb-4 pb-lg-2 pb-3 justify-content-lg-start">
    <?php if (have_rows('related_documents')) : ?>
        <?php while (have_rows('related_documents')) :
            the_row(); ?>

            <?php
            $file = get_sub_field('file');
            if ($file) : ?>

                <li class=" pe-lg-3"><a target="_blank" href="<?php echo esc_url($file['url']); ?>" class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans"><?php the_sub_field('file_title'); ?></a>
                </li>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
    <li>
        <a class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans" href="/nbs/" target="_blank">NBS</a>
    </li>
    <li>
        <a class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans" href="/finishes/" target="_blank">See our colour range</a>
    </li>

    <?php
    $link = get_field('extra_link');
    if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <li>
            <a class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </li>
    <?php endif; ?>
</ul>


<?php if (! have_rows('alternate_products')) : ?>
    <div class="border-bottom"></div>
<?php endif; ?>

<?php if (have_rows('product_alternative_details')): ?>
    <?php while (have_rows('product_alternative_details')) :  the_row();
        $product_description_list = get_sub_field('product_description_list');
    ?>
        <?php if (!empty($product_description_list)): ?>
            <?php foreach ($product_description_list as $product_list): ?>
                <?php if (!empty($product_list['list'])): ?>
                    <div class=""> <?php echo $product_list['list']; ?> </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>