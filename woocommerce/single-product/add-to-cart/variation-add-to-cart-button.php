<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<?php $current_user = get_current_user_id(); ?>

<?php if ( get_field( 'trade_account_exclusive' ) == NULL ) : ?>

	<div class="d-flex flex-lg-row flex-column justify-content-between  align-items-baseline mb-2">

		<div class="product-prize pt-lg-3 mb-4 mb-lg-0">
			<h3 class="text-primary mb-lg-0 mb-3 fw-semibold ">
				<span class="wrap--price">

					<?php if ( get_field( 'is_root_product' ) ) : ?>
						From
					<?php endif; ?>

					<?php echo $product->get_price_html(); ?> 
				</span>
				<div
					class=" text-xs text-capitalize font-sans text-lightGray">(Inc. Vat)</div></h3>
			<span class="text-xs text-capitalize font-sans text-lightGray">(Delivery Added At Checkout)</span>
		</div>

		<h5 class="text-primary text-base text-lg-end text-left align-self-end mb-0">
			BUYING OVERSEAS?
			<a href="/overseas/"
				class="text-uppercase text-sm text-primary text-base text-decoration-underline text-transform-none">Get in touch</a>
		</h5>

	</div>

	<div class="d-flex flex-lg-row flex-column align-items-lg-center pt-lg-1 pt-4">

		<div class="woocommerce-variation-add-to-cart variations_button align-lg-self-end w-100">
			<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

			<div class="row my-3 my-lg-0 justify-content-end align-items-center w-100">
				
				<div class="col-lg-3">
				<?php
					do_action( 'woocommerce_before_add_to_cart_quantity' ); ?>
				
						<div class="prize-counters-btns font-sans d-block fw-medium controls--qty__product mb-2 me-3">
							<!-- <div type="button" class="cartMinusProduct bg-transparent border-0 text-primary me-2">-</div> -->
								<div class="fakeQtyInput">
								<?php
									woocommerce_quantity_input(
										array(
											'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
											'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
											'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
										)
									);?>
								</div>
							
							<!-- <div type="button" class="cartPlusProduct bg-transparent border-0 text-primary ms-2">+</div> -->
						</div>
					
					<?php

					do_action( 'woocommerce_after_add_to_cart_quantity' );
					?>

				</div>

				<div class="col-lg-9">
					<button type="submit" class="btn-primary-bg ms-lg-auto single_add_to_cart_button w-100 <?php if ( get_field( 'is_root_product' ) ) : ?>disable-button<?php endif; ?>">Add to basket</button>
				</div>

			</div>
	

			
			<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

			<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
			<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
			<input type="hidden" name="variation_id" class="variation_id" value="0" />

		</div>


	</div>


<?php elseif ( get_field( 'trade_account_exclusive' ) && is_user_logged_in() && get_field( 'trade_account' , 'user_'. $current_user ) ) : ?>

	<div class="d-flex flex-lg-row flex-column align-items-lg-center justify-content-between pt-lg-5 pt-4">

		<div class="product-prize pt-lg-3 mb-4 mb-lg-0">
			<h3 class="text-primary mb-lg-0 mb-3 fw-semibold ">
				<span class="wrap--price">
					<?php echo $product->get_price_html(); ?> 
				</span>
				<div
					class=" text-xs text-capitalize font-sans text-lightGray">(Inc. Vat)</div></h3>
			<span class="text-xs text-capitalize font-sans text-lightGray">(Delivery Added At Checkout)</span>
		</div>

		<div class="woocommerce-variation-add-to-cart variations_button">
			<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

			<?php
			do_action( 'woocommerce_before_add_to_cart_quantity' );

			woocommerce_quantity_input(
				array(
					'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
					'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
					'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				)
			);

			do_action( 'woocommerce_after_add_to_cart_quantity' );
			?>

	

			<button type="submit" class="btn-primary-bg ms-lg-auto single_add_to_cart_button">Add to basket</button>

			<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

			<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
			<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
			<input type="hidden" name="variation_id" class="variation_id" value="0" />

		</div>


	</div>

	<h5 class="text-primary text-base text-lg-end text-left pt-lg-3 pt-4 mb-4 mb-lg-5">
		BUYING OVERSEAS?
		<a href="/overseas/"
			class="text-uppercase text-sm text-primary text-base text-decoration-underline text-transform-none">Get in touch</a>
	</h5>

<?php else: ?>

	<div class="d-flex flex-lg-row flex-column align-items-lg-center justify-content-between mb-5">

		<div class="product-prize pt-lg-3 mb-4 mb-lg-0">
			<h3 class="text-primary mb-lg-0 mb-3 fw-semibold ">
				<span class="wrap--price">
					<?php echo $product->get_price_html(); ?>
				</span>
				<div
					class=" text-xs text-capitalize font-sans text-lightGray">(Inc. Vat)</div></h3>
			<span class="text-xs text-capitalize font-sans text-lightGray">(Delivery Added At Checkout)</span>
		</div>
	</div>

<?php endif; ?>
