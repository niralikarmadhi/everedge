<?php

/*

  * Template Name: Account

  */

?>

<?php while (have_posts()) : the_post(); ?>



<?php the_content();?>


<?php endwhile; ?>


<!-- <main class="position-relative overflow-hidden">
    <section class="account-bg account-bg-img position-relative">
        <div class="container h-100 d-lg-flex justify-content-center align-items-center">
            <div class="row w-100">
                <div class="col-lg-6 pe-lg-5">
                    <div class="register-left-box contact-left-form bg-white theme-radius text-primary me-lg-5">
                        <h3 class="mb-2 account-title ps-3 ps-lg-0">CONTACT INFORMATION</h3>
                        <div class="border-bottom "></div>
                        <form action="" class="mt-4">
                            <div class="form-group  px-3 px-lg-0">
                                <label for="" class="mb-2">FIRST NAME*</label>
                                <input type="text"
                                    class="form-control w-100 text-primary transition font-light border-0"
                                    placeholder="Please Enter…">
                                <p class="error-message d-none">here is the validation error message</p>
                            </div>

                            <div class="form-group mt-3  px-3 px-lg-0">
                                <label for="" class="mb-2">LAST NAME*</label>
                                <input type="text"
                                    class="form-control w-100 text-primary transition font-light border-0"
                                    placeholder="Please Enter…">
                                <p class="error-message d-none">here is the validation error message</p>
                            </div>
                            <div class="d-flex align-items-center mx-auto pt-lg-3 pt-3 ps-3 ps-lg-0">
                                <label for="subscribe" class="checkbox-control me-2 pe-lg-1 cursor-pointer">
                                    <input type="checkbox" name="filter" id="subscribe" checked>
                                    <span class="d-block theme-checkbox border-0"></span>
                                </label>
                                <label for="subscribe"
                                    class="text-sm text-spacing font-sans text-primary content-font check-label text-start text-lg-center  mb-0 cursor-pointer">Please
                                    tick to subscribe to our newsletter</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-5 mt-2 mt-lg-0">
                    <div class="register-left-box account-right-box bg-white theme-radius text-primary me-lg-5">
                        <h3 class="mb-2 account-title ps-3 ps-lg-0">SIGN-IN INFORMATION</h3>
                        <div class="border-bottom"></div>
                        <form method="post" class="mt-4" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
                            <div class="form-group  px-3 px-lg-0">
                                <label for="" class="mb-2">EMAIL ADDRESS*</label>
                                <input type="email"
                                    class="form-control w-100 text-primary transition font-light border-0"
                                    placeholder="Please Enter…" name="email" id="reg_email" autocomplete="email">
                                <p class="error-message d-none">here is the validation error message</p>
                            </div>

                            <div class="form-group mt-3  px-3 px-lg-0">
                                <label for="" class="mb-2">PASSWORD*</label>
                                <input type="password" name="password"
                                    class="form-control w-100 text-primary transition font-light border-0"
                                    placeholder="Please Enter…" id="reg_password" autocomplete="new-password">
                                <p class="error-message d-none">here is the validation error message</p>
                            </div>

                            <div class="form-group mt-3  px-3 px-lg-0">
                                <label for="" class="mb-2">CONFIRM PASSWORD*</label>
                                <input type="password"
                                    class="form-control w-100 text-primary transition font-light border-0"
                                    placeholder="Please Enter…">
                                <p class="error-message d-none">here is the validation error message</p>
                            </div>


                            <div
                                class="d-flex flex-lg-row flex-column justify-content-between align-items-lg-center align-items-start mt-lg-4 mt-3 ps-3 ps-lg-0 pt-lg-2">
                                <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"
                                    class=" btn btn-outline-primary">
                                    <div class="d-flex justify-content-between align-items-center">
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
                                </a>
                                <a href="account-sign-in.html"
                                    class="reset-password font-sans text-sm text-spacing text-primary mb-0 text-decoration-underline mt-4 mt-lg-0">I
                                    already have an account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main> -->