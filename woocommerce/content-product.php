<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$pro_id = $product->get_id();

$cate = get_queried_object();
$cateID = $cate->term_id;
?>

<div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block  d-lg-block <?php wc_product_class( '', $product ); ?>">
	<a href="<?php the_permalink(); ?>"
		class="featured-card card-hover overflow-hidden bg-white d-block">
		<div class="featured-img overflow-hidden">
			<img src="<?php echo get_the_post_thumbnail_url($pro_id, 'medium_large'); ?>" alt="featured-img"
				class="w-100 h-100 object-cover">
		</div>
		<div class="featured-body bg-white font-sans transition">
			<h4 class="text-lg text-primary mb-2 text-transform-none"><?= $product->get_name(); ?></h4>
			<?php if (get_field('custom_product') != 'Yes'):?>
				<h3 class="text-black fw-medium text-transform-none mb-0"><?php echo $product->get_price_html(); ?> inc. VAT</h3>
			<?php endif;?>
		</div>
	</a>
</div>

