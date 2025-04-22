<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

						
<main class="">
    <section class="checkout-page mt-lg-4 mt-5 pt-2">
        <div class="container">
            <div class="row justify-content-between g-0">

			<div class="color--green col-md-6 ps-lg-4">
										<div class="checkout-tab mb-2">
											Delivery
										</div>
										<h2 class="headingL form-title mb-1">YOUR DELIVERY DETAILS</h2>

										<div class="custom-hr"></div>

										<div class="woocommerce-form-login-toggle mt-lg-4 mt-3">
											<div class="text-uppercase bodyXS fw-600"><?php wc_print_notice( apply_filters( 'woocommerce_checkout_login_message', esc_html__( 'Are you a returning customer?', 'woocommerce' ) ) . ' <a href="#" class="showlogin text-decoration-underline opacity-50">' . esc_html__( 'Click here to login', 'woocommerce' ) . '</a>', 'notice' ); ?></div>
										</div>
										
										<?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>

										<?php

										woocommerce_login_form(
											array(
												'message'  => esc_html__( 'If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.', 'woocommerce' ),
												'redirect' => wc_get_checkout_url(),
												'hidden'   => true,
											)
										);

										?>

									</div>

						<form name="checkout" method="post" class="checkout woocommerce-checkout ps-md-2 col-12" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
							<div class="row">

							
								<div class="col-lg-6 pe-lg-5 ps-lg-4">

									<div class="text-primary mt-lg-2 mt-5 pt-lg-2 pt-1">
										
										<?php if ( $checkout->get_checkout_fields() ) : ?>
											<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
											<div class="col-12">
												<?php do_action( 'woocommerce_checkout_billing' ); ?>
											</div>

											<div class="col-12 d-inline-block">
												<?php do_action( 'woocommerce_checkout_shipping' ); ?>
											</div>
											<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
										<?php endif; ?>
										
										<?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>

									</div>

										
								</div>


								<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

								<div class="col-lg-5 mt-5 mt-lg-0 pt-4 pt-lg-0 mb-5 mb-lg-0">
									<div class="your-order-box">
										<div id="order_review" class="woocommerce-checkout-review-order">
											<?php do_action( 'woocommerce_checkout_order_review' ); ?>
										</div>

										<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

										<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
									</div>

									
								</div>
							</div>
						</form>
			
            </div>
        </div>
    </section>

</main>


<div class="padding-top--200px"></div>



