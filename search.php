
    <main>

    <!--search result -->
    <section class="search-result-sec position-relative">
        <div class="container">
            <div class="mb-3 pb-4 pb-lg-0 text-primary">
                <h2 class="section-title mb-1 pb-3 pb-lg-0 d-none d-lg-block">RESULTS FOR “<?php echo $_GET["s"]?>”</h2>
                <h2 class="section-title mb-3 pb-4 d-block d-lg-none search-title">RESULTS FOR <span class="text-transform-none font-sans">“<?php echo $_GET["s"]?>”</span></h2>
                <p class="text-base fw-medium mb-0 text-primary opacity-50 d-none">Displaying 4 Results</p>
            </div>
            <div class="col-12">
                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="search-result-broucher row align-items-md-center mb-4 mb-lg-0">
                            <div class="col-4 col-lg-3 search-img flex-shrink-0 overflow-hidden ">
                                <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'medium')?>" alt="image" class="w-100 object-cover img-fluid theme-radius">
                            </div>
                            <div class="col-7 col-lg-9 search-content justify-content-between align-items-center pt-3 pt-lg-0 text-primary">
                                <div class="font-medium flex-grow-1 mt-lg-3">
                                    <h3 class="transition mb-2 pb-1 pb-lg-0 pb-xl-0 headingM"><?php the_title()?></h3>
                                    <div class="col-lg-7">
                                        <p class="pe-lg-5 text-gray text-base  2 mb-2 mb-lg-0"><?php the_excerpt()?></p>
                                    </div>
                                </div>
                                <a href="<?php the_permalink()?>" class="search-icon bg-primary rounded-full d-lg-flex d-none flex-shrink-0 justify-content-center align-items-center transition">
                                    <svg id="launch-24px" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_58" data-name="Path 58" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_59" data-name="Path 59" d="M19,19H5V5h7V3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V12H19ZM14,3V5h3.59L7.76,14.83l1.41,1.41L19,6.41V10h2V3Z" fill="currentcolor"/>
                                    </svg>                                                                                                 
                                </a>
                            </div>  
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>
        </div>
    </section>
    
    <!-- looking for -->
    <section class="looking-for">
        <div class="container text-center">
            <div>
                <h2 class="text-white line-height-1 mb-3"><span class="text-white opacity-50">NOT WHAT YOU’RE</span> <br>LOOKING <br class="d-sm-none"> FOR?</h2>
                <a href="/contact/" class="btn btn-md">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Get in touch</span>
                         <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor"/>
                            </svg>  
                        </div> 
                    </div>             
                </a>
            </div>
        </div>
    </section>
    </main>
