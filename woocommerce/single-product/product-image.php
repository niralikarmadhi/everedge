<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="col-lg-7 product-slider slick-indicators slick-horizontal-dots-center <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">

		<?php
		// if ( $post_thumbnail_id ) {
		// 	$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		// } else {
		// 	$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
		// 	$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
		// 	$html .= '</div>';
		// }

		// echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		// do_action( 'woocommerce_product_thumbnails' );

		$attachment_ids = $product->get_gallery_image_ids();

			foreach( $attachment_ids as $attachment_id )
    {
		?>


				<div class="product-slider-img position-relative">
                    <img src="<?php echo wp_get_attachment_image_url($attachment_id,'large');?>" alt="image"
                        class="w-100 h-100 object-cover">
                    <div class="position-absolute slider-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="165.493" height="46.84"
                            viewBox="0 0 165.493 46.84">
                            <g id="Layer_1-2" transform="translate(0 0.002)">
                                <g id="Group_2804" data-name="Group 2804" transform="translate(0 -0.002)">
                                    <path id="Path_12267" data-name="Path 12267"
                                        d="M14.758,49.93V30.693q-1.847-.257-3.689-.572-1.722,4.625-3.45,9.2Q5.882,34.055,4.145,28.734,2.312,28.309.48,27.82V47.057q1.9.506,3.8.943V37.465q1.033,3.416,2.077,6.816c.845.176,1.686.347,2.531.508q1.041-2.983,2.077-5.986V49.339c1.266.215,2.531.415,3.8.591"
                                        transform="translate(-0.245 -14.226)" fill="#fff" />
                                    <path id="Path_12268" data-name="Path 12268"
                                        d="M125.97,32.695V51.932c1.329-.142,2.658-.293,3.987-.445V32.25q-1.994.235-3.987.445"
                                        transform="translate(-64.418 -16.491)" fill="#fff" />
                                    <path id="Path_12269" data-name="Path 12269"
                                        d="M148.169,48.136l3.772-.5V28.4c-1.241.166-2.477.327-3.718.494V40.181q-2.126-5.365-4.256-10.735-1.994.257-3.987.5V49.181c1.241-.151,2.477-.3,3.718-.464v-11.5q2.235,5.468,4.471,10.926"
                                        transform="translate(-71.582 -14.522)" fill="#fff" />
                                    <path id="Path_12270" data-name="Path 12270"
                                        d="M40.009,40.768q.784,3.613,1.564,7.217c-1.031-.064-2.067-.142-3.1-.23q.77-3.489,1.534-6.992m2.238,10.413.806,3.709c1.427.073,2.854.132,4.285.166q-2.829-9.689-5.658-19.486-1.671-.1-3.342-.244-2.829,9.374-5.658,18.631c1.437.186,2.873.342,4.31.479.259-1.2.523-2.394.782-3.591q2.235.2,4.471.332"
                                        transform="translate(-16.712 -18.061)" fill="#fff" />
                                    <path id="Path_12271" data-name="Path 12271"
                                        d="M68.037,39.585c.406,0,.806,0,1.212,0,1.94.034,2.238.45,2.238,3.523v5.766c0,3.069-.3,3.513-2.238,3.587-.406,0-.806,0-1.212,0V39.58m7.437,9.865V42.277c.078-4.486-1.671-6.01-6.411-5.883q-2.507.015-5.013-.034V55.6c1.671.034,3.342.049,5.013.034,4.74.029,6.494-1.73,6.411-6.191"
                                        transform="translate(-32.753 -18.593)" fill="#fff" />
                                    <path id="Path_12272" data-name="Path 12272"
                                        d="M102.367,37.739V34.48c-3.269.288-6.538.528-9.807.694V54.411q4.984-.257,9.968-.709V50.443q-2.99.264-5.981.474V46.124c1.637-.112,3.269-.239,4.906-.376V42.489c-1.637.142-3.269.269-4.906.376V38.2q2.91-.2,5.82-.459"
                                        transform="translate(-47.333 -17.631)" fill="#fff" />
                                    <path id="Path_12273" data-name="Path 12273"
                                        d="M320.909,43.475c1.256.288,2.516.6,3.772.938V25.176c-1.241-.332-2.477-.64-3.718-.924V35.54q-2.126-6.135-4.256-12.191c-1.329-.259-2.658-.489-3.987-.7V41.882c1.241.2,2.477.41,3.718.65V31.03q2.235,6.179,4.471,12.445"
                                        transform="translate(-159.917 -11.582)" fill="#fff" />
                                    <path id="Path_12274" data-name="Path 12274"
                                        d="M247.045,19.407v3.259c1.139-.054,2.282-.1,3.42-.132V38.507q1.994-.059,3.987-.083V22.451c1.139-.01,2.282-.015,3.42,0V19.192c-3.611-.034-7.222.049-10.833.22"
                                        transform="translate(-126.33 -9.81)" fill="#fff" />
                                    <path id="Path_12275" data-name="Path 12275"
                                        d="M184.5,40.923l-1.373.176V36.091c.5-.064,1.007-.127,1.51-.2,1.481-.186,1.915.327,1.915,2.321,0,1.915-.459,2.507-2.047,2.707m-1.373-12.7c.45-.059.9-.112,1.349-.171,1.373-.176,1.832.362,1.832,2.165,0,1.647-.513,2.355-1.832,2.521-.45.059-.9.112-1.349.171Zm7.168,1.217a5.29,5.29,0,0,0-1.319-3.938c-.889-.752-2.023-.943-4.2-.665q-2.814.359-5.629.728V44.8q3.2-.425,6.411-.826a5.213,5.213,0,0,0,3.557-1.461,6.458,6.458,0,0,0,1.427-4.451c0-2.424-.567-3.894-1.808-4.525,1.08-.777,1.564-2.047,1.564-4.095"
                                        transform="translate(-91.613 -12.636)" fill="#fff" />
                                    <path id="Path_12276" data-name="Path 12276"
                                        d="M298.72,20.8V40.037q1.994.205,3.987.479V21.279c-1.329-.181-2.658-.337-3.987-.479"
                                        transform="translate(-152.757 -10.636)" fill="#fff" />
                                    <path id="Path_12277" data-name="Path 12277"
                                        d="M274.664,24.79q.784,3.591,1.564,7.2c-1.031-.059-2.067-.112-3.1-.151q.77-3.525,1.534-7.046M271.645,38.6c.259-1.212.523-2.428.782-3.64q2.235.073,4.471.215c.269,1.241.537,2.477.806,3.718q2.14.147,4.285.362-2.829-9.9-5.658-19.687-1.671-.1-3.342-.161-2.829,9.514-5.658,19.12,2.155.007,4.31.068"
                                        transform="translate(-136.705 -9.925)" fill="#fff" />
                                    <path id="Path_12278" data-name="Path 12278"
                                        d="M213.786,29.517c-.322.435-.7.606-1.588.694l-1.134.117V25.047c.406-.039.806-.083,1.212-.122,1.534-.151,2.018.479,2.018,2.526a3.629,3.629,0,0,1-.513,2.067m4.5-2.634c0-2.155-.376-3.445-1.319-4.31-.919-.865-2.047-1.095-4.5-.85-1.759.176-3.523.362-5.282.562V41.523q1.994-.227,3.987-.43v-7.73l.728-.073q1.334,3.731,2.668,7.471c1.471-.137,2.946-.264,4.417-.381q-1.605-3.892-3.205-7.759c1.911-1.031,2.507-2.341,2.507-5.736"
                                        transform="translate(-105.946 -11.061)" fill="#fff" />
                                    <path id="Path_12279" data-name="Path 12279"
                                        d="M235.14,20.084V39.321c1.329-.093,2.658-.181,3.987-.254V19.83q-1.994.11-3.987.254"
                                        transform="translate(-120.244 -10.14)" fill="#fff" />
                                    <path id="Path_12280" data-name="Path 12280"
                                        d="M0,4.187V8.174c55.166,14.5,110.327-14.5,165.493,0V4.187C110.327-10.321,55.166,18.689,0,4.187"
                                        transform="translate(0 0.002)" fill="#fff" />
                                    <path id="Path_12281" data-name="Path 12281"
                                        d="M0,74.749v3.987c55.166,14.5,110.327-14.5,165.493,0V74.749c-55.166-14.5-110.327,14.5-165.493,0"
                                        transform="translate(0 -36.083)" fill="#fff" />
                                </g>
                            </g>
                        </svg>

                    </div>
                </div>
				<?php } ?>
</div>
