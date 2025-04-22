<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


?>



	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>


		

	
		<main class="pb-5">
        <?php 
         // HERE we print the notices
        wc_print_notices();
    ?>
    <!-- hero section -->
    <section class="position-relative">
        <div class="container d-none">

            <?php
                    if ( function_exists( 'woocommerce_breadcrumb' ) ) {
                        woocommerce_breadcrumb( array(
                            'delimiter'   => ' / ',
                            'wrap_before' => '<nav class="d-none d-lg-block>',
                            'wrap_after'  => '</nav>',
                            'before'      => '',
                            'after'       => '',
                            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
                        ));
                    }
                ?>
        </div>
        <div class="row g-0 product-info-sec">
            <div class="col-lg-7 product-slider slick-indicators slick-horizontal-dots-center">

          

			<?php $attachment_ids = $product->get_gallery_image_ids();

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

            <?php global $product; ?>
            <?php if( $product->is_type( 'variable' ) ) { ?>
            <?php 
            do_action( 'woocommerce_single_product_summary' );
            ?>

            <?php } else { ?>

                <?php 

                $attributes = $product->get_attributes();
                $attribute_keys  = array_keys( $attributes );
                $variations_json = wp_json_encode( $available_variations );
                $variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

                    ?>

            <div class="col-lg-5 product-info-block">
                <div class="col-lg-9 mx-auto d-flex flex-column justify-content-center h-100 pt-4 pt-lg-0 mt-3 mt-lg-0">
               <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
                <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
                
					<?php the_title( '<h1 class="headingXXL text-primary mb-2 pb-1 pb-lg-0 line-height-1">', '</h1>' ); ?>


                    
					<?php $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
					if ($short_description ) {?>
						<div class="col-lg-10">
                            <div class="text-sm fw-light text-gray"><?php echo $short_description; // WPCS: XSS ok. ?></div>
                        </div>
					<?php }

					?>

                    <?php if ( have_rows( 'alternate_products' ) ) : ?>

                        <div class="d-flex flex-wrap justify-content-between mb-3">

                            <?php while ( have_rows( 'alternate_products' ) ) :
                                the_row(); ?>

                                <?php $currentURL = get_permalink(); ?>
                            
                                <?php
                                $product = get_sub_field( 'product' );
                                if ( $product ) :
                                    $post = $product;
                                    setup_postdata( $post ); 
                                    ?>

                                    <a class="alternative-product-link d-inline-block <?php if($currentURL == get_permalink()): ?>product-link-outline<?php endif; ?>" href="<?php the_permalink(); ?>">

                                        <?php
                                        $alternate_image = get_sub_field( 'alternate_image' );
                                        if ( $alternate_image ) : ?>

                                            <img src="<?php echo esc_url( $alternate_image['url'] ); ?>" alt="<?php echo esc_attr( $alternate_image['alt'] ); ?>" class="alternative-product-image">

                                        <?php else: ?>

                                            <img src="<?php echo get_the_post_thumbnail_url();  ?>" class="alternative-product-image">

                                        <?php endif; ?>

                                        <div class="alternative-product-title text-center mt-2">

                                            <?php if ( $alternate_title = get_sub_field( 'alternate_title' ) ) : ?>

                                                <?php echo esc_html( $alternate_title ); ?>

                                            <?php else: ?>

                                                <?php the_title(); ?>

                                            <?php endif; ?>

                                        </div>
                                    </a>
                                
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                                
                            <?php endwhile; ?>

                            <?php if ( $alternate_description = get_field( 'alternate_description' ) ) : ?>
                                <div class="mb-3 mt-3 text-sm fw-light font-sans text-gray short-description">
                                    <?php echo $alternate_description; ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    <?php endif; ?>
					

                    <?php if ( have_rows( 'related_documents' ) ) : ?>
                    <ul class="flex-wrap product-modal-label mb-4 pb-lg-2 pb-3 justify-content-lg-start">
                        <?php while ( have_rows( 'related_documents' ) ) :
		                the_row(); ?>

                        <?php $file = get_sub_field( 'file' );
                        if ( $file ) : ?>
                        <li class="">
                            <a target="_blank" href="<?php echo esc_url( $file['url'] ); ?>"
                                class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans"><?php the_sub_field('file_title'); ?></a></li>
                                <?php endif; ?>

                                <?php endwhile; ?>
                            <li>
                                <a class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans" href="/nbs/" target="_blank">NBS</a>
                            </li>        
                        </ul>
                    <?php endif; ?>

                    <?php if (! have_rows( 'alternate_products' ) ) : ?>
                    <div class="border-bottom"></div>
                    <?php endif; ?>

                    <div
                        class="d-flex flex-lg-row flex-column align-items-lg-center justify-content-end pt-lg-5 pt-4">
                        <?php
                            do_action( 'woocommerce_before_add_to_cart_quantity' ); ?>
                            <div>

                                <div class="prize-counters-btns font-sans d-flex align-items-center fw-medium controls--qty__product mb-2 me-4">
                                    <div type="button" class="cartMinusProduct bg-transparent border-0 text-primary me-2">-</div>
                                        <div class="fakeQtyInput">
                                            <?php
                                                woocommerce_quantity_input(
                                                    array(
                                                        'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                                                        'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                                                        'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                                                    )
                                                );
                                            ?>
                                        </div>
                                    
                                    <div type="button" class="cartPlusProduct bg-transparent border-0 text-primary ms-2">+</div>
                                </div>

                            </div>

                            


                            <div>
                                <?php if(get_field('replace_custom_button')) : ?>

                                    <a href="/contact/" class="btn-primary-bg ms-lg-auto <?php if ( get_field( 'is_root_product' ) ) : ?>disable-button<?php endif; ?>">Get in touch</a>

                                    <?php elseif(get_field('is_trade_product') == 'yes') : ?>

                                    <a href="/trade/" class="btn-primary-bg ms-lg-auto">Contact us for price</a>

                                    <?php else : ?>

                                    <?php if (get_field('custom_product') != 'Yes'):?>
                                        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn-primary-bg ms-lg-auto <?php if ( get_field( 'is_root_product' ) ) : ?>disable-button<?php endif; ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                                    <?php else:?>
                                        <a href="/custom-planter/" class="btn-primary-bg ms-lg-auto">Start Customising</a>
                                    <?php endif;?>

                                <?php  endif; ?>
                            </div>

                    </div>

                    <div class="product-prize pt-lg-3 mb-4 mb-lg-0 pb-lg-5 pb-3">
                            <?php if (get_field('custom_product') != 'Yes'):?>
                                <h3 class="text-primary mb-lg-0 mb-3"><?php if ( get_field( 'is_root_product' ) ) : ?>From<?php endif; ?><?php echo $product->get_price_html(); ?><sub
                                        class="ps-2 text-xs text-capitalize font-sans">(Inc. Vat)</sub></h3>

                                <div class="text-xs text-capitalize font-sans">(Delivery Added At Checkout)</div>
                            <?php else:?>
                                <h3 class="text-primary mb-lg-0 mb-3">POA</h3>
                            <?php endif;?>
                        </div>
                  

                        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                       


                    <?php do_action( 'woocommerce_after_variations_form' ); ?>
                    </form>
                    <?php do_action( 'woocommerce_after_add_to_cart_form' );?>
                  
                </div>
            </div>
            <?php } ?>
            <div class="woocommerce-notices-wrapper"></div>
        </div>
    </section>

    <!-- choose titan -->
    <section class="choose-titan-sec why-choose-everedge bg-primary position-relative">
        <div class="container">
		<?php if ( $cards_title = get_field( 'cards_title' ) ) : ?>
            <h2 class="text-secondary section-title mb-0 fw-semibold"><?php echo esc_html( $cards_title ); ?></h2>
			<?php endif; ?>

            <div class="row g-0 mt-lg-5 mt-4 pt-lg-2 pt-1">
			<?php if ( have_rows( 'cards' ) ) : ?>
			<?php while ( have_rows( 'cards' ) ) :
				the_row(); ?>
                <div class="col-12 col-lg-4">
                    <div class="d-block choose-card overflow-hidden">
						<?php $image = get_sub_field( 'image' );
						if ( $image ) : ?>
                        <div class="card-img overflow-hidden">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt=""
                                class="w-100 h-100 object-cover">
                        </div>
						<?php endif; ?>
                        <div class="card-body text-center bg-secondary transition">
						<?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
                            <h3 class="text-primary mb-2 fw-semibold"><?php echo esc_html( $heading ); ?></h3>
							<?php endif; ?>

							<?php if ( $content = get_sub_field( 'content' ) ) : ?>
                            <p class="text-lg text-gray px-4 mb-0 fw-light"><?php echo $content; ?></p>
								<?php endif; ?>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php endif; ?>
            </div>
        </div>
    </section>

    <?php 
    /*
    $attributes = $product->get_attributes();
   
    if ( ! empty( $attributes ) ) :
    
    ?>

    <!-- dimensions -->
    <section class="dimensions-sec bg-primary text-secondary pb-5 position-relative">
        <div class="container pb-3">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0 pb-2 pb-lg-0">
                    <h3 class="section-title">Product Specifications</h3>
                </div>
                <?php 
                 foreach ( $attributes as $attribute ) : 
                    $attribute_label = wc_attribute_label( $attribute->get_name() );
                    if ( $attribute->is_taxonomy() ) {
                        $attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
                        $attribute_values_string = implode( ', ', $attribute_values );
                    } else {
                        // For custom product attributes (not a taxonomy), get the values as is
                        $attribute_values_string = implode( ', ', $attribute->get_options() );
                    }
                 ?>
                    <div class="col-12 col-lg-6 dimensions-content">
                        <h4 class="medium-title mb-2 pb-1"><?php echo $attribute_label; ?>: <?php echo $attribute_values_string; ?></h4>
                     
                    </div>
                <?php break; endforeach; ?>
            </div>

			<?php $image = get_field( 'image' );
			if ( $image ) : ?>
            <div class="w-100 text-center mt-4 d-none d-lg-block">
                <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="dimension-img" class="mx-auto">
            </div>
			<?php endif; ?>

            <?php if(count($attributes) > 1) : ?>
                <div class="row justify-content-between dimension-block mt-4">
                    <?php  
                    array_shift($attributes);
                    foreach ( $attributes as $attribute ) : 
                        $attribute_label = wc_attribute_label( $attribute->get_name() );
                        if ( $attribute->is_taxonomy() ) {
                            $attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
                            $attribute_values_string = implode( ', ', $attribute_values );
                        } else {
                            // For custom product attributes (not a taxonomy), get the values as is
                            $attribute_values_string = implode( ', ', $attribute->get_options() );
                        }
                       
                    ?>
                    <div
                        class="col-12 col-lg-4 dimensions-content border-block-end text-lg-end d-flex flex-column justify-content-end pt-lg-5">
                        <h4 class="medium-title mb-2 pb-1 "><?php echo $attribute_label; ?>: <?php echo  $attribute_values_string; ?></h4>
                    </div>
                   
                    <?php $i++; endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; */ ?>

	<?php if ( $video_link = get_field( 'video_link' ) ) : ?>
    <!-- product video -->
    <section class="product-video-sec position-relative text-center">
        <a href="<?php echo esc_html( $video_link ); ?>" class="product-video-img" data-fancybox>

			<?php $video_thumbnail = get_field( 'video_thumbnail' );
			if ( $video_thumbnail ) : ?>
                <img src="<?php echo esc_url( $video_thumbnail['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $video_thumbnail['alt'] ); ?>" class="h-100 w-100 object-cover">
			<?php endif; ?>

            <i class="fa-solid fa-play"></i>

        </a>
    </section>
	<?php endif; ?>

	<?php if ( have_rows( 'recommended_finishes' ) ) : 
        

        ?>
	<?php while ( have_rows( 'recommended_finishes' ) ) :
		the_row(); 
        
        $finish_1 = get_sub_field( 'finish_1' );
        $finish_2 = get_sub_field( 'finish_2' );

        if( $finish_1 ||  $finish_2) :
        ?>
    <!-- suitable finishes -->
    <section class="suitable-finishes position-relative">
        <div class="container">
            <h2 class="text-primary section-title fw-semibold">MOST SUITABLE FINISHES</h2>
            <div class="row pt-4 mt-3 flex-nowrap overflow-auto scroll-hidden -mr-4">
			<?php
			
			if ( $finish_1 ) :
				$post = $finish_1;
				setup_postdata( $post ); 
				?>

                <div class="col-11 col-lg-6 px-lg-2 px-1">
                    <a href="/finishes/#<?php echo clean(get_the_title())?>" class="suitable-card  overflow-hidden d-block position-relative transition">
                        <div class="suitable-img theme-radius overflow-hidden">
                        <?php $example_image = get_field( 'example_image' );
                            if ( $example_image ) : ?> 
                            <img src="<?php echo esc_url( $example_image['sizes']['large'] ); ?>" alt="image"
                                class="w-100 h-100 object-cover">
                                <?php endif; ?>

                            <div class="small-img position-absolute">
                            <?php $finish_image = get_field( 'finish_image' );
                            if ( $finish_image ) : ?>
                                <img src="<?php echo esc_url( $finish_image['sizes']['large'] ); ?>" alt="about-img"
                                    class="object-cover transition">
                                    <?php endif; ?>
                            </div>
                        </div>
                        <div class="suitable-card-body mt-4 pt-3">
                            <h3 class="text-primary mb-3 fw-semibold"><?php the_title(); ?></h3>
                            <button class="btn btn-outline-primary btn-md">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Learn more</span>
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
                    </a>
                </div>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

				<?php
				$finish_2 = get_sub_field( 'finish_2' );
				if ( $finish_2 ) :
					$post = $finish_2;
					setup_postdata( $post ); 
					?>

                <div class="col-11 col-lg-6 px-lg-2 px-1">
                    <a href="/finishes/#<?php echo clean(get_the_title())?>" class="suitable-card  overflow-hidden d-block position-relative">
                        <div class="suitable-img theme-radius overflow-hidden">
                        <?php $example_image = get_field( 'example_image' );
                            if ( $example_image ) : ?> 
                            <img src="<?php echo esc_url( $example_image['sizes']['large'] ); ?>" alt="image"
                                class="w-100 h-100 object-cover">
                                <?php endif; ?>

                            <div class="small-img position-absolute">
                               <?php $finish_image = get_field( 'finish_image' );
                            if ( $finish_image ) : ?>
                                <img src="<?php echo esc_url( $finish_image['sizes']['large'] ); ?>" alt="about-img"
                                    class="object-cover transition">
                                    <?php endif; ?>
                            </div>
                        </div>
                        <div class="suitable-card-body mt-4 pt-3">
                            <h3 class="text-primary mb-3 fw-semibold"><?php the_title(); ?></h3>
                            <button class="btn btn-outline-primary btn-md">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Learn more</span>
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
                    </a>
                </div>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </div>
        </div>
    </section>
	<?php endif; endwhile; ?>
<?php endif; ?>

    <!-- faqs -->
    <section class="bg-primary bg-green-img product-faqs">
        <div class="container">
            <div class="col-lg-10 px-lg-5 mx-auto">
                <h3 class="headingL text-white text-center mb-0 fw-semibold">FREQUENTLY ASKED QUESTIONS</h3>
                <div class="pt-4 mt-2 mt-lg-0 pt-md-5">
                    <div class="accordion theme-accordion" id="accordionExample">
					<?php

                    $relatedQuestions = get_field('related_faq_questions');

					$args = array(
						'post_type' => 'questions_post_item',
						'order' => 'DESC',
						'orderby' => 'date',
						'posts_per_page' => 3,
					);

                    if($relatedQuestions){
                        $args['post__in'] = $relatedQuestions;
                        $args['posts_per_page'] = 99;
                    }

					$the_query = new WP_Query($args);

					$i = 0;

					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) : $the_query->the_post();
							?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php the_id(); ?>">
                                <button class="accordion-button medium-title text-primary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse<?php the_id(); ?>" aria-expanded="false"
                                    aria-controls="collapse<?php echo $i; ?>">
                                    <span class="fw-semibold"><?php the_title(); ?></span>
                                </button>
                            </h2>
                            <div id="collapse<?php the_id(); ?>" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 text-gray text-sm">
                                    <div class="col-lg-10 pe-lg-4">
                                        <div class="pb-lg-4 pb-3"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php $i++; endwhile; endif; wp_reset_query(); ?>
                        <div class="text-center mt-4 pt-2">
                            <a href="/faqs/" class="btn">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>View all</span>
                                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                            viewBox="0 0 19.249 19.242">
                                            <path id="Path_12443" data-name="Path 12443"
                                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php if ( have_rows( 'related_posts' ) ) : ?>
	<?php while ( have_rows( 'related_posts' ) ) :
		the_row(); ?>
    <!-- related post -->
    <section class="related-post-sec position-relative">
        <div class="container">
            <h2 class="section-title text-primary">RELATED POSTS</h2>
            <div class="row mt-4 pt-3 flex-nowrap overflow-auto scroll-hidden -mr-4">
			<?php
			$post_1 = get_sub_field( 'post_1' );
			if ( $post_1 ) :
				$post = $post_1;
				setup_postdata( $post ); 
				?>
	
                <div class="col-11 col-lg-6 px-2">
                    <a href="<?php the_permalink(); ?>"
                        class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                        <div class="resources-img position-relative overflow-hidden">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="resources-img"
                                class="w-100 h-100 object-cover">
                                 <?php
                                $categories = get_the_terms( $post->id, 'blog_posts_category' );
                                if($categories):
                                    $cats = '';
                                    foreach($categories as $category):?>
                                        <div
                                        class="resources-tag  position-absolute text-lg text-uppercase text-center text-secondary">
                                        <?php echo $category->name?>
                                    </div>
                                    <?php endforeach;
                                    
                                endif;
                                    ?>
                            
                        </div>
                        <div class="card-body bg-white p-4 transition">
                            <h3 class=" mb-3"><?php echo wp_trim_words(get_the_title(), 3, '...'); ?></h3>
                            <div class="text-gray fw-light pe-lg-5 me-lg-5 mb-2 pb-1  2">
                                <?php the_content(); ?>
							</div>
                            <div
                                class="card-arrow-btn bg-primary d-flex justify-content-center align-items-center rounded-full transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                    viewBox="0 0 19.249 19.242">
                                    <path id="Path_12456" data-name="Path 12456"
                                        d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                        transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			<?php
			$post_2 = get_sub_field( 'post_2' );
			if ( $post_2 ) :
				$post = $post_2;
				setup_postdata( $post ); 
				?>
	
                <div class="col-11 col-lg-6 px-2">
                    <a href="<?php the_permalink(); ?>"
                        class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                        <div class="resources-img position-relative overflow-hidden">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="resources-img"
                                class="w-100 h-100 object-cover">
                            <div
                                class="resources-tag  position-absolute text-lg text-uppercase text-center text-secondary">
                                GENERAL
                            </div>
                        </div>
                        <div class="card-body bg-white p-4 transition">
                            <h3 class="mb-3"><?php echo wp_trim_words(get_the_title(), 3, '...'); ?></h3>
                            <div class="text-gray fw-light pe-lg-5 me-lg-5 mb-2 pb-1  2">
                                <?php the_content(); ?></div>
                            <div
                                class="card-arrow-btn bg-primary d-flex justify-content-center align-items-center rounded-full transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                    viewBox="0 0 19.249 19.242">
                                    <path id="Path_12456" data-name="Path 12456"
                                        d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                        transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </div>
        </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( $heading = get_field( 'heading', 'options' ) ) : ?>
    <!-- the-trade -->
    <section class="the-trade  product-trade-sec">
        <div class="container">
            <div class="trade-content-box theme-radius overflow-hidden">
                <div class="trade-img">

                    <?php $image = get_field( 'image', 'options' );
                    if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="trade-img"
                        class="w-100 h-100 object-cover d-none d-lg-block">
                    <?php endif; ?>

                    <?php $image_mobile = get_field( 'image_mobile', 'options' );
                    if ( $image_mobile ) : ?>
                    <img src="<?php echo esc_url( $image_mobile['sizes']['large'] ); ?>" alt="trade-img"
                        class="w-100 h-100 object-cover d-block d-lg-none">
                    <?php endif; ?>

                </div>
                <div class="trade-info">
                
                    <h2 class="headingXL text-secondary mb-2 fw-semibold"><?php echo esc_html( $heading ); ?></h2>
                    <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start">
                        <?php if ( $content = get_field( 'content', 'options' ) ) : ?>
                        <div class="col-lg-8 mb-2 pb-1 pb-lg-0 mb-lg-0">
                            <div class="text-lg fw-light text-secondary opacity-75 mb-0  2">
                                <?php echo $content; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ( $link = get_field( 'link', 'options' ) ) : ?>
                        <a href="<?php echo esc_html( $link ); ?>" class="btn btn-lg">
                            <div class="d-flex justify-content-between align-items-center">
                                <span><?php the_field('button', 'options'); ?></span>
                                <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                        viewBox="0 0 19.249 19.242">
                                        <path id="Path_12443" data-name="Path 12443"
                                            d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                            transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- div border -->
    <div class="container">
        <div class="border-bottom d-block d-lg-none"></div>
    </div>


    <?php if ( have_rows( 'testimonials', 'options' ) ) : ?>
    <!-- Why choose everedge Start -->
    <section class="why-choose-sec slick-overflow">
        <div class="container">
            <h2 class="section-title text-primary mb-5 pb-lg-2 text-center fw-semibold">WHY CHOOSE EVEREDGE?</h2>
            <div class="col-lg-8 choose-slider mx-auto">
	        <?php while ( have_rows( 'testimonials', 'options' ) ) :
		    the_row(); ?>

                <div class="px-lg-3">
                    <div class="choose-box bg-primary text-white">

                        <?php if ( $heading = get_sub_field( 'heading', 'options' ) ) : ?>
                        <h4 class="mb-3 fw-semibold"><?php echo esc_html( $heading ); ?></h4>
                        <?php endif; ?>

                        <?php if ( $quote = get_sub_field( 'quote', 'options' ) ) : ?>
                        <p class="text-xl fw-light mb-0 pe-lg-5 mb-5 pb-lg-4 pb-3"><span>"</span><?php echo $quote; ?><span>"</span></p>
                        <?php endif; ?>

                        <?php if ( $quotee = get_sub_field( 'quotee', 'options' ) ) : ?>
                        <span class="text-base text-capitalize font-sans"><?php echo esc_html( $quotee ); ?></span>
                        <?php endif; ?>

                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Why choose everedge End -->
    <?php endif; ?>

    <!-- div border -->
    <div class="container">
        <div class="border-bottom d-block d-lg-none"></div>
    </div>

    <!-- want to explore -->
    <section class="want-to-explore">
        <div class="container text-center">
        <?php if ( $heading_top = get_field( 'heading_top', 'options' ) ) : ?>
            <h3 class="text-primary mb-0 line-height-1 fw-semibold"><?php echo esc_html( $heading_top ); ?></h3>
            <?php endif; ?>

            <?php if ( $heading_bottom = get_field( 'heading_bottom', 'options' ) ) : ?>
            <h5 class="headingL text-primary-light mb-lg-4 pb-2 mb-lg-0 mb-1 fw-semibold"><?php echo esc_html( $heading_bottom ); ?></h5>
            <?php endif; ?>

            <?php if ( $link = get_field( 'link_link', 'options' ) ) : ?>
            <a href="<?php echo esc_html( $link ); ?>" class="btn btn-outline-primary">
                <div class="d-flex justify-content-between align-items-center">
                    <span><?php the_field('link_button', 'options' ) ; ?></span>
                    <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                            viewBox="0 0 19.249 19.242">
                            <path id="Path_12443" data-name="Path 12443"
                                d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                        </svg>
                    </div>
                </div>
            </a>
            <?php endif; ?>
        </div>
    </section>

    <section class="hero-section home-bottom-cards product-bottom-card pb-0">
        <div class="container">
            <div class="row g-0 -mx-4">

            <?php if ( have_rows( 'blocks', 'options' ) ) : ?>
	        <?php while ( have_rows( 'blocks', 'options' ) ) :
		    the_row(); ?>
                <div class="col-12 col-lg-6 px-lg-2">
                <?php if ( $link = get_sub_field( 'link', 'options' ) ) : ?>
                    <a href="<?php echo esc_html( $link ); ?>" class="theme-radius d-block card-hover overflow-hidden w-100">
                        <div class="hero-img position-relative overflow-hidden">
                        <?php $background_image = get_sub_field( 'background_image', 'options' );
                        if ( $background_image ) : ?>
                            <img src="<?php echo esc_url( $background_image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>"
                                class="h-100 w-100 object-cover">
                                <?php endif; ?>
                            <div
                                class="position-absolute top-50 translate-middle-y hero-content w-100 text-lg-center text-start">
                                <?php if ( $heading = get_sub_field( 'heading', 'options' ) ) : ?>
                                <h2 class="section-title text-secondary mb-lg-3 mb-2 pb-1 fw-semibold"><?php echo esc_html( $heading ); ?></h2>
                                <?php endif; ?>
                                <button class="btn">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>View all</span>
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
                    </a>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>


	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>



<?php
get_footer( 'shop' );



/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
