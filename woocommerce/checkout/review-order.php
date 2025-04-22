<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>


<div class="shop_table woocommerce-checkout-review-order-table">

	<div class="d-flex align-items-center justify-content-between text-primary border-bottom-light-primary pb-3">
		<h3 class="order-title mb-0">YOUR ORDER</h3>
		<a href="/cart/" class="text-sm font-sans text-capitalize text-decoration-underline">Amend</a>
	</div>

	<?php
		do_action( 'woocommerce_review_order_before_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

				$product_id = $_product->get_id();
				if($_product->get_parent_id() != 0){
					$product_id = $_product->get_parent_id();
				}

				?>
	<a href="javascript:void(0);" class="d-flex align-items-center pt-5 mb-lg-3">
		<div class="cart-img theme-radius overflow-hidden flex-shrink-0">
			<img src="<?php echo get_the_post_thumbnail_url($product_id, 'large')?>"
				alt="image" class="object-cover">
		</div>
		<div class="d-flex flex-xl-row flex-column align-items-center ps-4 w-100">
			<div class="flex-lg-grow-1">
				<h3 class="text-primary text-xxl mb-xl-1 mb-3 line-height-1">
					<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ) . '&nbsp;'; ?>
				</h3>
				<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				
			</div>
			<div class="product-prize d-lg-flex flex-shrink-0 font-sans">
				<div class="me-lg-5 d-flex d-lg-block mb-2 mb-lg-0">
					<h3
						class="text-sm text-spacing text-transform-none text-primary text-center mb-lg-4 mb-0 pb-lg-1 pe-3 pe-lg-0">
						Qty</h3>
					<div class="prize-counters-btns font-sans d-flex align-items-center">
						<span class="text-sm px-3 fw-medium">
							<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times;&nbsp;%s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
					</div>
				</div>
				<div class="d-flex d-lg-block">
					<h3
						class="text-sm text-spacing text-transform-none text-primary text-center mb-lg-4 mb-0 pb-lg-1 pe-3 pe-lg-0">
						Price</h3>
					<div>
						<span class="text-sm font-sans fw-medium">
							<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</a>

	<?php
							}
						}

						do_action( 'woocommerce_review_order_after_cart_contents' );
						?>


	<hr class="mt-5 hr--dark">

	<div class="text-primary">
		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

		<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

		<?php wc_cart_totals_shipping_html(); ?>

		<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

		<?php endif; ?>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
		<div class="d-flex justify-content-between font-sans mb-3 fw-normal">
			<h5 class="text-transform-none text-sm text-spacing mb-0"><?php echo esc_html( $fee->name ); ?></h5>
			<span class="text-sm text-spacing"><?php wc_cart_totals_fee_html( $fee ); ?></span>
		</div>
		<?php endforeach; ?>


		<div class="d-flex justify-content-between font-sans mb-3 fw-normal">
			<h5 class="text-transform-none text-sm text-spacing mb-0">Subtotal</h5>
			<span class="text-sm text-spacing"><?php wc_cart_totals_subtotal_html(); ?></span>
		</div>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
		<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
		<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
		<div class="d-flex justify-content-between font-sans mb-3 fw-normal">
			<h5 class="text-transform-none text-sm text-spacing mb-0"><?php echo esc_html( $tax->label ); ?></h5>
			<span class="text-sm text-spacing"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
		</div>
		<?php endforeach; ?>
		<?php else : ?>
		<div class="d-flex justify-content-between font-sans mb-3 fw-normal">
			<h5 class="text-transform-none text-sm text-spacing mb-0">
				<?php echo esc_html( WC()->countries->tax_or_vat() ); ?></h5>
			<span class="text-sm text-spacing"><?php wc_cart_totals_taxes_total_html(); ?></span>
		</div>
		<?php endif; ?>
		<?php endif; ?>


		<div class="d-flex justify-content-between align-items-center product-total">
			<h4 class="headingM mb-0">TOTAL</h4>
			<span class="final-prize"><?php wc_cart_totals_order_total_html(); ?></span>
		</div>
	</div>

</div>