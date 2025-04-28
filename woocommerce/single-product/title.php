<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $product;

?>

<div class="col-lg-5 product-info-block">
    <div class="col-lg-10 ms-auto d-flex flex-column h-100 fw-semibold pt-4 pt-lg-0 mt-3 mt-lg-0">
        <div class="d-flex">
            <div class=""><?php if($product->is_in_stock()): ?> in Stock <?php else: ?> Out of stock <?php endif; ?> </div>
            <div class=""><?php if ( get_field( 'is_root_product' ) ) : ?> Trad only <?php endif; ?></div>
        </div>

<?php 

the_title( '<h1 class="headingXXL text-primary mb-2 pb-1 pb-lg-0 line-height-1 fw-semibold">', '</h1>' );



