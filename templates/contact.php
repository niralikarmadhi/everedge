<?php

/*

  * Template Name: Contact

  */

?>

<main>
    <!-- Contact US Section Start -->
    <section class="contact-section position-relative overflow-hidden z-index pb-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-4 mt-lg-4">
                    <h1 class="contact-title text-primary mb-4">HOW CAN </br><span class="fw-normal">WE HELP?</span></h2>
                    <ul class="contact-details p-0 list-none m-0 mb-md-4 my-md-2">
                        <?php if ($phone = get_field('phone')) : ?>
                            <li class="d-lg-block mb-2 pb-1">
                                <a href="tel:<?php echo esc_html($phone); ?>" class="d-flex align-items-center text-decoration-none text-primary contact-box">
                                    <div class="contact-icon text-white flex-shrink-0 me-4 d-flex justify-content-center align-items-center transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.542" height="21.62" viewBox="0 0 21.542 21.62">
                                            <path id="Path_12396" data-name="Path 12396" d="M111.528,43.176a1.5,1.5,0,0,1-.818-.265,16.858,16.858,0,0,1-5.94-5.844,1.93,1.93,0,0,1-.409-1.371c.168-.914,1.323-1.275,1.659-2.14a2.39,2.39,0,0,0-.577-2.236,10.3,10.3,0,0,0-2.958-2.718,4.123,4.123,0,0,0-1.8-.673c-2.91-.144-3.078,4.714-2.693,6.613A15.13,15.13,0,0,0,100.538,40,22.916,22.916,0,0,0,111.5,48.875a8.906,8.906,0,0,0,4.93.505A4.18,4.18,0,0,0,118.6,48.2a2.7,2.7,0,0,0,.745-2.285,4.247,4.247,0,0,0-1.3-2.116,17.166,17.166,0,0,0-2.79-2.309,1.488,1.488,0,0,0-.6-.265,1.179,1.179,0,0,0-.673.216,8.2,8.2,0,0,0-1.635,1.2,1.487,1.487,0,0,1-.745.481c-.024.024-.048.048-.072.048Z" transform="translate(-97.837 -27.926)" fill="currentcolor" />
                                        </svg>
                                    </div>
                                    <span class="text-base fw-light ps-1"><?php echo esc_html($phone); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($email = get_field('email')) : ?>
                            <li class="d-lg-block mb-2 pb-1">
                                <a href="mailto:<?php echo esc_html($email); ?>" class="d-flex align-items-center text-decoration-none text-primary contact-box">
                                    <div class="contact-icon text-white flex-shrink-0 me-4 d-flex justify-content-center align-items-center transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.516" height="14.185" viewBox="0 0 20.516 14.185">
                                            <g id="Group_2850" data-name="Group 2850" transform="translate(-9708 3902)">
                                                <path id="Path_12391" data-name="Path 12391" d="M70.452,106.54A1.982,1.982,0,0,0,70,107.8v10.189a2,2,0,0,0,.942,1.691l6.342-6.925Z" transform="translate(9638 -4007.802)" fill="currentcolor" />
                                                <path id="Path_12392" data-name="Path 12392" d="M438.546,119.7a2,2,0,0,0,.962-1.7V107.806a1.982,1.982,0,0,0-.452-1.26l-6.792,6.179Z" transform="translate(9289.008 -4007.808)" fill="currentcolor" />
                                                <path id="Path_12393" data-name="Path 12393" d="M120.719,288.38l-.024.019-.011.008-.014.009-.011.006-.015.008-.011,0-.017.006-.011,0-.018,0-.01,0-.021,0s-.006-.007-.008-.007-.019-.006-.029-.006-.019.007-.029.006-.006,0-.008,0h-.031a.062.062,0,0,1-.018,0l-.011,0-.017-.006-.011,0-.016-.008-.011-.006-.014-.009-.011-.008-.014-.011-.01-.008-2.328-2.118-6.2,6.772h0a1.973,1.973,0,0,0,.462.054h16.529a1.992,1.992,0,0,0,.441-.052l-6.136-6.812Z" transform="translate(9597.738 -4180.906)" fill="currentcolor" />
                                                <path id="Path_12394" data-name="Path 12394" d="M113.29,86.737a1.98,1.98,0,0,0-1.093-.331H95.669a1.979,1.979,0,0,0-1.093.331l9.357,8.513Z" transform="translate(9614.324 -3988.406)" fill="currentcolor" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-base fw-light ps-1"><?php echo esc_html($email); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-12 col-lg-7 pt-3 pt-lg-0 text-primary">
                    <h3 class="headingM text-center mb-0 pb-lg-2 d-none d-lg-block">GET IN TOUCH VIA OUR FORM</h3>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact US Section End -->

    <?php if (have_rows('other_pages')) : ?>
        <!-- why choose everedge -->
        <section class="why-choose-everedge bg-transparent contact-bottom-cards">
            <div class="container">
                <div class="row g-0">
                    <?php while (have_rows('other_pages')) :
                        the_row(); ?>

                        <div class="col-12 col-lg-4">
                            <div class="d-block choose-card">
                                <div class="card-img overflow-hidden position-relative card-img-radius">
                                    <?php $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <a href="<?php the_sub_field('page'); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover">
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($Page_Name = get_sub_field('Page Name')) : ?>
                                        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 d-block d-lg-none text-center">
                                            <h3 class="text-white img-text"><?php echo esc_html($Page_Name); ?></h3>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="card-body text-center bg-secondary card-shadow transition d-none d-lg-block card-body-radius">
                                    <?php if ($Page_Name = get_sub_field('Page Name')) : ?>
                                        <a href="<?php the_sub_field('page'); ?>">
                                            <h3 class="text-primary mb-2"><?php echo esc_html($Page_Name); ?></h3>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($page_details = get_sub_field('page_details')) : ?>
                                        <p class="text-lg text-gray px-4 mb-0 fw-light">
                                            <?php echo $page_details; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>