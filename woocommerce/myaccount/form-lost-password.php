<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>



<main class="position-relative">
	<section class="account-bg position-relative password-reset-form-sec">
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-lg-6 pe-lg-5">
					<div class="register-left-box password-reset-form bg-white theme-radius text-primary me-lg-5">
						<h3 class="mb-2">PASSWORD <br class="d-md-none"> RESET</h3>
						<p class="text-sm text-spacing">Please enter your email below to receive a password reset link
						</p>
						<div class="border-bottom d-block d-md-none -mx-3"></div>
						
						<form method="post" class="woocommerce-ResetPassword lost_reset_password mt-4">
							<?php do_action( 'woocommerce_lostpassword_form' ); ?>
							<div class="form-group  pe-4 pe-lg-0">

								<label for="user_login" class="mb-2">EMAIL ADDRESS*</label>
								<input
									class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
									type="text" name="user_login"
									id="user_login" autocomplete="username" placeholder="Please Enter…"/>

							</div>

							
							<div
								class="d-flex flex-lg-row flex-column align-items-start align-items-lg-center mt-lg-4 mt-3 pt-lg-3">
								<?php do_action( 'woocommerce_lostpassword_form' ); ?>
								<input type="hidden" name="wc_reset_password" value="true" />
								
								<button type="submit"
									class="btn btn-outline-primary btn-lg me-3 me-xl-5 woocommerce-Button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"
									value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>">
									<div class="d-flex  justify-content-between align-items-center">
										<span>Reset my password</span>
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
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>""
									class="font-sans text-sm text-spacing text-primary mb-0 text-decoration-underline mt-4 mt-lg-0 back-login">Back
									to login</a>
							</div>
							<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
						</form>

						

					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
do_action( 'woocommerce_after_lost_password_form' );


