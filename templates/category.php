<?php

/*

  * Template Name: Category

  */

?>

<main>
    <section class="category-page pt-lg-5 mt-lg-4 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-primary pe-lg-3">

                    <!-- this div for Mobile -->
                    <div class="filter-trigger d-flex d-md-none align-items-center mb-4 pb-2 cursor-pointer text-primary"
                        data-menu="true" data-menu-name="#product-filter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.895" height="23.217"
                            viewBox="0 0 20.895 23.217">
                            <path id="Path_12607" data-name="Path 12607"
                                d="M105.48,56.682A1.677,1.677,0,1,1,103.8,55,1.677,1.677,0,0,1,105.48,56.682Zm1.608,1.161a3.484,3.484,0,0,1-6.569,0H99.16a1.161,1.161,0,0,1,0-2.322h1.359a3.484,3.484,0,0,1,6.569,0h12.967a1.161,1.161,0,0,1,0,2.322Zm8.324,9.287a3.484,3.484,0,0,0,3.284-2.322h1.359a1.161,1.161,0,1,0,0-2.322H118.7a3.484,3.484,0,0,0-6.569,0H99.16a1.161,1.161,0,1,0,0,2.322h12.967A3.484,3.484,0,0,0,115.412,67.129ZM99.16,69.451a1.161,1.161,0,0,0,0,2.322H104a3.484,3.484,0,0,0,6.57,0l.068,0h9.416a1.161,1.161,0,1,0,0-2.322h-9.416l-.068,0a3.484,3.484,0,0,0-6.57,0Zm6.449,1.161a1.677,1.677,0,1,0,1.677-1.677A1.677,1.677,0,0,0,105.609,70.612Zm9.8-5.288a1.677,1.677,0,1,0-1.677-1.677A1.677,1.677,0,0,0,115.412,65.323Z"
                                transform="translate(74.094 -97.999) rotate(90)" fill="#61714b" fill-rule="evenodd" />
                        </svg>
                        <h3 class="text-primary text-xxl text-uppercase ms-3 mb-0">
                            FILTER BY
                        </h3>
                    </div>

                    <div class="filter-block product-filter theme-radius bg-secondary" id="product-filter">
                        <!-- div close -->
                        <div class="filter-close text-end mb-5 mb-2  me-3 d-lg-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663"
                                viewBox="0 0 15.73 15.663">
                                <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
                                    <line id="Line_610" data-name="Line 610" x2="18.551"
                                        transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#61714b"
                                        stroke-linecap="round" stroke-width="1.8" />
                                    <line id="Line_611" data-name="Line 611" x2="18.551"
                                        transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#61714b"
                                        stroke-linecap="round" stroke-width="1.8" />
                                </g>
                            </svg>

                        </div>
                        <!--END this div for Mobile -->
                        <div class="d-flex align-items-center pb-4 pb-lg-0 mb-3 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.895" height="23.217"
                                viewBox="0 0 20.895 23.217" class="d-block d-lg-none me-3">
                                <path id="Path_12607" data-name="Path 12607"
                                    d="M105.48,56.682A1.677,1.677,0,1,1,103.8,55,1.677,1.677,0,0,1,105.48,56.682Zm1.608,1.161a3.484,3.484,0,0,1-6.569,0H99.16a1.161,1.161,0,0,1,0-2.322h1.359a3.484,3.484,0,0,1,6.569,0h12.967a1.161,1.161,0,0,1,0,2.322Zm8.324,9.287a3.484,3.484,0,0,0,3.284-2.322h1.359a1.161,1.161,0,1,0,0-2.322H118.7a3.484,3.484,0,0,0-6.569,0H99.16a1.161,1.161,0,1,0,0,2.322h12.967A3.484,3.484,0,0,0,115.412,67.129ZM99.16,69.451a1.161,1.161,0,0,0,0,2.322H104a3.484,3.484,0,0,0,6.57,0l.068,0h9.416a1.161,1.161,0,1,0,0-2.322h-9.416l-.068,0a3.484,3.484,0,0,0-6.57,0Zm6.449,1.161a1.677,1.677,0,1,0,1.677-1.677A1.677,1.677,0,0,0,105.609,70.612Zm9.8-5.288a1.677,1.677,0,1,0-1.677-1.677A1.677,1.677,0,0,0,115.412,65.323Z"
                                    transform="translate(74.094 -97.999) rotate(90)" fill="#61714b"
                                    fill-rule="evenodd" />
                            </svg>
                            <h4 class="mb-lg-4 mb-0 pb-lg-2 open-filter-label">FILTER BY</h4>
                        </div>
                        <ul class="ps-0 mb-0">
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category1" checked="">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category1"
                                    class="w-100 cursor-pointer font-sans filter-lable">Classic</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category2">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category2" class="w-100 cursor-pointer font-sans filter-lable">Garden
                                    Rings</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category3">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category3"
                                    class="w-100 cursor-pointer font-sans filter-lable">ProEdge</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category4">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category4"
                                    class="w-100 cursor-pointer font-sans filter-lable">EasyBed</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category5">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category5" class="w-100 cursor-pointer font-sans filter-lable">Titan</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category6">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category6"
                                    class="w-100 cursor-pointer font-sans filter-lable">Halestem</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category7">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category7"
                                    class="w-100 cursor-pointer font-sans filter-lable">Planters</label>
                            </li>
                            <li class="d-flex cursor-pointer align-items-center mb-4">
                                <div class="checkbox-control me-md-3 me-3">
                                    <input type="checkbox" name="filter" id="category8">
                                    <span class="d-block theme-checkbox"></span>
                                </div>
                                <label for="category8" class="w-100 cursor-pointer font-sans filter-lable">Custom
                                    Planter</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 ps-lg-3 filter-image-box">
                    <div class="row g-0">
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block d-none d-lg-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden">
                                    <img src="assets/images/home/featured-img-1.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Titan</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden">
                                    <img src="assets/images/home/featured-img-2.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Garden Rings</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden position-relative">
                                    <img src="assets/images/home/featured-img-3.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                    <div
                                        class="featured-tag bg-danger transition rounded-full position-absolute d-flex flex-column justify-content-center align-items-center">
                                        <h5 class="text-secondary headingM mb-0">NEW</h5>
                                        <span class="text-base text-secondary opacity-50 mb-0">FOR 2022</span>
                                    </div>
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Trellis</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block d-none d-lg-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden">
                                    <img src="assets/images/general/filter-img-1.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Titan</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block d-none d-lg-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden position-relative">
                                    <img src="assets/images/general/filter-img-2.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                    <div
                                        class="featured-tag bg-danger rounded-full position-absolute d-flex flex-column justify-content-center align-items-center transition">
                                        <h5 class="text-secondary headingM mb-0">NEW</h5>
                                        <span class="text-base text-secondary opacity-50 mb-0">FOR 2022</span>
                                    </div>
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Trellis</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block d-none d-lg-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden position-relative">
                                    <img src="assets/images/general/filter-img-3.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Trellis</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="the-trade category-trade-sec pt-0 pb-lg-5 pb-4">
                        <div class="trade-content-box theme-radius overflow-hidden">
                            <div class="trade-img">
                                <img src="assets/images/home/trade-img.png" alt="trade-img"
                                    class="w-100 h-100 object-cover d-none d-lg-block">
                                <img src="assets/images/home/trade-mobile-img.png" alt="trade-img"
                                    class="w-100 h-100 object-cover d-block d-lg-none">
                            </div>
                            <div class="trade-info">
                                <h2 class="headingXL text-secondary mb-2 line-height-1">IN THE TRADE?</h2>
                                <div
                                    class="d-flex flex-lg-row flex-column justify-content-between align-items-start align-items-lg-center">
                                    <div class="col-lg-8 mb-2 pb-1 pb-lg-0 mb-lg-0">
                                        <p class="text-lg fw-light text-secondary opacity-75 mb-0 ">
                                            Curabitur a dolor dolor. Proin nec enim sit amet urna faucibus cursus id id
                                            lectus. Integer venenatis dapibus dui, vitae laoret.ex tincidunt ac. In
                                            lectus sapien, posuere sed libero. Aliquam diam nulla, ultricies in neque
                                            vitae, mattis pretium urna. Pellentesque placerat rhoncus nunc, quis
                                            ullamcorper lorem posuere sit amet.</p>
                                    </div>
                                    <a href="contact.html" class="btn">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Get in touch</span>
                                            <div
                                                class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242"
                                                    viewBox="0 0 19.249 19.242">
                                                    <path id="Path_12443" data-name="Path 12443"
                                                        d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z"
                                                        transform="translate(0 19.242) rotate(-90)"
                                                        fill="currentcolor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden">
                                    <img src="assets/images/home/featured-img-1.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Titan</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block d-none d-lg-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden">
                                    <img src="assets/images/home/featured-img-2.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Garden Rings</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 pb-lg-5 pb-4 image-block d-none d-lg-block">
                            <a href="javascript:void(0);"
                                class="featured-card card-hover overflow-hidden bg-white d-block">
                                <div class="featured-img overflow-hidden position-relative">
                                    <img src="assets/images/home/featured-img-3.png" alt="featured-img"
                                        class="w-100 h-100 object-cover">
                                    <div
                                        class="featured-tag bg-danger rounded-full position-absolute d-flex flex-column justify-content-center align-items-center transition">
                                        <h5 class="text-secondary headingM mb-0">NEW</h5>
                                        <span class="text-base text-secondary opacity-50 mb-0">FOR 2022</span>
                                    </div>
                                </div>
                                <div class="featured-body bg-white font-sans transition">
                                    <h4 class="text-lg text-primary mb-2 text-transform-none">EverEdge Trellis</h4>
                                    <h3 class="text-black fw-medium text-transform-none mb-0">£264.00 inc. VAT</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-4 mt-lg-3">
                        <a href="javascript:void(0);" class="btn btn-outline-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Load more</span>
                                <div
                                    class="ms-1 btn-arrow load-more-bg rounded-full bg-primary d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.351" height="20.351"
                                        viewBox="0 0 20.351 20.351">
                                        <g id="Group_2889" data-name="Group 2889"
                                            transform="translate(3838.663 -5398.846) rotate(45)">
                                            <line id="Line_610" data-name="Line 610" x2="18.551"
                                                transform="translate(1111.081 6525.313) rotate(45)" fill="none"
                                                stroke="#f5f3f0" stroke-linecap="round" stroke-width="1.8" />
                                            <line id="Line_611" data-name="Line 611" x2="18.551"
                                                transform="translate(1111.014 6538.43) rotate(-45)" fill="none"
                                                stroke="#f5f3f0" stroke-linecap="round" stroke-width="1.8" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>