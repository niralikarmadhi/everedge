<!-- footer -->
<!-- <footer class="bg-primary text-secondary pt-4 pt-lg-0 mt-lg-0 mt-3 position-relative">
    <div class="container">
        <div class="d-flex flex-lg-row flex-column align-items-center w-100 text-xl pb-lg-1 mb-lg-2 mb-4 pb-2 justify-content-center text-lg-start text-center instagram-info">
            <?php if ($link = get_sub_field('link', 'options')) : ?>

                <a href="<?php echo esc_html($link); ?>" target="_blank" class="footer-text text-xl text-uppercase text-secondary text-decoration-none order-lg-first order-last mb-1 mb-lg-0">
                    <?php if ($text = get_sub_field('text', 'options')) : ?>
                        <h3 class="mb-0 text-xl"><?php echo esc_html($text); ?></h3>
                    <?php endif; ?>
                </a>

                <a href="<?php echo esc_html($link); ?>" class="ms-3 transition d-inline-block order-first order-lg-last" target="_blank">
                    <svg id="instagram-logo_1_" data-name="instagram-logo (1)" xmlns="http://www.w3.org/2000/svg" width="22.051" height="22.051" viewBox="0 0 22.051 22.051">
                        <path id="Path_8" data-name="Path 8" d="M15.966,0H6.085A6.092,6.092,0,0,0,0,6.085v9.88a6.092,6.092,0,0,0,6.085,6.085h9.88a6.092,6.092,0,0,0,6.085-6.085V6.085A6.092,6.092,0,0,0,15.966,0Zm4.129,15.966a4.134,4.134,0,0,1-4.129,4.129H6.085a4.133,4.133,0,0,1-4.129-4.129V6.085A4.133,4.133,0,0,1,6.085,1.956h9.88a4.134,4.134,0,0,1,4.129,4.129v9.88Z" transform="translate(0)" fill="#f5f3f0"></path>
                        <path id="Path_9" data-name="Path 9" d="M46.65,40.97a5.682,5.682,0,1,0,5.682,5.682A5.688,5.688,0,0,0,46.65,40.97Zm0,9.407a3.725,3.725,0,1,1,3.726-3.725A3.73,3.73,0,0,1,46.65,50.377Z" transform="translate(-35.624 -35.626)" fill="#f5f3f0"></path>
                        <path id="Path_10" data-name="Path 10" d="M120.356,28.251a1.434,1.434,0,1,0,1.015.42A1.44,1.44,0,0,0,120.356,28.251Z" transform="translate(-103.41 -24.566)" fill="#f5f3f0"></path>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="top-footer">
        <div class="">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
    </div>
    <div class="main-footer mt-4 pt-2">
        <div class="container">
            <div class="row justify-content-lg-between g-0">
                <div class="col-12 col-lg-6 pt-lg-4 pt-lg-3">
                    <h2 class="section-title text-white mb-0">GET IN TOUCH <span class="d-none d-md-inline-block">TODAY</span></h2>
                    <div class="row mt-lg-4 mt-3 pt-lg-1 g-0">
                        <?php if (have_rows('contact_details', 'options')) : ?>
                            <?php while (have_rows('contact_details', 'options')) :
                                the_row(); ?>

                                <?php if ($phone_number = get_sub_field('phone_number', 'options')) : ?>
                                    <div class="col-12 col-lg-4 mb-2 mb-lg-0 px-0">
                                        <a href="tel:<?php echo esc_html($phone_number); ?>" class="d-flex align-items-center contact-details">
                                            <div class="icon-box d-flex justify-content-center align-items-center transition flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.542" height="21.62" viewBox="0 0 21.542 21.62">
                                                    <path id="Path_12396" data-name="Path 12396" d="M111.528,43.176a1.5,1.5,0,0,1-.818-.265,16.858,16.858,0,0,1-5.94-5.844,1.93,1.93,0,0,1-.409-1.371c.168-.914,1.323-1.275,1.659-2.14a2.39,2.39,0,0,0-.577-2.236,10.3,10.3,0,0,0-2.958-2.718,4.123,4.123,0,0,0-1.8-.673c-2.91-.144-3.078,4.714-2.693,6.613A15.13,15.13,0,0,0,100.538,40,22.916,22.916,0,0,0,111.5,48.875a8.906,8.906,0,0,0,4.93.505A4.18,4.18,0,0,0,118.6,48.2a2.7,2.7,0,0,0,.745-2.285,4.247,4.247,0,0,0-1.3-2.116,17.166,17.166,0,0,0-2.79-2.309,1.488,1.488,0,0,0-.6-.265,1.179,1.179,0,0,0-.673.216,8.2,8.2,0,0,0-1.635,1.2,1.487,1.487,0,0,1-.745.481c-.024.024-.048.048-.072.048Z" transform="translate(-97.837 -27.926)" fill="currentcolor" />
                                                </svg>
                                            </div>
                                            <span class="text-base text-uppercase text-white"><?php echo esc_html($phone_number); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($email = get_sub_field('email', 'options')) : ?>
                                    <div class="col-12 col-lg-5 mb-2 mb-lg-0 px-0">
                                        <a href="mailto:<?php echo esc_html($email); ?>" class="d-flex align-items-center contact-details">
                                            <div class="icon-box d-flex justify-content-center align-items-center transition flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20.516" height="14.185" viewBox="0 0 20.516 14.185">
                                                    <g id="Group_2850" data-name="Group 2850" transform="translate(-9708 3902)">
                                                        <path id="Path_12391" data-name="Path 12391" d="M70.452,106.54A1.982,1.982,0,0,0,70,107.8v10.189a2,2,0,0,0,.942,1.691l6.342-6.925Z" transform="translate(9638 -4007.802)" fill="#f5f3f0" />
                                                        <path id="Path_12392" data-name="Path 12392" d="M438.546,119.7a2,2,0,0,0,.962-1.7V107.806a1.982,1.982,0,0,0-.452-1.26l-6.792,6.179Z" transform="translate(9289.008 -4007.808)" fill="#f5f3f0" />
                                                        <path id="Path_12393" data-name="Path 12393" d="M120.719,288.38l-.024.019-.011.008-.014.009-.011.006-.015.008-.011,0-.017.006-.011,0-.018,0-.01,0-.021,0s-.006-.007-.008-.007-.019-.006-.029-.006-.019.007-.029.006-.006,0-.008,0h-.031a.062.062,0,0,1-.018,0l-.011,0-.017-.006-.011,0-.016-.008-.011-.006-.014-.009-.011-.008-.014-.011-.01-.008-2.328-2.118-6.2,6.772h0a1.973,1.973,0,0,0,.462.054h16.529a1.992,1.992,0,0,0,.441-.052l-6.136-6.812Z" transform="translate(9597.738 -4180.906)" fill="#f5f3f0" />
                                                        <path id="Path_12394" data-name="Path 12394" d="M113.29,86.737a1.98,1.98,0,0,0-1.093-.331H95.669a1.979,1.979,0,0,0-1.093.331l9.357,8.513Z" transform="translate(9614.324 -3988.406)" fill="#f5f3f0" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="text-base text-uppercase text-white"><?php echo esc_html($email); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="footer-social-icon d-block d-lg-none pt-4">
                    <?php if (have_rows('socials', 'options')) : ?>
                        <?php while (have_rows('socials', 'options')) :
                            the_row(); ?>

                            <?php if ($instagram = get_sub_field('instagram', 'options')) : ?>
                                <a href="<?php echo esc_html($instagram); ?>" class="me-3 transition d-inline-block" target="_blank">
                                    <svg id="instagram-logo_1_" data-name="instagram-logo (1)" xmlns="http://www.w3.org/2000/svg" width="22.051" height="22.051" viewBox="0 0 22.051 22.051">
                                        <path id="Path_8" data-name="Path 8" d="M15.966,0H6.085A6.092,6.092,0,0,0,0,6.085v9.88a6.092,6.092,0,0,0,6.085,6.085h9.88a6.092,6.092,0,0,0,6.085-6.085V6.085A6.092,6.092,0,0,0,15.966,0Zm4.129,15.966a4.134,4.134,0,0,1-4.129,4.129H6.085a4.133,4.133,0,0,1-4.129-4.129V6.085A4.133,4.133,0,0,1,6.085,1.956h9.88a4.134,4.134,0,0,1,4.129,4.129v9.88Z" transform="translate(0)" fill="#f5f3f0" />
                                        <path id="Path_9" data-name="Path 9" d="M46.65,40.97a5.682,5.682,0,1,0,5.682,5.682A5.688,5.688,0,0,0,46.65,40.97Zm0,9.407a3.725,3.725,0,1,1,3.726-3.725A3.73,3.73,0,0,1,46.65,50.377Z" transform="translate(-35.624 -35.626)" fill="#f5f3f0" />
                                        <path id="Path_10" data-name="Path 10" d="M120.356,28.251a1.434,1.434,0,1,0,1.015.42A1.44,1.44,0,0,0,120.356,28.251Z" transform="translate(-103.41 -24.566)" fill="#f5f3f0" />
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($facebook = get_sub_field('facebook', 'options')) : ?>
                                <a href="<?php echo esc_html($facebook); ?>" class="me-3 transition d-inline-block" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.776" height="18.805" viewBox="0 0 8.776 18.805">
                                        <g id="facebook-letter-logo_1_" data-name="facebook-letter-logo (1)" transform="translate(0 0)">
                                            <path id="Facebook" d="M116.593,3.643V6.232h-1.9V9.4h1.9v9.408h3.9V9.4H123.1s.245-1.518.364-3.178H120.5V4.056a.92.92,0,0,1,.845-.759h2.123V0h-2.887C116.5,0,116.593,3.17,116.593,3.643Z" transform="translate(-114.696 -0.001)" fill="#f5f3f0" />
                                        </g>
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($twitter = get_sub_field('twitter', 'options')) : ?>
                                <a href="<?php echo esc_html($twitter); ?>" class="me-3 transition d-inline-block" target="_blank">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.003" height="17.068" viewBox="0 0 512 512"> 
                                        <path fill="#f2f4ff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($linkedin = get_sub_field('linkedin', 'options')) : ?>
                                <a href="<?php echo esc_html($linkedin); ?>" class="me-3 transition d-inline-block" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.572" height="18.702" viewBox="0 0 19.572 18.702">
                                        <g id="linkedin-logo" transform="translate(0 0)">
                                            <path id="LinkedIn" d="M19.572,21.024V28.26H15.377V21.509c0-1.7-.607-2.853-2.125-2.853A2.3,2.3,0,0,0,11.1,20.19a2.87,2.87,0,0,0-.139,1.023V28.26h-4.2s.057-11.434,0-12.619h4.2V17.43c-.009.013-.02.028-.028.041h.028V17.43a4.166,4.166,0,0,1,3.781-2.085C17.5,15.345,19.572,17.148,19.572,21.024ZM2.375,9.558a2.187,2.187,0,1,0-.056,4.361h.028a2.187,2.187,0,1,0,.028-4.361ZM.249,28.26H4.444V15.641H.249Z" transform="translate(0 -9.558)" fill="#f5f3f0" />
                                        </g>
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($youtube = get_sub_field('youtube', 'options')) : ?>
                                <a href="<?php echo esc_html($youtube); ?>" class="me-3 transition d-inline-block" target="_blank">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 23" width="26" height="23">
                                        <title>Group 2851-svg</title>
                                        <style>
                                            .s0 {
                                                fill: #f5f3f0
                                            }
                                        </style>
                                        <g id="Group_2851">
                                            <g id="Group_2856">
                                                <g id="Group_2851-2">
                                                    <g id="instagram-logo_1_">
                                                        <path id="Path_8" fill-rule="evenodd" class="s0" d="m-125.7 0.5q1.1 0.4 2 1.3 0.8 0.8 1.3 2 0.4 1.1 0.4 2.3v9.9q0 1.2-0.4 2.3-0.5 1.1-1.3 2-0.9 0.8-2 1.3-1.1 0.4-2.3 0.4l-9.9 0.1q-1.2-0.1-2.3-0.5-1.2-0.5-2-1.3-0.9-0.9-1.3-2-0.5-1.1-0.5-2.3v-9.9q0-1.2 0.5-2.3 0.4-1.2 1.3-2 0.8-0.9 2-1.3 1.1-0.5 2.3-0.5h9.9q1.2 0 2.3 0.5zm1.8 5.6q0-0.8-0.3-1.6-0.3-0.8-0.9-1.3-0.6-0.6-1.4-0.9-0.7-0.3-1.5-0.3h-9.9q-0.8 0-1.6 0.3-0.8 0.3-1.3 0.9-0.6 0.5-0.9 1.3-0.3 0.8-0.3 1.6v9.9q0 0.8 0.3 1.5 0.3 0.8 0.9 1.4 0.5 0.6 1.3 0.9 0.8 0.3 1.6 0.3h9.9q0.8 0 1.5-0.3 0.8-0.3 1.4-0.9 0.6-0.6 0.9-1.4 0.3-0.7 0.3-1.5c0 0 0-9.9 0-9.9z" />
                                                        <path id="Path_9" fill-rule="evenodd" class="s0" d="m-130.8 5.8q1 0.4 1.8 1.2 0.8 0.8 1.3 1.9 0.4 1 0.4 2.1c0 2.3-1.4 4.4-3.5 5.3-2.1 0.9-4.6 0.4-6.2-1.3-1.6-1.6-2.1-4-1.2-6.1 0.9-2.2 2.9-3.6 5.2-3.6q1.2 0 2.2 0.5zm-0.7 8.7q0.6-0.3 1.2-0.8 0.5-0.6 0.8-1.2 0.2-0.7 0.3-1.5c0-1.5-1-2.8-2.3-3.4-1.4-0.6-3-0.3-4.1 0.8-1.1 1.1-1.4 2.7-0.8 4.1 0.6 1.3 1.9 2.3 3.4 2.3q0.8-0.1 1.5-0.3z" />
                                                        <path id="Path_10" class="s0" d="m-127.1 3.7c-0.6 0-1.2 0.5-1.4 1.1-0.1 0.7 0.3 1.4 0.9 1.6 0.6 0.3 1.4 0.1 1.7-0.5 0.4-0.6 0.3-1.3-0.1-1.8q-0.1-0.1-0.3-0.2-0.1-0.1-0.2-0.1-0.1-0.1-0.3-0.1-0.1 0-0.3 0z" />
                                                    </g>
                                                </g>
                                                <g id="Group_2852">
                                                    <path id="noun-youtube-3451621" fill-rule="evenodd" class="s0" d="m25.3 6.4v8.2c0 2.3-1.7 4.1-4.4 4.6q-1.8 0.3-3.6 0.5-1.8 0.1-3.6 0.1-1.8 0-3.6-0.1-1.8-0.2-3.6-0.5c-2.8-0.6-4.5-2.3-4.5-4.6v-8.2c0-2.3 1.7-4 4.4-4.6q1.8-0.3 3.6-0.5 1.8-0.1 3.6-0.1 1.8 0 3.6 0.1 1.8 0.2 3.6 0.5c2.8 0.5 4.5 2.3 4.5 4.6zm-7.8 4.6q0.1-0.1 0.2-0.2 0-0.1 0-0.3 0-0.1 0-0.3-0.1-0.1-0.2-0.2l-5.9-3.5q0 0-0.1 0-0.1-0.1-0.2-0.1 0 0-0.1 0.1-0.1 0-0.2 0 0 0.1-0.1 0.1 0 0.1-0.1 0.1 0 0.1 0 0.2-0.1 0.1-0.1 0.1v7q0 0.1 0.1 0.2 0 0.1 0 0.1 0.1 0.1 0.1 0.2 0.1 0 0.1 0.1 0.1 0 0.1 0 0 0 0.1 0 0 0 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0 0 0.1 0 0 0 0.1 0 0 0 0-0.1l5.8-3.5z" />
                                                </g>
                                                <g id="Group_2853">
                                                    <g id="facebook-letter-logo_1_">
                                                        <path id="Facebook" class="s0" d="m-100.4 4.8v2.6h-1.9v3.2h1.9v9.4h3.9v-9.4h2.7c0 0 0.2-1.5 0.3-3.2h-2.9v-2.1q0-0.2 0.1-0.3 0-0.2 0.1-0.3 0.2-0.1 0.3-0.1 0.1-0.1 0.3-0.1h2.1v-3.3h-2.9c-4 0-4 3.2-4 3.6z" />
                                                    </g>
                                                </g>
                                                <g id="Group_2854">
                                                    <g id="twitter_1_">
                                                        <path id="Path_11" class="s0" d="m-52.8 4.4q-0.3 0.1-0.6 0.3-0.3 0.1-0.6 0.1-0.3 0.1-0.6 0.2-0.3 0.1-0.7 0.1 0.4-0.2 0.7-0.5 0.3-0.2 0.5-0.5 0.3-0.3 0.4-0.7 0.2-0.3 0.3-0.7-0.3 0.2-0.6 0.4-0.3 0.1-0.7 0.2-0.3 0.2-0.7 0.3-0.3 0.1-0.7 0.2c-0.6-0.7-1.5-1.2-2.4-1.3-1-0.2-1.9 0-2.8 0.4-0.8 0.5-1.5 1.2-1.9 2-0.4 0.9-0.5 1.9-0.2 2.8q-1.3-0.1-2.6-0.4-1.2-0.3-2.4-0.9-1.1-0.6-2.1-1.4-1-0.8-1.8-1.8-0.4 0.7-0.6 1.5-0.1 0.8 0.1 1.6 0.2 0.8 0.7 1.5 0.4 0.7 1.1 1.1-0.2 0-0.5 0-0.2 0-0.5-0.1-0.2-0.1-0.5-0.2-0.2-0.1-0.4-0.2 0 0 0 0.1 0 0.7 0.2 1.4 0.3 0.7 0.7 1.3 0.5 0.6 1.2 0.9 0.6 0.4 1.3 0.6-0.2 0-0.5 0.1-0.2 0-0.4 0-0.3 0-0.5 0-0.3 0-0.5 0 0.2 0.6 0.6 1.1 0.4 0.6 0.9 1 0.6 0.4 1.2 0.6 0.6 0.2 1.3 0.2-0.6 0.5-1.2 0.8-0.6 0.4-1.3 0.6-0.7 0.2-1.4 0.4-0.7 0.1-1.4 0.1-0.2 0-0.3 0-0.1 0-0.3 0-0.1 0-0.2 0-0.1-0.1-0.3-0.1 0.8 0.5 1.6 0.9 0.7 0.3 1.6 0.6 0.8 0.2 1.7 0.3 0.9 0.2 1.7 0.2c1.6 0 3.2-0.3 4.7-0.9 1.5-0.7 2.9-1.6 4-2.7 1.2-1.1 2.1-2.5 2.7-4 0.6-1.5 0.9-3.1 0.9-4.7q0-0.3 0-0.6 0.3-0.2 0.6-0.4 0.3-0.3 0.5-0.6 0.3-0.3 0.6-0.6 0.2-0.3 0.4-0.6z" />
                                                    </g>
                                                </g>
                                                <g id="Group_2855">
                                                    <g id="linkedin-logo">
                                                        <path id="LinkedIn" fill-rule="evenodd" class="s0" d="m-13.5 11.5v7.2h-4.2v-6.7c0-1.7-0.6-2.9-2.1-2.9q-0.4 0-0.7 0.1-0.4 0.1-0.6 0.3-0.3 0.2-0.5 0.5-0.3 0.3-0.4 0.6 0 0.2 0 0.3-0.1 0.1-0.1 0.2 0 0.2 0 0.3 0 0.1 0 0.3v7h-4.2c0 0 0-11.4 0-12.6h4.2v1.8q0 0 0 0 0.3-0.5 0.7-0.9 0.4-0.4 0.9-0.7 0.5-0.3 1-0.4 0.6-0.1 1.2-0.1c2.7 0 4.8 1.8 4.8 5.7zm-15.5-10.9c0.4 0.4 0.6 1 0.6 1.6 0 0.6-0.2 1.2-0.7 1.6-0.4 0.4-1 0.6-1.6 0.6h-0.1c-0.6 0-1.2-0.2-1.6-0.6-0.4-0.5-0.7-1-0.7-1.6 0-0.7 0.3-1.2 0.7-1.6 0.5-0.5 1.1-0.7 1.7-0.6 0.6 0 1.2 0.2 1.7 0.6zm-3.8 5.5h4.2v12.6h-4.2z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-wrap flex-lg-column justify-content-lg-end align-items-lg-end align-items-center mt-4 mt-lg-0 pt-1 pt-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footer-logo-1.svg" alt="footer-logo" class="d-block mb-4 pe-4 pe-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footer-logo-2.svg" alt="footer-logo" class="d-block britain-logo">
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none d-lg-block">
        <div class="footer-social-icon">
            <?php if (have_rows('socials', 'options')) : ?>
                <?php while (have_rows('socials', 'options')) :
                    the_row(); ?>

                    <?php if ($instagram = get_sub_field('instagram', 'options')) : ?>
                        <a href="<?php echo esc_html($instagram); ?>" class="me-3 transition d-inline-block" target="_blank">
                            <svg id="instagram-logo_1_" data-name="instagram-logo (1)" xmlns="http://www.w3.org/2000/svg" width="22.051" height="22.051" viewBox="0 0 22.051 22.051">
                                <path id="Path_8" data-name="Path 8" d="M15.966,0H6.085A6.092,6.092,0,0,0,0,6.085v9.88a6.092,6.092,0,0,0,6.085,6.085h9.88a6.092,6.092,0,0,0,6.085-6.085V6.085A6.092,6.092,0,0,0,15.966,0Zm4.129,15.966a4.134,4.134,0,0,1-4.129,4.129H6.085a4.133,4.133,0,0,1-4.129-4.129V6.085A4.133,4.133,0,0,1,6.085,1.956h9.88a4.134,4.134,0,0,1,4.129,4.129v9.88Z" transform="translate(0)" fill="#f5f3f0" />
                                <path id="Path_9" data-name="Path 9" d="M46.65,40.97a5.682,5.682,0,1,0,5.682,5.682A5.688,5.688,0,0,0,46.65,40.97Zm0,9.407a3.725,3.725,0,1,1,3.726-3.725A3.73,3.73,0,0,1,46.65,50.377Z" transform="translate(-35.624 -35.626)" fill="#f5f3f0" />
                                <path id="Path_10" data-name="Path 10" d="M120.356,28.251a1.434,1.434,0,1,0,1.015.42A1.44,1.44,0,0,0,120.356,28.251Z" transform="translate(-103.41 -24.566)" fill="#f5f3f0" />
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if ($facebook = get_sub_field('facebook', 'options')) : ?>
                        <a href="<?php echo esc_html($facebook); ?>" class="me-3 transition d-inline-block" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.776" height="18.805" viewBox="0 0 8.776 18.805">
                                <g id="facebook-letter-logo_1_" data-name="facebook-letter-logo (1)" transform="translate(0 0)">
                                    <path id="Facebook" d="M116.593,3.643V6.232h-1.9V9.4h1.9v9.408h3.9V9.4H123.1s.245-1.518.364-3.178H120.5V4.056a.92.92,0,0,1,.845-.759h2.123V0h-2.887C116.5,0,116.593,3.17,116.593,3.643Z" transform="translate(-114.696 -0.001)" fill="#f5f3f0" />
                                </g>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if ($twitter = get_sub_field('twitter', 'options')) : ?>
                        <a href="<?php echo esc_html($twitter); ?>" class="me-3 transition d-inline-block" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.003" height="17.068" viewBox="0 0 512 512">
                                <path fill="#f2f4ff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if ($linkedin = get_sub_field('linkedin', 'options')) : ?>
                        <a href="<?php echo esc_html($linkedin); ?>" class="me-3 transition d-inline-block" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.572" height="18.702" viewBox="0 0 19.572 18.702">
                                <g id="linkedin-logo" transform="translate(0 0)">
                                    <path id="LinkedIn" d="M19.572,21.024V28.26H15.377V21.509c0-1.7-.607-2.853-2.125-2.853A2.3,2.3,0,0,0,11.1,20.19a2.87,2.87,0,0,0-.139,1.023V28.26h-4.2s.057-11.434,0-12.619h4.2V17.43c-.009.013-.02.028-.028.041h.028V17.43a4.166,4.166,0,0,1,3.781-2.085C17.5,15.345,19.572,17.148,19.572,21.024ZM2.375,9.558a2.187,2.187,0,1,0-.056,4.361h.028a2.187,2.187,0,1,0,.028-4.361ZM.249,28.26H4.444V15.641H.249Z" transform="translate(0 -9.558)" fill="#f5f3f0" />
                                </g>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if ($youtube = get_sub_field('youtube', 'options')) : ?>
                        <a href="<?php echo esc_html($youtube); ?>" class="me-3 transition d-inline-block" target="_blank">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 23" width="26" height="23">
                                <title>Group 2851-svg</title>
                                <style>
                                    .s0 {
                                        fill: #f5f3f0
                                    }
                                </style>
                                <g id="Group_2851">
                                    <g id="Group_2856">
                                        <g id="Group_2851-2">
                                            <g id="instagram-logo_1_">
                                                <path id="Path_8" fill-rule="evenodd" class="s0" d="m-125.7 0.5q1.1 0.4 2 1.3 0.8 0.8 1.3 2 0.4 1.1 0.4 2.3v9.9q0 1.2-0.4 2.3-0.5 1.1-1.3 2-0.9 0.8-2 1.3-1.1 0.4-2.3 0.4l-9.9 0.1q-1.2-0.1-2.3-0.5-1.2-0.5-2-1.3-0.9-0.9-1.3-2-0.5-1.1-0.5-2.3v-9.9q0-1.2 0.5-2.3 0.4-1.2 1.3-2 0.8-0.9 2-1.3 1.1-0.5 2.3-0.5h9.9q1.2 0 2.3 0.5zm1.8 5.6q0-0.8-0.3-1.6-0.3-0.8-0.9-1.3-0.6-0.6-1.4-0.9-0.7-0.3-1.5-0.3h-9.9q-0.8 0-1.6 0.3-0.8 0.3-1.3 0.9-0.6 0.5-0.9 1.3-0.3 0.8-0.3 1.6v9.9q0 0.8 0.3 1.5 0.3 0.8 0.9 1.4 0.5 0.6 1.3 0.9 0.8 0.3 1.6 0.3h9.9q0.8 0 1.5-0.3 0.8-0.3 1.4-0.9 0.6-0.6 0.9-1.4 0.3-0.7 0.3-1.5c0 0 0-9.9 0-9.9z" />
                                                <path id="Path_9" fill-rule="evenodd" class="s0" d="m-130.8 5.8q1 0.4 1.8 1.2 0.8 0.8 1.3 1.9 0.4 1 0.4 2.1c0 2.3-1.4 4.4-3.5 5.3-2.1 0.9-4.6 0.4-6.2-1.3-1.6-1.6-2.1-4-1.2-6.1 0.9-2.2 2.9-3.6 5.2-3.6q1.2 0 2.2 0.5zm-0.7 8.7q0.6-0.3 1.2-0.8 0.5-0.6 0.8-1.2 0.2-0.7 0.3-1.5c0-1.5-1-2.8-2.3-3.4-1.4-0.6-3-0.3-4.1 0.8-1.1 1.1-1.4 2.7-0.8 4.1 0.6 1.3 1.9 2.3 3.4 2.3q0.8-0.1 1.5-0.3z" />
                                                <path id="Path_10" class="s0" d="m-127.1 3.7c-0.6 0-1.2 0.5-1.4 1.1-0.1 0.7 0.3 1.4 0.9 1.6 0.6 0.3 1.4 0.1 1.7-0.5 0.4-0.6 0.3-1.3-0.1-1.8q-0.1-0.1-0.3-0.2-0.1-0.1-0.2-0.1-0.1-0.1-0.3-0.1-0.1 0-0.3 0z" />
                                            </g>
                                        </g>
                                        <g id="Group_2852">
                                            <path id="noun-youtube-3451621" fill-rule="evenodd" class="s0" d="m25.3 6.4v8.2c0 2.3-1.7 4.1-4.4 4.6q-1.8 0.3-3.6 0.5-1.8 0.1-3.6 0.1-1.8 0-3.6-0.1-1.8-0.2-3.6-0.5c-2.8-0.6-4.5-2.3-4.5-4.6v-8.2c0-2.3 1.7-4 4.4-4.6q1.8-0.3 3.6-0.5 1.8-0.1 3.6-0.1 1.8 0 3.6 0.1 1.8 0.2 3.6 0.5c2.8 0.5 4.5 2.3 4.5 4.6zm-7.8 4.6q0.1-0.1 0.2-0.2 0-0.1 0-0.3 0-0.1 0-0.3-0.1-0.1-0.2-0.2l-5.9-3.5q0 0-0.1 0-0.1-0.1-0.2-0.1 0 0-0.1 0.1-0.1 0-0.2 0 0 0.1-0.1 0.1 0 0.1-0.1 0.1 0 0.1 0 0.2-0.1 0.1-0.1 0.1v7q0 0.1 0.1 0.2 0 0.1 0 0.1 0.1 0.1 0.1 0.2 0.1 0 0.1 0.1 0.1 0 0.1 0 0 0 0.1 0 0 0 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0 0 0.1 0 0 0 0.1 0 0 0 0-0.1l5.8-3.5z" />
                                        </g>
                                        <g id="Group_2853">
                                            <g id="facebook-letter-logo_1_">
                                                <path id="Facebook" class="s0" d="m-100.4 4.8v2.6h-1.9v3.2h1.9v9.4h3.9v-9.4h2.7c0 0 0.2-1.5 0.3-3.2h-2.9v-2.1q0-0.2 0.1-0.3 0-0.2 0.1-0.3 0.2-0.1 0.3-0.1 0.1-0.1 0.3-0.1h2.1v-3.3h-2.9c-4 0-4 3.2-4 3.6z" />
                                            </g>
                                        </g>
                                        <g id="Group_2854">
                                            <g id="twitter_1_">
                                                <path id="Path_11" class="s0" d="m-52.8 4.4q-0.3 0.1-0.6 0.3-0.3 0.1-0.6 0.1-0.3 0.1-0.6 0.2-0.3 0.1-0.7 0.1 0.4-0.2 0.7-0.5 0.3-0.2 0.5-0.5 0.3-0.3 0.4-0.7 0.2-0.3 0.3-0.7-0.3 0.2-0.6 0.4-0.3 0.1-0.7 0.2-0.3 0.2-0.7 0.3-0.3 0.1-0.7 0.2c-0.6-0.7-1.5-1.2-2.4-1.3-1-0.2-1.9 0-2.8 0.4-0.8 0.5-1.5 1.2-1.9 2-0.4 0.9-0.5 1.9-0.2 2.8q-1.3-0.1-2.6-0.4-1.2-0.3-2.4-0.9-1.1-0.6-2.1-1.4-1-0.8-1.8-1.8-0.4 0.7-0.6 1.5-0.1 0.8 0.1 1.6 0.2 0.8 0.7 1.5 0.4 0.7 1.1 1.1-0.2 0-0.5 0-0.2 0-0.5-0.1-0.2-0.1-0.5-0.2-0.2-0.1-0.4-0.2 0 0 0 0.1 0 0.7 0.2 1.4 0.3 0.7 0.7 1.3 0.5 0.6 1.2 0.9 0.6 0.4 1.3 0.6-0.2 0-0.5 0.1-0.2 0-0.4 0-0.3 0-0.5 0-0.3 0-0.5 0 0.2 0.6 0.6 1.1 0.4 0.6 0.9 1 0.6 0.4 1.2 0.6 0.6 0.2 1.3 0.2-0.6 0.5-1.2 0.8-0.6 0.4-1.3 0.6-0.7 0.2-1.4 0.4-0.7 0.1-1.4 0.1-0.2 0-0.3 0-0.1 0-0.3 0-0.1 0-0.2 0-0.1-0.1-0.3-0.1 0.8 0.5 1.6 0.9 0.7 0.3 1.6 0.6 0.8 0.2 1.7 0.3 0.9 0.2 1.7 0.2c1.6 0 3.2-0.3 4.7-0.9 1.5-0.7 2.9-1.6 4-2.7 1.2-1.1 2.1-2.5 2.7-4 0.6-1.5 0.9-3.1 0.9-4.7q0-0.3 0-0.6 0.3-0.2 0.6-0.4 0.3-0.3 0.5-0.6 0.3-0.3 0.6-0.6 0.2-0.3 0.4-0.6z" />
                                            </g>
                                        </g>
                                        <g id="Group_2855">
                                            <g id="linkedin-logo">
                                                <path id="LinkedIn" fill-rule="evenodd" class="s0" d="m-13.5 11.5v7.2h-4.2v-6.7c0-1.7-0.6-2.9-2.1-2.9q-0.4 0-0.7 0.1-0.4 0.1-0.6 0.3-0.3 0.2-0.5 0.5-0.3 0.3-0.4 0.6 0 0.2 0 0.3-0.1 0.1-0.1 0.2 0 0.2 0 0.3 0 0.1 0 0.3v7h-4.2c0 0 0-11.4 0-12.6h4.2v1.8q0 0 0 0 0.3-0.5 0.7-0.9 0.4-0.4 0.9-0.7 0.5-0.3 1-0.4 0.6-0.1 1.2-0.1c2.7 0 4.8 1.8 4.8 5.7zm-15.5-10.9c0.4 0.4 0.6 1 0.6 1.6 0 0.6-0.2 1.2-0.7 1.6-0.4 0.4-1 0.6-1.6 0.6h-0.1c-0.6 0-1.2-0.2-1.6-0.6-0.4-0.5-0.7-1-0.7-1.6 0-0.7 0.3-1.2 0.7-1.6 0.5-0.5 1.1-0.7 1.7-0.6 0.6 0 1.2 0.2 1.7 0.6zm-3.8 5.5h4.2v12.6h-4.2z" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="container pb-4 pt-5 pt-lg-0">

        <?php wp_nav_menu($args = array(
            'menu_class'  => 'd-flex flex-wrap justify-content-lg-end align-items-center footer-menu-links mb-0 pb-lg-2 pb-3 ps-0',
            'container' => false,
            'link_class' => 'text-sm text-white font-sans',
        )); ?>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 text-right">
                <a target="_blank" class="curious d-inline-block pb-3" href="https://www.thecurious.agency/">Website By The Curious</a>
            </div>
        </div>
    </div>
</footer> -->
<?php $footer_details = get_field('footer_details', 'options'); ?>
<footer class="footer">
    <?php if (!empty($footer_details)): ?>
        <?php if (!empty($footer_details['footer_info'])):
            $footer_info = $footer_details['footer_info'];
        ?>
            <div class="footer-info-sec" style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/home/everedge-rust-min-min.jpg');">
                <div class="container">
                    <div class="row">
                        <?php foreach ($footer_info as $info): ?>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <?php if (!empty($info['footer_icon'])): ?>
                                        <div class="footer-icon mx-auto mb-3">
                                            <img src="<?php echo $info['footer_icon']['url']; ?>" alt="icon" class="w-100 h-auto">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($info['footer_title'])): ?>
                                        <div class="text-secondary fw-medium alt-font text-lg footer-info-title mb-2">
                                            <?php echo $info['footer_title']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($info['footer_description'])): ?>
                                        <div class="text-secondary fw-normal text-sm alt-font col-lg-10 mx-auto footer-info-description">
                                            <?php echo $info['footer_description']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="bg-primary main-footer">
        <div class="padding-top--105px"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php if (!empty($footer_details['footer_logo'])):
                        $footer_logo = $footer_details['footer_logo'];
                    ?>
                        <div class="footer-logo mb-4 pb-2">
                            <img src="<?php echo $footer_logo['url'] ?>" alt="footer logo" class="w-100">
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($footer_details['contact_details'])):
                        $contact_details = $footer_details['contact_details'];
                    ?>
                        <div class="">
                            <a href="mailto:<?php echo $contact_details['email']; ?>" class="text-secondary text-xl alt-font contact-detail"><?php echo $contact_details['email']; ?></a>
                        </div>
                        <div class="">
                            <a href="tel:<?php echo $contact_details['contact']; ?>" class="text-secondary text-xl alt-font contact-detail"><?php echo $contact_details['contact']; ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($footer_details['social_links'])):
                        $social_links = $footer_details['social_links'];
                    ?>
                        <div class="padding-top--60px"></div>
                        <div class="d-flex">
                            <?php foreach ($social_links as $s_link): ?>
                                <div class="social-icon rounded-full me-2">
                                    <a href="<?php echo $s_link['social_link'] ?>" class="h-100 w-100 d-flex align-items-center justify-content-center">
                                        <img src="<?php echo $s_link['social_icon'] ?>" alt="">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (!empty($footer_details['footer_other_logo'])):
                    $footer_other_logo = $footer_details['footer_other_logo'];
                ?>
                    <div class="col-lg-3">
                        <div class="experience-logo mx-auto">
                            <img src="<?php echo $footer_other_logo['experience_logo'] ?>" alt="experience_logo" class="w-100 h-auto">
                        </div>
                        <div class="padding-top--65px"></div>

                        <div class="made-in-logo mx-auto">
                            <img src="<?php echo $footer_other_logo['made_in_logo'] ?>" alt="made_in_logo" class="w-100 h-auto">
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($footer_details['footer_links'])):
                    $footer_links = $footer_details['footer_links'];
                ?>
                    <div class="col-lg-6">
                        <div class="row">
                            <?php
                            if (!empty($footer_links)):
                                foreach ($footer_links as $f_links):
                                    $links = $f_links['links'];
                            ?>
                                    <div class="col-lg-4">
                                        <?php if (!empty($f_links['title'])): ?>
                                            <div class="text-secondary text-base footer-link mb-3 half--opacity alt-font">
                                                <?php echo $f_links['title'] ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php foreach ($links as $f_link): ?>
                                            <?php if (!empty($f_link['link'])): ?>
                                                <div class="">
                                                    <a href="<?php echo $f_link['link']['url'] ?>" target="<?php echo $f_link['link']['target'] ?>" class="text-secondary text-base footer-link alt-font">
                                                        <?php echo $f_link['link']['title'] ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="padding-top--100px"></div>
            <div class="border-seconady"></div>
            <div class="padding-top--30px"></div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="text-secondary text-xs alt-font fw-normal ft-content">
                    <?php if (!empty($footer_details['footer_year'])):
                        $footer_year = $footer_details['footer_year'];
                    ?>
                    <span class="fw-bold">
                        <?php echo $footer_year ?>
                    </span>
                    <?php endif; ?>
                    <?php if (!empty($footer_details['website_by'])):
                        $website_by = $footer_details['website_by'];
                    ?>
                        <?php echo $website_by ?>
                    <?php endif; ?>
                </div>
                <div class="d-flex align-items-center">
                    <?php if (!empty($footer_details['policy_links'])):
                        $policy_links = $footer_details['policy_links'];
                    ?>
                        <div class="d-flex">
                            <?php foreach ($policy_links as $p_link): ?>
                                <div class="me-4">
                                    <a href="<?php echo $p_link['link']['url'] ?>" target="<?php echo $p_link['link']['target'] ?>" class="text-secondary text-xs alt-font fw-normal ft-content"><?php echo $p_link['link']['title'] ?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($footer_details['payment_icons'])):
                        $payment_icons = $footer_details['payment_icons'];
                    ?>
                        <div class="d-flex">
                            <?php foreach ($payment_icons as $p_icons): ?>
                                <div class="ms-2 pay-icon">
                                    <img src="<?php echo $p_icons['icon'] ?>" alt="icon" class="h-100 w-auto">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="padding-top--30px"></div>

        </div>
    </div>
</footer>


<script>
    jQuery(function($) {
        function is_checkout_page() {
            return $('body').hasClass('woocommerce-checkout');
        }

        function autofill_billing_address() {
            if (!is_checkout_page()) {
                return; // Exit if not on the checkout page
            }

            var shipping_country = $('#shipping_country').val();
            var shipping_state = $('#shipping_state').val();
            var shipping_postcode = $('#shipping_postcode').val();
            var shipping_city = $('#shipping_city').val();
            var shipping_address = $('#shipping_address_1').val();
            var shipping_address2 = $('#shipping_address_2').val();

            // Check if billing fields are empty and fill them
            if (!$('#billing_country').val()) {
                $('#billing_country').val(shipping_country).trigger('change');
            }
            if (!$('#billing_state').val()) {
                $('#billing_state').val(shipping_state).trigger('change');
            }
            if (!$('#billing_postcode').val()) {
                $('#billing_postcode').val(shipping_postcode).trigger('change');
            }
            if (!$('#billing_city').val()) {
                $('#billing_city').val(shipping_city).trigger('change');
            }
            if (!$('#billing_address_1').val()) {
                $('#billing_address_1').val(shipping_address).trigger('change');
            }
            if (!$('#billing_address_2').val()) {
                $('#billing_address_2').val(shipping_address2).trigger('change');
            }

        }

        // Only run when on the checkout page
        if (is_checkout_page()) {
            $(document.body).on('change', '#shipping_country, #shipping_state, #shipping_postcode, #shipping_city, #shipping_address_1, #shipping_address_2', autofill_billing_address);
            $(document).ready(autofill_billing_address);
        }
    });
</script>