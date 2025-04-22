<?php

/*

  * Template Name: Checkout

  */

?>

<?php while (have_posts()) : the_post(); ?>

<?php the_content();?>


<?php endwhile; ?>

<main class="d-none">
    <section class="checkout-page mt-lg-4 mt-5 pt-2">
        <div class="container">
            <div class="row justify-content-between g-0">
                <div class="col-lg-6 pe-lg-5 px-0">
                    <ul class="ps-0 mb-0 d-flex">
                        <li class="d-flex cursor-pointer align-items-center me-lg-4 me-3 pe-lg-2">
                            <label for="category1"
                                class="check-label w-100 cursor-pointer font-sans text-sm text-primary opacity-50 me-2 text-spacing">Delivery
                                Details</label>
                            <div class="checkbox-control">
                                <input type="radio" name="filter" id="category1" checked="">
                                <span class="d-block theme-checkbox"></span>
                            </div>
                        </li>
                        <li class="d-flex cursor-pointer align-items-center me-4 pe-lg-2">
                            <label for="category2"
                                class="check-label w-100 cursor-pointer font-sans text-sm text-primary opacity-50 me-2 text-spacing">Review
                                & Payments</label>
                            <div class="checkbox-control">
                                <input type="radio" name="filter" id="category2">
                                <span class="d-block theme-checkbox"></span>
                            </div>
                        </li>
                    </ul>
                    <div class="text-primary mt-lg-4 mt-5 pt-lg-2 pt-1">
                        <h2 class="headingL form-title mb-4">DELIVERY DETAILS</h2>
                        <form action="">
                            <div class="row g-3 g-md-2 pe-lg-5">
                                <div class="col-md-12 mt-lg-2 mt-3 pt-lg-1 mb-4 px-md-2">
                                    <div class="form-group">
                                        <input type="email" class="form-control w-100 text-secondary fw-medium border-0"
                                            placeholder="Email Address…">
                                        <p class="error-message d-none">here is the validation error message</p>
                                    </div>
                                </div>
                                <div class="border-bottom mt-0 mb-3"></div>
                                <div class="col-md-6 mt-lg-2 mt-3 pt-lg-1 px-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control w-100 text-secondary fw-medium border-0"
                                            placeholder="First Name…">
                                        <p class="error-message d-none">here is the validation error message</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-lg-2 mt-3 pt-lg-1 px-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control w-100 text-secondary fw-medium border-0"
                                            placeholder="Last Name…">
                                        <p class="error-message d-none">here is the validation error message</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-lg-2 mt-3 pt-lg-1 px-md-2">
                                    <div class="form-group">
                                        <input type="number"
                                            class="form-control w-100 text-secondary fw-medium border-0"
                                            placeholder="House Number*…">
                                        <p class="error-message d-none">here is the validation error message</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-lg-2 mt-3 pt-lg-1 px-md-2">
                                    <div class="form-group">
                                        <input type="number"
                                            class="form-control w-100 text-secondary fw-medium border-0"
                                            placeholder="Postcode*…">
                                        <p class="error-message d-none">here is the validation error message</p>
                                    </div>
                                </div>
                                <div class="col-12  mt-lg-2 mt-3 pt-lg-1">
                                    <select
                                        class="select-dropdown col-lg-12 product-option disable-search mt-5 select2-hidden-accessible"
                                        tabindex="-1" aria-hidden="true" data-select2-id="select2-data-7-99e4">
                                        <option data-display="select" data-select2-id="select2-data-9-bj7q">Select
                                            Address…</option>
                                        <option>Parts</option>
                                        <option>Parts</option>
                                        <option>Parts</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-lg-2 mt-3 pt-lg-1 px-md-2">
                                    <div class="form-group">
                                        <input type="tel" class="form-control w-100 text-secondary fw-medium border-0"
                                            placeholder="Phone Number*…">
                                        <p class="error-message d-none">here is the validation error message</p>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4 pt-3 d-flex flex-lg-row flex-column align-items-lg-center">
                                    <div for="" class="text-xl text-primary me-lg-5">Is you delivery address different to your billing?</div>
                                    <div class="d-flex align-items-center mt-4 mt-lg-0 pt-1 pt-lg-0">
                                        <label for="toggle"
                                            class="text-sm text-spacing text-capitalize font-sans fw-medium">Yes</label>
                                        <label class="switch">
                                            <input type="checkbox" checked id="toggle">
                                            <span class="slider round"></span>
                                        </label>
                                        <label for="toggle"
                                            class="text-sm text-spacing text-capitalize font-sans fw-medium">No</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h3 class="headingM mt-lg-4 mt-5 pt-lg-3 pt-4 mb-0">DELIVERY OPTIONS</h3>
                        <a href="javascript:void(0);"
                            class="bg-white delivery-btn text-primary font-sans mt-4 d-inline-block">
                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                <label for="subscribe" class="checkbox-control me-lg-2 me-3 pe-lg-1 cursor-pointer">
                                    <input type="checkbox" name="filter" id="subscribe" checked>
                                    <span class="d-block theme-checkbox border-0"></span>
                                </label>
                                <label for="subscribe"
                                    class="text-sm text-spacing font-sans text-primary content-font check-label text-start text-lg-center  mb-0 cursor-pointer">Standard
                                    Delivery</label>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 pt-4 pt-lg-0 mb-5 mb-lg-0">
                    <div class="your-order-box">
                        <div
                            class="d-flex align-items-center justify-content-between text-primary border-bottom-light-primary pb-3">
                            <h3 class="order-title mb-0">YOUR ORDER</h3>
                            <a href="javascript:void(0);"
                                class="text-sm font-sans text-capitalize text-decoration-underline">Amend</a>
                        </div>
                        <a href="javascript:void(0);" class="d-flex align-items-center pt-5 mb-lg-3">
                            <div class="cart-img theme-radius overflow-hidden flex-shrink-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/cart-large-img.png" alt="image" class="object-cover">
                            </div>
                            <div class="d-flex flex-xl-row flex-column align-items-center ps-4 w-100">
                                <div class="flex-lg-grow-1">
                                    <h3 class="text-primary text-xxl mb-xl-1 mb-3 line-height-1">EVEREDGE TITAN</h3>
                                </div>
                                <div class="product-prize d-lg-flex flex-shrink-0 font-sans">
                                    <div class="me-lg-5 d-flex d-lg-block mb-2 mb-lg-0">
                                        <h3
                                            class="text-sm text-spacing text-transform-none text-primary text-center mb-lg-4 mb-0 pb-lg-1 pe-3 pe-lg-0">
                                            Qty</h3>
                                        <div class="prize-counters-btns font-sans d-flex align-items-center">
                                            <span class="text-sm px-3 fw-medium">1</span>
                                        </div>
                                    </div>
                                    <div class="d-flex d-lg-block">
                                        <h3
                                            class="text-sm text-spacing text-transform-none text-primary text-center mb-lg-4 mb-0 pb-lg-1 pe-3 pe-lg-0">
                                            Price</h3>
                                        <div>
                                            <span class="text-sm font-sans fw-medium">£XX.XX</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="border-bottom pt-4"></div>
                        <div class="mt-4 text-primary">
                            <div class="d-flex justify-content-between font-sans mb-3 fw-normal">
                                <h5 class="text-transform-none text-sm text-spacing mb-0">Standard Delivery</h5>
                                <span class="text-sm text-spacing">£X.XX</span>
                            </div>
                            <div class="d-flex justify-content-between font-sans mb-3 fw-normal">
                                <h5 class="text-transform-none text-sm text-spacing mb-0">Subtotal</h5>
                                <span class="text-sm text-spacing">£XX.XX</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center product-total">
                                <h4 class="headingM mb-0">TOTAL</h4>
                                <span class="final-prize">£XX.XX</span>
                            </div>
                            <div class="mt-4 pt-lg-1">
                                <a href="order-complete.html" class="btn-primary-bg d-block" tabindex="0"
                                    data-bs-toggle="modal" data-bs-target="#thankYouModal">Continue to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enquiry modal -->
    <div class="thank-you-modal">
        <div class="modal fade" id="thankYouModal" aria-hidden="true" aria-labelledby="thankYouModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content h-100">

                    <div class="modal-body text-center thank-your-order position-relative overflow-hidden">
                        <a href="#"
                            class="logo modal-logo py-0 d-flex align-items-center me-0 position-absolute">
                            <svg id="Layer_1-2" xmlns="http://www.w3.org/2000/svg" width="266.51" height="48.26"
                                viewBox="0 0 266.51 48.26">
                                <g id="Group_2789" data-name="Group 2789">
                                    <path id="Path_12199" data-name="Path 12199"
                                        d="M0,1.31v46.9H24.3V40.26H9.72V28.57H21.68V20.62H9.72V9.26H23.91V1.31Z"
                                        fill="#5D7246" />
                                    <path id="Path_12200" data-name="Path 12200"
                                        d="M50.56,1.31,43.6,33.36,36.63,1.31H26.91l12.35,46.9h8.61L60.22,1.31Z"
                                        fill="#5D7246" />
                                    <path id="Path_12201" data-name="Path 12201"
                                        d="M62.98,1.31v46.9H87.29V40.26H72.7V28.57H84.66V20.62H72.7V9.26H86.89V1.31Z"
                                        fill="#5D7246" />
                                    <path id="Path_12202" data-name="Path 12202"
                                        d="M104.4,21.94c2.17,0,3.09-.33,3.87-1.32a8.32,8.32,0,0,0,1.25-4.93c0-5-1.18-6.64-4.93-6.64h-2.96V21.93h2.76Zm-2.5,26.27H92.18V1.31h12.87c5.98,0,8.74.79,10.97,3.09,2.3,2.3,3.22,5.52,3.22,10.78,0,8.27-1.45,11.36-6.11,13.46l7.82,19.58H110.18l-6.5-18.85h-1.77V48.22Z"
                                        fill="#5D7246" />
                                    <path id="Path_12203" data-name="Path 12203"
                                        d="M123.75,1.31v46.9h24.3V40.26H133.47V28.57h11.95V20.62H133.47V9.26h14.19V1.31Z"
                                        fill="#5D7246" />
                                    <g id="Group_2788" data-name="Group 2788">
                                        <path id="Path_12204" data-name="Path 12204"
                                            d="M165.33,40.45c4.73-.13,5.45-1.18,5.45-8.67V17.72c0-7.49-.72-8.54-5.45-8.68h-2.96v31.4h2.96ZM152.66,1.3h12.22c11.56-.2,15.83,3.81,15.63,14.71V33.48c.2,10.91-4.07,14.91-15.63,14.71H152.66Z"
                                            fill="#5D7246" />
                                        <path id="Path_12205" data-name="Path 12205"
                                            d="M198.86,21.35h14.06v8.08c0,6.83-.66,10.51-2.3,13.2-2.36,3.81-6.11,5.58-11.95,5.58-5.45,0-9.46-1.64-11.82-4.93-1.84-2.5-2.56-6.04-2.56-12.15V17.07c0-6.7.85-10.38,3.15-12.94C189.87,1.38,193.48,0,198.48,0c5.72,0,9.59,1.97,11.76,6.04,1.12,2.03,1.58,4.4,1.71,8.34h-8.87c-.46-5.19-1.38-6.57-4.33-6.57-3.74,0-4.73,2.1-4.73,9.99V30.41a25.4,25.4,0,0,0,.66,7.16,3.951,3.951,0,0,0,4.07,2.82c3.55,0,4.6-2.1,4.6-8.87V28.76h-4.47V21.34Z"
                                            fill="#5D7246" />
                                    </g>
                                    <path id="Path_12206" data-name="Path 12206"
                                        d="M216.5,1.31v46.9h24.31V40.26H226.22V28.57h11.96V20.62H226.22V9.26h14.19V1.31Z"
                                        fill="#5D7246" />
                                    <path id="Path_12207" data-name="Path 12207"
                                        d="M254.4,44.25h.79a.1.1,0,0,0,.11-.11V41.03c0-.07.01-.09.09-.09.4,0,.8.01,1.2.02a1.463,1.463,0,0,1,.42.04,1.248,1.248,0,0,1,.73.47,11.5,11.5,0,0,1,.71.97c.38.58.75,1.16,1.12,1.75a.109.109,0,0,0,.1.07c.36,0,.71,0,1.07-.01h.09a.879.879,0,0,0-.06-.1c-.47-.73-.94-1.46-1.42-2.18a2.887,2.887,0,0,0-1.09-1.02c-.02,0-.03-.02-.07-.05a.815.815,0,0,1,.09-.02c.19-.05.39-.09.57-.15a1.986,1.986,0,0,0,.94-.59,1.956,1.956,0,0,0,.4-1.74,1.757,1.757,0,0,0-1.38-1.45,4.318,4.318,0,0,0-.95-.1l-3.44-.03c-.11,0-.11,0-.11.11v7.24q0,.09.1.09m.89-6.52v-.09h.53c.74,0,1.49,0,2.23.03a1.177,1.177,0,0,1,.24,2.33,4.867,4.867,0,0,1-1.01.09c-.64,0-1.27,0-1.91.01-.08,0-.09-.02-.09-.1V37.73"
                                        fill="#5D7246" />
                                    <path id="Path_12208" data-name="Path 12208"
                                        d="M249.67,40.53l3.95-6.84h7.9l3.95,6.84-3.95,6.84h-7.9Zm3.44-7.73-4.47,7.73,4.47,7.73h8.93l4.47-7.73-4.47-7.73h-8.93Z"
                                        fill="#5D7246" />
                                </g>
                            </svg>

                        </a>
                        <!--close button-->
                        <button type="button" class="btn-close d-flex justify-content-center align-items-center"
                            data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663"
                                viewBox="0 0 15.73 15.663">
                                <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
                                    <line id="Line_610" data-name="Line 610" x2="18.551"
                                        transform="translate(1111.081 6525.313) rotate(45)" fill="none"
                                        stroke="currentcolor" stroke-linecap="round" stroke-width="1.8" />
                                    <line id="Line_611" data-name="Line 611" x2="18.551"
                                        transform="translate(1111.014 6538.43) rotate(-45)" fill="none"
                                        stroke="currentcolor" stroke-linecap="round" stroke-width="1.8" />
                                </g>
                            </svg>
                        </button>
                        <!--END close button-->
                        <div class="row h-100">
                            <div class="col-lg-5">
                                <div
                                    class="thank-content-block d-flex flex-column justify-content-lg-center text-start">
                                    <h2 class="text-primary mb-lg-3 mb-2 line-height-1">THANK YOU <br><span
                                            class="text-primary-light"> FOR YOUR <br class="d-md-none"> ORDER</span>
                                    </h2>
                                    <p class="text-xl fw-normal text-primary mb-4">Your order number #1234 and will be
                                        with you soon</p>
                                    <div
                                        class="pt-lg-1 thank-modal-btn d-flex flex-lg-row flex-column justify-content-center justify-content-lg-start w-100">
                                        <a href="#" class="btn-primary-bg d-inline-block me-lg-2">Continue to
                                            homepage</a>
                                        <a href="main-basket.html"
                                            class="btn-primary-bg d-inline-block btn-outline-primary-bg mt-2 mt-lg-0">View
                                            my order</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 ps-lg-5 px-0 pt-5 pt-lg-0 mt-4 mt-lg-0 h-100">
                                <div class="thank-you-modal-img ps-lg-5 -mx-4 h-100">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/thankyou-img.png" alt="image"
                                        class="w-100 h-100 object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>