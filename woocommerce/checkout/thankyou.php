<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>
<div class="position-fixed top-0 start-0 w-100 zindex">
    <div class="navbar">
        <div class="container position-relative">
            <div class="row justify-content-between g-0 w-100 align-items-center">
                <div class="col-12 col-lg-3 d-flex flex-wrap justify-content-between align-items-center logo-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="266.51" height="48.26" viewBox="0 0 349.548 69.994">
                        <g id="Group_1" data-name="Group 1" transform="translate(-15039 1488)">
                            <path fill="#5D7246" id="Path_12199" data-name="Path 12199" d="M0,1.31V69.387H35.274V57.847H14.109V40.88H31.47V29.34H14.109V12.85h20.6V1.31Z" transform="translate(15039 -1487.408)"></path>
                            <path fill="#5D7246" id="Path_12200" data-name="Path 12200" d="M61.239,1.31l-10.1,46.521L41.019,1.31H26.91L44.837,69.387h12.5L75.263,1.31Z" transform="translate(15051.152 -1487.408)"></path>
                            <path fill="#5D7246" id="Path_12201" data-name="Path 12201" d="M62.98,1.31V69.387H98.268V57.847H77.089V40.88H94.45V29.34H77.089V12.85h20.6V1.31Z" transform="translate(15067.438 -1487.408)"></path>
                            <path fill="#5D7246" id="Path_12202" data-name="Path 12202" d="M109.924,31.256c3.149,0,4.485-.48,5.618-1.916a12.077,12.077,0,0,0,1.813-7.155c0-7.258-1.713-9.638-7.155-9.638h-4.3V31.24H109.9Zm-3.635,38.131H92.18V1.31h18.68c8.681,0,12.686,1.147,15.924,4.485,3.339,3.339,4.675,8.014,4.675,15.644,0,12-2.1,16.49-8.87,19.539L133.94,69.4H118.306l-9.434-27.353H106.3V69.4Z" transform="translate(15080.624 -1487.408)"></path>
                            <path fill="#5D7246" id="Path_12203" data-name="Path 12203" d="M123.75,1.31V69.387h35.272V57.847H137.85V40.88H155.2V29.34H137.85V12.85h20.605V1.31Z" transform="translate(15094.878 -1487.408)"></path>
                            <g id="Group_2788" data-name="Group 2788" transform="translate(15260.593 -1488)">
                            <path fill="#5D7246" id="Path_12204" data-name="Path 12204" d="M171.05,58.129c6.865-.189,7.911-1.713,7.911-12.585V25.136c0-10.873-1.046-12.4-7.911-12.6h-4.3V58.119h4.3ZM152.66,1.305H170.4c16.781-.29,22.979,5.531,22.688,21.352V48.012c.29,15.836-5.908,21.643-22.688,21.352H152.66Z" transform="translate(-152.66 0.586)"></path>
                            <path fill="#5D7246" id="Path_12205" data-name="Path 12205" d="M205.439,30.99h20.41V42.723c0,9.914-.957,15.255-3.339,19.16-3.425,5.527-8.87,8.1-17.347,8.1-7.911,0-13.732-2.38-17.157-7.155-2.676-3.629-3.715-8.767-3.715-17.637V24.778c0-9.726,1.235-15.068,4.572-18.783C192.39,2,197.629,0,204.9,0c8.3,0,13.921,2.859,17.071,8.767,1.626,2.946,2.293,6.381,2.482,12.106H211.564c-.667-7.534-2-9.537-6.284-9.537-5.428,0-6.865,3.049-6.865,14.5v18.3a36.876,36.876,0,0,0,.957,10.393,5.735,5.735,0,0,0,5.908,4.094c5.146,0,6.678-3.049,6.678-12.876V41.747h-6.488V30.976Z" transform="translate(-138.378)"></path>
                            </g>
                            <path fill="#5D7246" id="Path_12206" data-name="Path 12206" d="M216.5,1.31V69.387h35.288V57.847H230.609V40.88H247.97V29.34H230.609V12.85h20.6V1.31Z" transform="translate(15136.76 -1487.408)"></path>
                        </g>
                    </svg>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end">
                    <a href="/" class="closeThankyou">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663" viewBox="0 0 15.73 15.663">
                            <g id="Group_2900" data-name="Group 2900" transform="translate(-1109.741 -6524.04)">
                                <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#5d7246" stroke-linecap="round" stroke-width="1.8"/>
                                <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#5d7246" stroke-linecap="round" stroke-width="1.8"/>
                            </g>
                        </svg>


                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="woocommerce-order">
<main>
        
        <section class="order-success-section position-relative overflow-hidden">
            <div class="">
                <div class="row h-100">
                    <div class="col-lg-5 offset-md-1 d-flex align-items-center">
                        <div
                            class="thank-content-block d-flex flex-column justify-content-lg-center text-start">
                            <h2 class="text-primary mb-lg-3 mb-2 line-height-1 headingXXL">THANK YOU <br><span
                                    class="text-primary-light"> FOR YOUR <br class="d-md-none"> ORDER</span>
                            </h2>
                            <p class="text-xl fw-normal text-primary mb-4">Your order number #<?php echo $order->get_order_number();?> and will be
                                with you soon</p>
                            <div
                                class="pt-lg-1 thank-modal-btn d-flex flex-lg-row flex-column justify-content-center justify-content-lg-start w-100">
                                <a href="/" class="btn-primary-bg d-inline-block me-lg-2">Continue to
                                    homepage</a>
                                <a href="/my-account/orders/"
                                    class="btn-primary-bg d-inline-block btn-outline-primary-bg mt-2 mt-lg-0">View
                                    my order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-0 pt-5 pt-lg-0 mt-4 mt-lg-0 h-100">
                        <div class="thank-you-modal-img ps-lg-5 -mx-4 h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/thankyou-img.png" alt="image"
                                class="w-100 h-100 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>

<div class="padding-top--50px"></div>
