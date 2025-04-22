<?php

/*

  * Template Name: Cart

  */
do_action('woocommerce_before_cart');
?>
<main>

    <!-- your basket -->
    <section class="mt-1">
        <div class="container">
            <div class="main-basket-block bg-white">
                <h2 class="headingL text-primary mb-lg-2 mb-0">YOUR BASKET
                    [<?php echo WC()->cart->get_cart_contents_count(); ?>]</h2>
                <p class="mb-lg-3">Postage is calculated at the checkout stage.</p>
                <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                    <?php do_action('woocommerce_before_cart_table'); ?>
                    <div class="row justify-content-between">
                        <div class="col-lg-7 product-info pt-5">
                            <div>
                                <?php do_action('woocommerce_before_cart_contents'); ?>
                                <!-- checkout product list -->
                                <?php
                                $i = 0;
                                foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                    $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                ?>
                                        <div class="d-flex align-items-center product--list">
                                            <div class="cart-img theme-radius overflow-hidden flex-shrink-0">
                                                <img src="<?php echo get_the_post_thumbnail_url($product_id, 'large') ?>" alt="<?php echo get_the_title(); ?>" class="object-cover">
                                            </div>
                                            <div class="d-flex flex-lg-row flex-column align-items-lg-center ps-4 w-100">
                                                <div class="flex-lg-grow-1 col-lg-6 text-start text-lg-center">
                                                    <a href="<?php echo $product_permalink ?>">
                                                        <h3 class="text-primary text-xl mb-3 mb-lg-0 line-height-1 fw-normal">
                                                            <?php echo $_product->get_name() ?></h3>
                                                    </a>
                                                    <?php echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok. 
                                                    ?>

                                                </div>
                                                <div class="product-prize d-flex flex-shrink-0 col-lg-6">
                                                    <div class="me-lg-5 d-flex d-lg-block col-lg-6">
                                                        <h3 class="text-xl text-primary text-center mb-lg-4 mb-0 pb-lg-1 pe-3 pe-lg-0 quantity--heading fw-semibold">
                                                            QTY</h3>
                                                        <div class="prize-counters-btns font-sans d-flex align-items-center fw-medium">
                                                            <button type="button" class="cartMinus bg-transparent border-0 text-primary" data-key="<?php echo $cart_item_key ?>">-</button>
                                                            <?php
                                                            if ($_product->is_sold_individually()) {
                                                                $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                                            } else {
                                                                $product_quantity = woocommerce_quantity_input(
                                                                    array(
                                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                                        'input_value'  => $cart_item['quantity'],
                                                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                                                        'min_value'    => '0',
                                                                        'product_name' => $_product->get_name(),
                                                                    ),
                                                                    $_product,
                                                                    false
                                                                );
                                                            }

                                                            echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                                            ?>
                                                            <!-- <span class="text-sm px-3">1</span> -->

                                                            <button type="button" class="cartPlus bg-transparent border-0 text-primary" data-key="<?php echo $cart_item_key ?>">+</button>

                                                        </div>
                                                    </div>
                                                    <div class="d-none d-lg-block col-lg-6">
                                                        <h3 class="text-xl text-primary mb-4 pb-1 price--heading fw-semibold">PRICE</h3>
                                                        <div>
                                                            <span class="text-sm font-sans fw-medium cart-price"><?php
                                                                                                                    echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                                                                                    ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php    }
                                    $i++;
                                } ?>
                                <!-- END checkout product list -->

                                <?php do_action('woocommerce_cart_contents'); ?>

                                <div class="cart-info text-end border-top border-bottom d-none d-lg-block">
                                    <a href="/" class="text-sm font-sans text-capitalize me-lg-5 pe-lg-3">Continue
                                        Shopping</a>
                                    <button href="javascript:void(0);" class="text-sm font-sans text-capitalize <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update basket', 'woocommerce'); ?></button>
                                </div>
                                <?php do_action('woocommerce_cart_actions'); ?>

                                <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                                <?php do_action('woocommerce_after_cart_contents'); ?>
                                <!-- END continue shopping bar -->

                                <?php do_action('woocommerce_after_cart_contents'); ?>

                                <div class="col-lg-9 position-relative">
                                    <div class="form-group position-relative">
                                        <input name="coupon_code" id="coupon_code" type="text" name="promocode" placeholder="Enter Discount Code…" class="form-control fw-medium">
                                    </div>
                                    <button class="position-absolute text-sm promo-btn bg-primary text-white top-0 end-0 h-100 border-0 font-sans fw-medium" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>">Add
                                        code +</button>
                                </div>
                                <div class="cart-info d-flex justify-content-between text-end border-top border-bottom d-block d-lg-none">
                                    <a href="/" class="text-sm font-sans text-capitalize me-lg-5 pe-lg-3">Continue
                                        Shopping</a>
                                    <button href="javascript:void(0);" class="text-sm font-sans text-capitalize <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update basket', 'woocommerce'); ?></button>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 product-info product-prize-info pt-4 mt-2 mt-lg-0 text-primary">
                            <div class="">
                                <?php
                                $discount_amount = 0; // Initialize discount amount
                                $total = 0;

                                // Loop through cart items to calculate discount amount
                                foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                    // Get the product price
                                    $product_price = $cart_item['data']->get_price();

                                    // Get the product quantity
                                    $product_quantity = $cart_item['quantity'];

                                    // Calculate the line subtotal
                                    $line_subtotal = $product_price * $product_quantity;

                                    // Get the line subtotal after discounts
                                    $line_subtotal_after_discounts = $cart_item['line_subtotal'];

                                    $regular_price = $cart_item['data']->get_regular_price();
                                    $total += $regular_price;

                                    // Calculate the discount amount for this item
                                    $discount_amount += $line_subtotal - $line_subtotal_after_discounts;
                                } ?>

                                <div class="d-flex justify-content-between font-sans mb-3 text-primary fw-normal">
                                    <h5 class="text-transform-none text-sm mb-0">Subtotal</h5>
                                    <span class=""><?php wc_cart_totals_subtotal_html(); ?></span>
                                </div>

                                <?php
                                if ($discount_amount > 0) :
                                ?>
                                    <div class="d-flex justify-content-between font-sans mb-3 text-primary fw-normal">
                                        <h5 class="text-transform-none text-sm mb-0">Trade Discount</h5>
                                        <span class="">-<?php echo "&pound;" . number_format($discount_amount, 2); ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
                                    <div class="d-flex justify-content-between font-sans mb-3 text-primary fw-normal cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
                                        <h5 class="text-transform-none text-sm mb-0">Discount code: <?php echo $coupon->code; ?></h5>
                                        <span data-title="<?php echo esc_attr(wc_cart_totals_coupon_label($coupon, false)); ?>"><?php wc_cart_totals_coupon_html($coupon); ?></span>
                                    </div>
                                <?php endforeach; ?>
                                <?php
                                // Check if shipping is required
                                if (WC()->cart->needs_shipping()) :
                                    // Get the shipping total
                                    $shipping_total = WC()->cart->get_shipping_total(); ?>
                                    <div class="d-flex justify-content-between font-sans mb-3 text-primary fw-normal">
                                        <h5 class="text-transform-none text-sm mb-0">Shipping Estimate</h4>
                                        <span class="font-sans"><?php echo wc_price(($shipping_total * 0.2) + $shipping_total ); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="d-flex justify-content-between align-items-center product-total">
                                    <h4 class="headingM mb-0">TOTAL</h4>
                                    <span class="font-sans final-prize"><?php wc_cart_totals_order_total_html(); ?></span>
                                </div>
                                <div class="mt-lg-4 mt-3 pt-lg-1">
                                    <a href="/checkout/" class="btn-primary-bg d-block">Continue to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php do_action('woocommerce_after_cart_table'); ?>
                </form>
            </div>

            <?php if (have_rows('cta_banner', 'options')) : ?>
                <?php while (have_rows('cta_banner', 'options')) :
                    the_row(); ?>
                    <?php $image = get_sub_field('image', 'options');
                    if ($image) : ?>
                        <div class="basket-img overflow-hidden position-relative">


                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover d-none d-lg-block">


                            <?php $image_mobile = get_sub_field('image_mobile', 'options');
                            if ($image_mobile) : ?>
                                <img src="<?php echo esc_url($image_mobile['sizes']['large']); ?>" alt="<?php echo esc_url($image_mobile['alt']); ?>" class="w-100 h-100 object-cover d-block d-lg-none">
                            <?php endif; ?>

                            <div class="position-absolute top-50 translate-middle-y text-center text-lg-start w-100">
                                <div class="col-lg-10 mx-auto d-flex flex-lg-row flex-column  justify-content-lg-between">

                                    <?php if ($heading = get_sub_field('heading', 'options')) : ?>
                                        <h3 class="headingL text-secondary mb-0"><?php echo esc_html($heading); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($link = get_sub_field('link', 'options')) : ?>
                                        <div class="">
                                            <a href="<?php echo esc_html($link); ?>" class="btn btn-md">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span>Shop classic</span>
                                                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                                            <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- the-trade -->
    <section class="the-trade main-basket-trade">
        <div class="container">
            <div class="trade-content-box theme-radius overflow-hidden">
                <div class="trade-img">
                    <?php $image = get_field('image', 'options');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover d-none d-lg-block">
                    <?php endif; ?>

                    <?php $image_mobile = get_field('image_mobile', 'options');
                    if ($image_mobile) : ?>
                        <img src="<?php echo esc_url($image_mobile['sizes']['large']); ?>" alt="<?php echo esc_url($image_mobile['alt']); ?>" class="w-100 h-100 object-cover d-block d-lg-none">
                    <?php endif; ?>
                </div>

                <div class="trade-info">
                    <?php if ($heading = get_field('heading', 'options')) : ?>
                        <h2 class="headingXL text-secondary mb-2"><?php echo esc_html($heading); ?></h2>
                    <?php endif; ?>
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
        </div>
    </section>
</main>