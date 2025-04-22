 <?php

  /*

  * Template Name: Homepage

  */

  ?>

 <main>
   <!-- hero section -->
   <?php if (have_rows('hero_section')) : ?>
     <section class="hero-section position-relative vh-100 overflow-hidden">
       <?php while (have_rows('hero_section')) :
          the_row();
          $media_type = get_sub_field('media_type');
          $background_image = get_sub_field('background_image');
          $background_video = get_sub_field('background_video');
          $background_youtube = get_sub_field('background_youtube');
          $background_viemo = get_sub_field('background_viemo');
        ?>
         <div class="img-part h-100">
           <?php if ($media_type == 'image'): ?>
             <img src="<?php echo esc_url($background_image['sizes']['large']); ?>" alt="<?php echo esc_url($background_image['alt']); ?>" class="h-100 w-100 object-cover">
           <?php elseif ($media_type == 'video'): ?>
             <?php if (!empty($background_video)): ?>
               <video loop autoplay muted playsinline data-wf-ignore="true"
                 preload="none" class="w-100 h-100 object-cover" data-object-fit="cover">
                 <source src="<?php echo $background_video; ?>" data-wf-ignore="true" />
               </video>
             <?php endif; ?>
           <?php elseif ($media_type == 'vimeo'): ?>
             <?php if (!empty($background_viemo)): ?>
               <iframe class="w-100 h-100 object-cover"
                 src="<?php echo $background_viemo; ?>?autoplay=1&loop=1&background=1&controls=0&rel=0&mute=1" allow="autoplay" allowfullscreen>
               </iframe>
             <?php endif; ?>

           <?php elseif ($media_type == 'youtube'): ?>
             <?php if (!empty($background_youtube)): ?>
               <iframe class="w-100 h-100 object-cover"
                 src="<?php echo $background_youtube; ?>?playlist=<?php echo basename($background_youtube); ?>&autoplay=1&loop=1&background=1&controls=0&rel=0&mute=1"
                 allow="autoplay; fullscreen">
               </iframe>
             <?php endif; ?>
           <?php endif; ?>
         </div>
         <div class="bg--layer position-absolute top-0 start-0 h-100 w-75"></div>
         <div class="position-absolute top-center w-100">
           <div class="container">
             <div class="col-lg-7">
               <?php if ($heading = get_sub_field('heading')) : ?>
                 <div class="alt-font text-secondary text-sm mb-2 hero-prefix"><?php echo esc_html($heading); ?></div>
               <?php endif; ?>
               <?php if ($content = get_sub_field('content')) : ?>
                 <div class="text-secondary fw-bold font-body hero-title">
                   <?php echo $content; ?>
                 </div>
               <?php endif; ?>
               <?php if ($link = get_sub_field('link')) : ?>
                 <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btnA me-lg-4 mb-3 mb-lg-0 mt-3">
                   <div class="d-flex justify-content-between align-items-center">
                     <span><?php echo $link['title']; ?></span>
                     <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                       <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                         <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor"></path>
                       </svg>
                     </div>
                   </div>
                 </a>


               <?php endif; ?>
             </div>
           </div>
         </div>
       <?php endwhile; ?>
     </section>
   <?php endif; ?>

   <!-- icon slider section -->
   <?php if (have_rows('icon_card')) : ?>
     <section class="bg-primary icon-slider-section overflow-hidden pt-3">
       <div class="container">
         <div class="icon--slider">
           <?php while (have_rows('icon_card')) :
              the_row();
              $icon = get_sub_field('icon');
              $icon_content = get_sub_field('icon_content');
            ?>
             <div class="icon-card">
               <div class="d-flex align-items-center">
                 <?php if (!empty($icon)): ?>
                   <div class="icon">
                     <img src="<?php echo $icon['sizes']['medium']; ?>" alt="<?php echo $icon['alt']; ?>" class="h-100">
                   </div>
                 <?php endif; ?>
                 <?php if (!empty($icon_content)): ?>
                   <div class="ms-4 icon-content text-secondary alt-font text-base">
                     <?php echo $icon_content; ?>
                   </div>
                 <?php endif; ?>
               </div>
             </div>
           <?php endwhile; ?>
         </div>
       </div>
     </section>
   <?php endif; ?>

   <!-- left right image section  -->
   <?php if (have_rows('left_right_image_card')) : ?>
     <section class="bg-primary left-right-section">
       <div class="padding-top--95px"></div>
       <div class="container">
         <div class="row row35">
           <?php while (have_rows('left_right_image_card')) :
              the_row();
              $image_position = get_sub_field('image_position');
              $image = get_sub_field('image');
              $logo = get_sub_field('logo');
              $title = get_sub_field('title');
              $button_link = get_sub_field('button_link');
              $content = get_sub_field('content');
            ?>
             <?php if ($image_position == 'left'): ?>
               <div class="col-lg-5">
                 <div class="pe-3">
                   <div class="img-part border--radius overflow-hidden position-relative">
                     <img src="<?php echo $image['sizes']['fullscreen'] ?>" alt="<?php echo $image['title'] ?>" class="h-100 w-100 object-cover">
                     <?php if (!empty($logo)): ?>
                       <div class="position-absolute top-left-center logo-img">
                         <img src="<?php echo $logo['sizes']['fullscreen'] ?>" alt="<?php echo $logo['title'] ?>" class="w-100">
                       </div>
                     <?php endif; ?>
                   </div>
                 </div>
               </div>
             <?php endif; ?>
             <div class="col-lg-7">
               <div class="">
                 <?php if (!empty($title)): ?>
                   <div class="text-secondary font-sans font50 leading60 mb-3 col-lg-10">
                     <?php echo $title; ?>
                   </div>
                 <?php endif; ?>
                 <?php if (!empty($content)): ?>
                   <div class="text-secondary alt-font text-lg">
                     <?php echo $content; ?>
                   </div>
                 <?php endif; ?>
                 <?php if (!empty($button_link)): ?>
                   <a href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>" class="btn btnA me-lg-4 mb-3 mb-lg-0 mt-2">
                     <div class="d-flex justify-content-between align-items-center">
                       <span><?php echo $button_link['title']; ?></span>
                       <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                           <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor"></path>
                         </svg>
                       </div>
                     </div>
                   </a>

                 <?php endif; ?>
               </div>
             </div>
             <?php if ($image_position == 'right'): ?>
               <div class="col-lg-5">
                 <div class="ps-3">
                   <div class="img-part border--radius overflow-hidden position-relative">
                     <img src="<?php echo $image['sizes']['fullscreen'] ?>" alt="<?php echo $image['title'] ?>" class="h-100 w-100 object-cover">
                     <?php if (!empty($logo)): ?>
                       <div class="position-absolute top-left-center logo-img">
                         <img src="<?php echo $logo['sizes']['fullscreen'] ?>" alt="<?php echo $logo['title'] ?>" class="w-100">
                       </div>
                     <?php endif; ?>
                   </div>
                 </div>
               </div>
             <?php endif; ?>
           <?php endwhile; ?>
         </div>
       </div>
       <div class="padding-top--130px"></div>
     </section>
   <?php endif; ?>


   <?php if (have_rows('installation_and_versatility')) : ?>
     <section class="bg-secondary installation-section">
       <div class="padding-top--95px"></div>
       <div class="container">
         <div class="row row8">
           <?php while (have_rows('installation_and_versatility')) :
              the_row();
              $image_position = get_sub_field('image_position');
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $installation_cards = get_sub_field('installation_cards');
            ?>
             <?php if ($image_position == 'left'): ?>
               <div class="col-lg-6">
                 <div class="img-part border--radius overflow-hidden position-relative">
                   <img src="<?php echo $image['sizes']['fullscreen'] ?>" alt="<?php echo $image['title'] ?>" class="h-100 w-100 object-cover">
                 </div>
               </div>
             <?php endif; ?>
             <div class="col-lg-6">
               <div class="">
                 <?php if (!empty($title)): ?>
                   <div class="text-primary font-sans font50 leading60 mb-3 col-lg-7">
                     <?php echo $title; ?>
                   </div>
                 <?php endif; ?>
                 <?php if (!empty($installation_cards)): ?>
                   <div class="row row8">
                     <?php foreach ($installation_cards as $installation): ?>
                       <div class="col-lg-6 mb-3">
                         <div class="bg-white installation-card border--radius">
                           <?php if (!empty($installation['icon'])): ?>
                             <div class="icon_img">
                               <img src="<?php echo $installation['icon']['url'] ?>" alt="<?php echo $installation['icon']['title'] ?>">
                             </div>
                           <?php endif; ?>
                           <?php if (!empty($installation['title'])): ?>
                             <div class="">
                               <?php echo $installation['title'] ?>
                             </div>
                           <?php endif; ?>
                           <?php if (!empty($installation['content'])): ?>
                             <div class="text-7C7C7C">
                               <?php echo $installation['content'] ?>
                             </div>
                           <?php endif; ?>
                           <?php if (!empty($installation['link'])): ?>
                             <a href="<?php echo $installation['link']['url'] ?>" target="<?php echo $installation['link']['target'] ?>" class="text-7C7C7C">
                               <?php echo $installation['link']['title'] ?>
                             </a>
                           <?php endif; ?>
                         </div>
                       </div>
                     <?php endforeach; ?>
                   </div>
                 <?php endif; ?>
               </div>
             </div>
             <?php if ($image_position == 'right'): ?>
               <div class="col-lg-6">
                 <div class="img-part border--radius overflow-hidden position-relative">
                   <img src="<?php echo $image['sizes']['fullscreen'] ?>" alt="<?php echo $image['title'] ?>" class="h-100 w-100 object-cover">
                 </div>
               </div>
             <?php endif; ?>
           <?php endwhile; ?>
         </div>
       </div>
       <div class="padding-top--130px"></div>
     </section>

   <?php endif; ?>

   <!-- our info -->
   <section class="our-info-sec position-relative">
     <div class="container">
       <div class="col-12 col-lg-10" data-aos="fade-up">
         <?php if ($banner_heading = get_field('banner_heading', false, false)) : ?>
           <h1 class="mb-lg-5 mb-4 pb-2 pb-lg-0"><?php echo $banner_heading; ?></h1>
         <?php endif; ?>

         <div class="d-flex flex-lg-row flex-column align-items-start">
           <?php if (have_rows('banner_buttons')) : ?>
             <?php while (have_rows('banner_buttons')) :
                the_row(); ?>
               <?php if ($link = get_sub_field('link')) : ?>
                 <a href="<?php echo esc_html($link); ?>" class="btn me-lg-4 mb-3 mb-lg-0">
                   <div class="d-flex justify-content-between align-items-center">
                     <?php if ($button_text = get_sub_field('button_text')) : ?>
                       <span><?php echo esc_html($button_text); ?></span>
                     <?php endif; ?>
                     <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                       <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                         <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                       </svg>
                     </div>
                   </div>
                 </a>
               <?php endif; ?>

             <?php endwhile; ?>
           <?php endif; ?>
         </div>
       </div>
     </div>
   </section>

   <!-- featured Product -->
   <section class="featured-product-sec position-relative">
     <div class="container py-0 py-lg-4 position-relative z-index-11">
       <div class="col-lg-9 mx-auto">

         <?php if ($featured_heading = get_field('featured_heading')) : ?>
           <h2 class="headingXL text-primary mb-lg-3 mb-4 pb-2 text-center line-height-1" data-aos="fade-up"><?php echo esc_html($featured_heading); ?></h2>
         <?php endif; ?>

         <?php if ($featured_subheading = get_field('featured_subheading')) : ?>
           <div class="mb-lg-5 mb-4 pb-1 text-lg fw-medium  alt-font w-75 mx-auto text-center" data-aos="fade-up">
             <?php echo $featured_subheading; ?>
           </div>
         <?php endif; ?>

         <div class="row flex-nowrap overflow-auto scroll-hidden g-0 -mr-4" data-aos="fade-up">
           <?php if (have_rows('featured_products')) : ?>
             <?php while (have_rows('featured_products')) :
                the_row(); ?>

               <div class="col-11 col-lg-4">

                 <?php
                  $product = get_sub_field('product');
                  if ($product) :
                    $post = $product;
                    setup_postdata($post);
                  ?>
                   <a href="<?php the_permalink(); ?>" class="featured-card card-hover overflow-hidden bg-white d-block">
                     <div class="featured-img overflow-hidden">
                       <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100 h-100 object-cover">
                     </div>
                     <div class="featured-body bg-white font-sans transition">
                       <h4 class="text-primary mb-2 text-transform-none"><?php the_title(); ?></h4>
                       <h3 class="text-black fw-medium text-transform-none mb-0"><?php echo $product->get_price_html(); ?> inc. VAT</h3>
                     </div>
                   </a>
                   <?php wp_reset_postdata(); ?>
                 <?php endif; ?>

               </div>

             <?php endwhile; ?>
           <?php endif; ?>
         </div>
         <?php if (get_field('featured_button_link')) : ?>
           <div class="text-center mt-lg-5 mt-4 pt-1 pt-lg-0" data-aos="fade-up">
             <a href="<?php the_field('featured_button_link') ?>" class="btn btn-outline-primary">
               <div class="d-flex justify-content-between align-items-center">
                 <span><?php the_field('featured_button_text') ?></span>
                 <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                   <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                     <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                   </svg>
                 </div>
               </div>
             </a>
           </div>
         <?php endif; ?>
       </div>
     </div>
   </section>

   <!-- why choose everedge -->
   <section class="why-choose-everedge bg-primary">
     <div class="container">
       <?php if ($cards_heading = get_field('cards_heading')) : ?>
         <h2 class="section-title text-secondary text-center d-none d-lg-block mb-3 pb-2" data-aos="fade-up"><?php echo esc_html($cards_heading); ?></h2>
       <?php endif; ?>

       <?php if ($cards_subheading = get_field('cards_subheading')) : ?>
         <div class="text-secondary mb-lg-5 mb-4 pb-1 text-lg fw-medium  alt-font w-75 mx-auto text-center" data-aos="fade-up">
           <?php echo esc_html($cards_subheading); ?>
         </div>
       <?php endif; ?>

       <div class="row g-0" data-aos="fade-up">

         <?php if (have_rows('cards_cards')) : ?>
           <?php while (have_rows('cards_cards')) :
              the_row(); ?>
             <div class="col-12 col-lg-4">
               <div class="d-block choose-card overflow-hidden card-hover">

                 <?php $image = get_sub_field('image');
                  if ($image) : ?>
                   <div class="card-img overflow-hidden">
                     <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover">
                   </div>
                 <?php endif; ?>

                 <div class="card-body text-center bg-secondary transition">
                   <?php if ($title = get_sub_field('title')) : ?>
                     <h3 class="text-primary mb-2"><?php echo esc_html($title); ?></h3>
                   <?php endif; ?>

                   <?php if ($content = get_sub_field('content')) : ?>
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

   <!-- little about us -->
   <section class="little-about-us position-relative pt-lg-4 home-about-sec">
     <div class="container pt-5 pt-lg-0">
       <div class="row g-0 justify-content-between">
         <div class="col-12 col-lg-5 col-xxl-6">
           <div class="col-lg-11 mx-auto about-content d-flex flex-column justify-content-center align-items-start ps-lg-5 h-100">
             <?php if ($content_heading = get_field('content_heading')) : ?>
               <h3 class="section-title text-primary mb-4 pb-lg-2 line-height-1" data-aos="fade-up"><?php echo esc_html($content_heading); ?></h3>
             <?php endif; ?>

             <?php if ($content_content = get_field('content_content')) : ?>
               <div class="text-lg mb-lg-3 mb-4 text-gray  fw-light  6 pe-lg-1" data-aos="fade-up"><?php echo $content_content; ?></div>
             <?php endif; ?>

             <?php if ($content_subheading = get_field('content_subheading')) : ?>
               <h3 class="headingM text-primary mb-4 pb-lg-2 line-height-1 text-xl" data-aos="fade-up"><?php echo esc_html($content_subheading); ?></h3>
             <?php endif; ?>

             <?php if ($content_subcontent = get_field('content_subcontent')) : ?>
               <div class="text-lg mb-lg-3 mb-4 text-gray  fw-light  6 pe-lg-1" data-aos="fade-up"><?php echo $content_subcontent; ?></div>
             <?php endif; ?>

             <?php if (have_rows('content_buttons')) : ?>
               <?php while (have_rows('content_buttons')) :
                  the_row(); ?>

                 <?php if ($link = get_sub_field('link')) : ?>
                   <a href="<?php echo esc_html($link); ?>" class="btn btn-md btn-outline-primary" data-aos="fade-up">
                     <div class="d-flex justify-content-between align-items-center">
                       <?php if ($button_text = get_sub_field('button_text')) : ?>
                         <span><?php echo esc_html($button_text); ?></span>
                         <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                             <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                           </svg>
                         </div>
                       <?php endif; ?>
                     </div>
                   </a>
                 <?php endif; ?>

               <?php endwhile; ?>
             <?php endif; ?>

           </div>
         </div>
         <div class="col-12 col-lg-7 col-xxl-6 position-relative ps-xl-5 pt-5 pt-lg-0 mx-auto">
           <div class=" about-img ps-xl-4 position-relative" data-aos="fade-up">
             <?php $content_large_image = get_field('content_large_image');
              if ($content_large_image) : ?>
               <img src="<?php echo esc_url($content_large_image['sizes']['large']); ?>" alt="<?php echo esc_url($content_large_image['alt']); ?>" class="object-cover">
             <?php endif; ?>

             <?php $content_small_image = get_field('content_small_image');
              if ($content_small_image) : ?>
               <div class="small-img position-absolute">
                 <img src="<?php echo esc_url($content_small_image['sizes']['large']); ?>" alt="<?php echo esc_url($content_small_image['alt']); ?>" class="object-cover transition">
               </div>
             <?php endif; ?>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- div border -->
   <div class="container">
     <div class="col-lg-10 mx-auto border-bottom"></div>
   </div>

   <?php if (have_rows('testimonials', 'options')) : ?>
     <!-- Why choose everedge Start -->
     <section class="why-choose-sec slick-overflow">
       <div class="padding-top--150px"></div>
       <div class="container">
         <h2 class="section-title text-primary mb-5 pb-lg-2 text-center" data-aos="fade-up">WHY CHOOSE EVEREDGE?</h2>
         <div class="col-lg-8 choose-slider mx-auto" data-aos="fade-up">
           <?php while (have_rows('testimonials', 'options')) :
              the_row(); ?>

             <div class="px-lg-3">
               <div class="choose-box bg-primary text-white">

                 <?php if ($heading = get_sub_field('heading', 'options')) : ?>
                   <h4 class="mb-3"><?php echo esc_html($heading); ?></h4>
                 <?php endif; ?>

                 <?php if ($quote = get_sub_field('quote', 'options')) : ?>
                   <p class="text-xl fw-light mb-0 pe-lg-5 mb-5 pb-lg-4 pb-3"><span>"</span><?php echo $quote; ?><span>"</span></p>
                 <?php endif; ?>

                 <?php if ($quotee = get_sub_field('quotee', 'options')) : ?>
                   <span class="text-base text-capitalize font-sans"><?php echo esc_html($quotee); ?></span>
                 <?php endif; ?>

               </div>
             </div>

           <?php endwhile; ?>
         </div>
       </div>
     </section>
     <!-- Why choose everedge End -->
     <div class="padding-top--150px"></div>
   <?php endif; ?>

   <!-- div border -->
   <div class="container">
     <div class="col-lg-10 mx-auto border-bottom"></div>
   </div>

   <?php if ($heading = get_field('heading', 'options')) : ?>
     <div class="padding-top--150px"></div>
     <!-- the-trade -->
     <section class="the-trade pt-0 product-trade-sec">
       <div class="container">
         <div class="trade-content-box theme-radius overflow-hidden" data-aos="fade-up">
           <div class="trade-img">

             <?php $image = get_field('image', 'options');
              if ($image) : ?>
               <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="w-100 h-100 object-cover d-none d-lg-block">
             <?php endif; ?>

             <?php $image_mobile = get_field('image_mobile', 'options');
              if ($image_mobile) : ?>
               <img src="<?php echo esc_url($image_mobile['sizes']['large']); ?>" alt="<?php echo esc_url($image_mobile['alt']); ?>" class="w-100 h-100 object-cover d-block d-lg-none">
             <?php endif; ?>

           </div>
           <div class="trade-info">

             <h2 class="headingXL text-secondary mb-2"><?php echo esc_html($heading); ?></h2>
             <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start">
               <?php if ($content = get_field('content', 'options')) : ?>
                 <div class="col-lg-8 mb-2 pb-1 pb-lg-0 mb-lg-0">
                   <div class="text-lg fw-light text-secondary opacity-75 mb-0  2">
                     <?php echo $content; ?>
                   </div>
                 </div>
               <?php endif; ?>

               <?php if ($link = get_field('link', 'options')) : ?>
                 <a href="<?php echo esc_html($link); ?>" class="btn btn-lg">
                   <div class="d-flex justify-content-between align-items-center">
                     <span><?php the_field('button', 'options'); ?></span>
                     <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                       <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                         <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
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

   <?php
    $args = array(
      'order' => 'DESC',
      'orderby' => 'date',
      'posts_per_page' => 8,
      'post_type' => 'blog_posts_item',
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>
     <!-- latest resources -->
     <section class="resources-slider-section slick-overflow">
       <div class="container">
         <div class="d-flex justify-content-between mb-4 pb-lg-3 pb-2">
           <h3 class="section-title text-primary mb-0" data-aos="fade-up">LATEST RESOURCES</h3>
           <div class="d-none d-lg-block" data-aos="fade-up">
             <a href="/blog/" class="btn btn-outline-primary">
               <div class="d-flex justify-content-between align-items-center">
                 <span>View all</span>
                 <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                   <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                     <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                   </svg>
                 </div>
               </div>
             </a>
           </div>
         </div>
         <div class="col-lg-10 pt-lg-1 resources-slider">
           <?php

            while ($the_query->have_posts()) : $the_query->the_post();
            ?>

             <div class="" data-aos="fade-up">
               <a href="<?php the_permalink(); ?>" class="resources-card d-block card-hover overflow-hidden theme-radius">
                 <div class="resources-img position-relative overflow-hidden">
                   <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="w-100 h-100 object-cover">
                   <?php
                    $categories = get_the_terms($post->id, 'blog_posts_category');
                    if ($categories) :
                      $cats = '';
                      foreach ($categories as $category) :
                        $cats .=  $category->name . ', ';
                      endforeach; ?>
                     <div class="resources-tag py-2 position-absolute text-xs text-uppercase text-center text-secondary">
                       <?php echo substr($cats, 0, -2); ?>
                     </div>
                   <?php endif; ?>

                 </div>
                 <div class="card-body bg-secondary p-4 transition">
                   <h3 class="mb-3 d-none d-lg-block"><?php echo wp_trim_words(get_the_title(), 4, '...'); ?></h3>
                   <h3 class="mb-3 d-block d-lg-none"><?php echo wp_trim_words(get_the_title(), 4, '...'); ?></h3>
                   <div class="text-gray fw-light pe-lg-5 mb-2  2"><?php
                                                                    echo wp_trim_words(get_the_content(), 7, '...');
                                                                    ?></div>
                   <div class="card-arrow-btn bg-primary d-flex justify-content-center align-items-center rounded-full transition">
                     <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                       <path id="Path_12456" data-name="Path 12456" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                     </svg>
                   </div>
                 </div>
               </a>
             </div>
           <?php endwhile; ?>
         </div>
         <div class="d-block d-lg-none mt-5 text-center" data-aos="fade-up">
           <a href="javascript:void(0);" class="btn btn-outline-primary">
             <div class="d-flex justify-content-between align-items-center">
               <span>View all</span>
               <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                   <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
                 </svg>
               </div>
             </div>
           </a>
         </div>
       </div>
     </section>

   <?php endif;
    wp_reset_query();
    wp_reset_postdata(); ?>
   <?php if (have_rows('double_cards')) : ?>
     <section class="hero-section home-bottom-cards">
       <div class="container">
         <div class="row g-0 -mx-4">


           <?php while (have_rows('double_cards')) :
              the_row(); ?>

             <div class="col-12 col-lg-6 px-lg-2" data-aos="fade-up">
               <?php if ($link = get_sub_field('link')) : ?>
                 <a href="<?php echo esc_html($link); ?>" class="theme-radius d-block card-hover overflow-hidden w-100">
                   <div class="hero-img position-relative overflow-hidden">
                     <?php $image = get_sub_field('image');


                      if ($image) : ?>
                       <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>" class="h-100 w-100 object-cover">
                     <?php endif; ?>
                     <div class="position-absolute top-50 translate-middle-y hero-content w-100 text-lg-center text-start">
                       <?php if ($heading = get_sub_field('heading')) : ?>
                         <h2 class="section-title text-secondary mb-lg-3 mb-2 pb-1"><?php echo esc_html($heading); ?></h2>
                       <?php endif; ?>
                       <button class="btn">
                         <div class="d-flex justify-content-between align-items-center">
                           <span>View all</span>
                           <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                             <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                               <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="currentcolor" />
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

         </div>
       </div>
     </section>
   <?php endif; ?>
 </main>