<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart mt-4 pt-lg-2 pt-1" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock text-primary text-base text-uppercase headingS">
			<a href="/contact/">
				<?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'Contact us for pricing', 'woocommerce' ) ) ); ?>
			</a>
		</p>
	<?php else : ?>

		<?php $current_user = get_current_user_id(); ?>
		<?php if ( get_field( 'trade_account_exclusive' ) == NULL ) : ?>

			<div class="variations" role="presentation">
				<div>
					<?php foreach ( $attributes as $attribute_name => $options ) : ?>
						<div class="d-flex flex-lg-row flex-column justify-content-between align-items-start align-items-lg-center mt-4 pt-lg-2 pt-1">
							<label class="text-xl text-primary me-lg-3 pb-1 pb-lg-0 text-start select-label uppercase wc-enhanced-select" for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label>
								<?php
									wc_dropdown_variation_attribute_options(
										array(
											'options'   => $options,
											'attribute' => $attribute_name,
											'product'   => $product,
										)
									);
									echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
								?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
 
 		<?php elseif ( get_field( 'trade_account_exclusive' ) && is_user_logged_in() && get_field( 'trade_account' , 'user_'. $current_user ) ): ?>

			<div class="variations" role="presentation">
				<div>
					<?php foreach ( $attributes as $attribute_name => $options ) : ?>
						<div class="d-flex flex-lg-row flex-column justify-content-between align-items-start align-items-lg-center mt-4 pt-lg-2 pt-1">
							<label class="text-xl text-primary me-lg-3 pb-1 pb-lg-0 text-start select-label uppercase wc-enhanced-select" for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label>
								<?php
									wc_dropdown_variation_attribute_options(
										array(
											'options'   => $options,
											'attribute' => $attribute_name,
											'product'   => $product,
										)
									);
									echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
								?>
						</div>
					<?php endforeach; ?>

					<div class="d-flex flex-lg-row flex-column justify-content-between align-items-start align-items-lg-center mt-4 pt-lg-2 pt-1">
						<label class="text-xl text-primary me-lg-3 pb-1 pb-lg-0 text-start select-label uppercase wc-enhanced-select" for="quantity">Quantity</label>

						<select class="qtyDropdown" id="pa_quantity" name="attribute_pa_quantity" data-attribute_name="attribute_pa_quantity">
							<option class="attached enabled" value="">Qty</option>
							<option class="attached enabled" value="1">1</option>
							<option class="attached enabled" value="2">2</option>
							<option class="attached enabled" value="3">3</option>
							<option class="attached enabled" value="4">4</option>
							<option class="attached enabled" value="5">5</option>
							<option class="attached enabled" value="6">6</option>
							<option class="attached enabled" value="7">7</option>
							<option class="attached enabled" value="8">8</option>
							<option class="attached enabled" value="9">9</option>
							<option class="attached enabled" value="10">10</option>
							<option class="attached enabled" value="11">11</option>
							<option class="attached enabled" value="12">12</option>
							<option class="attached enabled" value="13">13</option>
							<option class="attached enabled" value="14">14</option>
							<option class="attached enabled" value="15">15</option>
							<option class="attached enabled" value="16">16</option>
							<option class="attached enabled" value="17">17</option>
							<option class="attached enabled" value="18">18</option>
							<option class="attached enabled" value="19">19</option>
							<option class="attached enabled" value="20">20</option>
						</select>

					</div>

				</div>
			</div>

		<?php else: ?>

			<div class="variations" role="presentation" style="opacity: .6;">
				<div>
					<?php foreach ( $attributes as $attribute_name => $options ) : ?>
						<div class="d-flex flex-lg-row flex-column justify-content-between align-items-start align-items-lg-center mt-4 pt-lg-2 pt-1">
							<label class="text-xl text-primary me-lg-3 pb-1 pb-lg-0 text-start select-label uppercase wc-enhanced-select" for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label>
								<?php
									wc_dropdown_variation_attribute_options(
										array(
											'options'   => $options,
											'attribute' => $attribute_name,
											'product'   => $product,
										)
									);
									echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
								?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<a href="/trade/" class="btn btn-primary mt-5 mb-4 unavailable-button">
				NOTE: To order this product online a trade account is needed. For non-trade customers, please call or email for prices and availability. 
			</a>
			
		<?php endif; ?>


		<?php do_action( 'woocommerce_after_variations_table' ); ?>
		
		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
