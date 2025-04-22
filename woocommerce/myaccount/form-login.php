<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

	<main class="position-relative overflow-hidden login--toggle active login--toggle__login">
		<section class="account-bg position-relative">
			<div class="container h-100">
				<div class="row align-items-center h-100">
					<div class="col-lg-6 pe-lg-5">
						<div class="register-left-box bg-white theme-radius text-primary me-lg-3">
							<h3 class="mb-2 ps-3 ps-lg-0">REGISTERED CUSTOMERS</h3>
							<p class="text-sm text-spacing ps-3 ps-lg-0">If you already have an account, <br
									class="d-md-none"> please sign in below</p>
							<div class="border-bottom"></div>
							<form class="woocommerce-form woocommerce-form-login login mt-4" method="post">
								<div class="form-group  px-3 px-lg-0">

									<label for="username" class="mb-2">EMAIL ADDRESS&nbsp;<span
											class="required">*</span></label>
									<input type="text"
										class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
										name="username" id="username" autocomplete="username" placeholder="Please Enter…"
										value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />

								</div>
								<div class="form-group mt-3  px-3 px-lg-0">

									<label for="password" class="mb-2">PASSWORD&nbsp;<span
											class="required">*</span></label>

									<input
										class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
										type="password" name="password" id="password" autocomplete="current-password"
										placeholder="Please Enter…" />

								</div>
								<div class="d-flex justify-content-between align-items-center mt-4 pt-lg-3 ps-3 ps-lg-0">
									<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
									<button type="submit"
										class="btn btn-outline-primary me-3 me-xl-0 woocommerce-button button
											woocommerce-form-login__submit<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"
										name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">
										<div class="d-flex justify-content-between align-items-center">
											<span>Login</span>
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
									<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"
										class="font-sans text-sm text-spacing text-primary mb-0">Forgot your password? <br
											class="d-md-none"> Reset <span
											class="text-decoration-underline">here</span></a>
								</div>
								<span class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme mt-3 d-block">
									<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
								</span>
							</form>
						</div>
					</div>
					<div class="col-lg-4 px-lg-4 mx-auto mt-5 mt-lg-0 pt-3 pt-lg-0">
						<div class="new-customer-box bg-white theme-radius text-primary text-lg-center text-start me-lg-1">
							<h3 class="headingM mb-2">NEW CUSTOMER?</h3>
							<p class="text-sm text-spacing text-gray mb-lg-4 mb-3 pb-1 pb-lg-0">Check out faster, track orders and view order history</p>
							<button class="btn btn-outline-primary btn-lg login--toggle__button">
								<div class="d-flex justify-content-between align-items-center">
									<span>Create an account</span>
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
				</div>
			</div>
		</section>
	</main>


	<main class="position-relative overflow-hidden login--toggle login--toggle__register">
		<section class="account-bg account-bg-img position-relative">
			<div class="container h-100 d-lg-flex justify-content-center align-items-center">
				<form method="post" class="row w-100 woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
				<?php do_action( 'woocommerce_register_form_start' ); ?>
					<div class="col-lg-6 pe-lg-5">
						<div class="register-left-box contact-left-form bg-white theme-radius text-primary me-lg-5">
							<h3 class="mb-2 account-title ps-3 ps-lg-0">CONTACT INFORMATION</h3>
							<div class="border-bottom "></div>

							<!-- form 1 -->

							<div action="" class="mt-4">
								<div class="form-group  px-3 px-lg-0">

									<label for="reg_billing_first_name"
										class="mb-2"><?php esc_html_e( 'First Name', 'woocommerce' ); ?>&nbsp;<span
											class="required">*</span></label>
									<input type="text"
										class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
										name="billing_first_name" id="reg_billing_first_name" autocomplete="username"
										placeholder="Please Enter…"
										value="<?php echo ( ! empty( $_POST['billing_first_name'] ) ) ? esc_attr( wp_unslash( $_POST['billing_first_name'] ) ) : ''; ?>" />
								</div>

								<div class="form-group mt-3  px-3 px-lg-0">
									<label for="billing_last_name"
										class="mb-2"><?php esc_html_e( 'Last Name', 'woocommerce' ); ?>&nbsp;<span
											class="required">*</span></label>
									<input type="text"
										class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
										name="billing_last_name" id="billing_last_name" autocomplete="username"
										placeholder="Please Enter…"
										value="<?php echo ( ! empty( $_POST['billing_last_name'] ) ) ? esc_attr( wp_unslash( $_POST['billing_last_name'] ) ) : ''; ?>" />
								</div>
								<div class="d-flex align-items-center mx-auto pt-lg-3 pt-3 ps-3 ps-lg-0">
									<label for="subscribe" class="checkbox-control me-2 pe-lg-1 cursor-pointer">
										<input type="checkbox" name="filter" id="subscribe" checked>
										<span class="d-block theme-checkbox border-0"></span>
									</label>
									<label for="subscribe"
										class="lowercase text-sm text-spacing font-sans text-primary content-font check-label text-start text-lg-center  mb-0 cursor-pointer">Please
										tick to subscribe to our newsletter</label>
								</div>
							</div>

							<!-- form 1 -->

						</div>
					</div>
					<div class="col-lg-6 pe-lg-5 mt-2 mt-lg-0">
						<div class="register-left-box account-right-box bg-white theme-radius text-primary me-lg-5">
							<h3 class="mb-2 account-title ps-3 ps-lg-0">SIGN-IN INFORMATION</h3>
							<div class="border-bottom"></div>

							<!-- form 2 -->

							<div method="post" class="mt-4" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
								<div class="form-group  px-3 px-lg-0">

									<label for="reg_email"
										class="mb-2"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span
											class="required">*</span></label>
									<input type="email"
										class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
										name="email" id="reg_email" autocomplete="email" placeholder="Please Enter…"
										value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />

								</div>

								<div class="form-group mt-3  px-3 px-lg-0">

									<label for="reg_password"
										class="mb-2"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span
											class="required">*</span></label>
									<input type="password"
										class="woocommerce-Input woocommerce-Input--text input-text form-control w-100 text-primary transition font-light border-0"
										name="password" placeholder="Please Enter…" id="reg_password"
										autocomplete="new-password" />

								</div>

								<?php do_action( 'woocommerce_register_form' ); ?>


								<div
									class="d-flex flex-lg-row flex-column justify-content-between align-items-lg-center align-items-start mt-lg-4 mt-3 ps-3 ps-lg-0 pt-lg-2">
									<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
									<button type="submit" class="btn btn-outline-primary woocommerce-Button woocommerce-button
											button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>
											woocommerce-form-register__submit" name="register"
										value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">
										<div class="d-flex justify-content-between align-items-center">
											<span><?php esc_html_e( 'Register', 'woocommerce' ); ?></span>
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
									<?php do_action( 'woocommerce_register_form_end' ); ?>


									<div
										class="font-sans text-sm text-spacing text-primary mb-0 text-decoration-underline mt-4 mt-lg-0 login--toggle__button cursor-pointer">I
										already have an account</div>

								</div>
							</div>

							<!-- form 2 -->

						</div>
					</div>
				</form>


			</div>
		</section>
	</main>




<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
