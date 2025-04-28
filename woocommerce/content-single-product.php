<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="container-fluid">
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'row', $product ); ?>>

<?php
/**
 * Hook: woocommerce_before_single_product_summary.
 *
 * @hooked woocommerce_show_product_sale_flash - 10
 * @hooked woocommerce_show_product_images - 20
 */
do_action( 'woocommerce_before_single_product_summary' );
?>

<div class="summary entry-summary col-lg-5 product-info-block">

<div class="col-lg-10 ms-auto d-flex flex-column justify-content-center h-100 pt-4 pt-lg-0 mt-3 mt-lg-0">
	<?php
	/**
	 * Hook: woocommerce_single_product_summary.
	 *
	 * @hooked woocommerce_template_single_title - 5
	 * @hooked woocommerce_template_single_rating - 10
	 * @hooked woocommerce_template_single_price - 10
	 * @hooked woocommerce_template_single_excerpt - 20
	 * @hooked woocommerce_template_single_add_to_cart - 30
	 * @hooked woocommerce_template_single_meta - 40
	 * @hooked woocommerce_template_single_sharing - 50
	 * @hooked WC_Structured_Data::generate_product_data() - 60
	 */
	do_action( 'woocommerce_single_product_summary' );
	?>
	 </div>


                    
                    <ul class="d-flex flex-wrap product-modal-label mb-4 pb-lg-2 pb-3 justify-content-lg-start">
                        <li class=" pe-lg-3"><a href="javascript:void(0);"
                                class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans">Nbs
                                Product Spec</a></li>
                        <li class="ms-lg-4 ms-5"><a href="javascript:void(0);"
                                class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans">Installation
                                Guide</a></li>
                    </ul>
                    <div class="border-bottom"></div>
                    <div class="d-flex flex-lg-row flex-column align-items-center mt-4 pt-lg-2 pt-1">
                        <label for=""
                            class="text-xl text-primary me-lg-3 pb-1 pb-lg-0 text-start select-label">HEIGHT</label>
                        <select class="select-dropdown product-option disable-search">
                            <option data-display="select">Select Option…</option>
                            <option>Parts</option>
                            <option>Parts</option>
                            <option>Parts</option>
                        </select>
                    </div>
                    <div class="d-flex flex-lg-row flex-column align-items-center mt-3 pt-1">
                        <label for=""
                            class="text-xl text-primary me-lg-3 pb-1 pb-lg-0 text-start select-label">FINISH</label>
                        <select class="select-dropdown product-option disable-search">
                            <option data-display="select">Select Option…</option>
                            <option>Parts</option>
                            <option>Parts</option>
                            <option>Parts</option>
                        </select>
                    </div>
                    <div
                        class="d-flex flex-lg-row flex-column align-items-lg-center justify-content-between pt-lg-5 pt-4">
                        <div class="product-prize pt-lg-3 mb-4 mb-lg-0">
                            <h3 class="text-primary mb-lg-0 mb-3">£259.99 <sub
                                    class="ps-2 text-xs text-capitalize font-sans">(Inc. Vat)</sub></h3>
                            <span class="text-xs text-capitalize font-sans">(Delivery Added At Checkout)</span>
                        </div>
                        <a href="javascript:void(0);" class="btn-primary-bg ms-lg-auto" data-bs-toggle="modal"
                            data-bs-target="#infoModal">Add to basket</a>

                        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button single_add_to_cart_button product-buy-btn btn btn-primary btn-dark-hover text-sm d-block ms-2 ms-md-3 <?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
						
                        <div>
                        </div>
                    </div>
                    <h5 class="text-primary text-base text-lg-end text-center pt-lg-3 pt-4 mb-4 mb-lg-5">
                        BUYING OVERSEAS?
                        <a href="contact.html"
                            class="text-sm font-sans text-decoration-underline text-transform-none">Get in touch</a>
                    </h5>
               
</div>

<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );
?>
</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
