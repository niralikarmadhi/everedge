<!-- header -->
<header class="position-fixed top-0 start-0 w-100 color--white text-center">

  <?php if (get_field('enable_notification_banner', 'option') == 1) : ?>

      <div class="notification--header bg-primary p-2">

        <?php if ( $notification_banner_text = get_field( 'notification_banner_text', 'options' ) ) : ?>
        <div class="notification-slider align-items-center">

            <div class="pt-1">
              <?php the_field('notification_banner_text', 'option'); ?>
            </div>

          <!-- TrustBox widget - Micro Review Count -->
          <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="4be3609c0000640005089ea0" data-style-height="24px" data-style-width="100%" data-theme="dark" data-style-alignment="center">
            <a href="https://uk.trustpilot.com/review/www.everedge.co.uk" target="_blank" rel="noopener">Trustpilot</a>
          </div>
          <!-- End TrustBox widget -->

        </div>

        <?php else: ?>

          <!-- TrustBox widget - Micro Review Count -->
          <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="4be3609c0000640005089ea0" data-style-height="24px" data-style-width="100%" data-theme="dark" data-style-alignment="center">
            <a href="https://uk.trustpilot.com/review/www.everedge.co.uk" target="_blank" rel="noopener">Trustpilot</a>
          </div>
          <!-- End TrustBox widget -->

        <?php endif; ?>

      </div>

  <?php endif; ?>

  <!-- menu 1 -->
  <div class="navbar">
    <div class="container position-relative">
      <div class="row justify-content-between g-0 w-100 align-items-center">
        <div class="col-12 col-lg-3 d-flex flex-wrap justify-content-between align-items-center logo-block">
          <!-- Logo -->
          <a href="/" class="logo navbar-brand py-0 d-flex align-items-center me-0 d-none d-lg-block">

            <svg xmlns="http://www.w3.org/2000/svg" width="266.51" height="48.26" viewBox="0 0 349.548 69.994">
              <g id="Group_1" data-name="Group 1" transform="translate(-15039 1488)">
                <path fill="#5D7246" id="Path_12199" data-name="Path 12199" d="M0,1.31V69.387H35.274V57.847H14.109V40.88H31.47V29.34H14.109V12.85h20.6V1.31Z" transform="translate(15039 -1487.408)" />
                <path fill="#5D7246" id="Path_12200" data-name="Path 12200" d="M61.239,1.31l-10.1,46.521L41.019,1.31H26.91L44.837,69.387h12.5L75.263,1.31Z" transform="translate(15051.152 -1487.408)" />
                <path fill="#5D7246" id="Path_12201" data-name="Path 12201" d="M62.98,1.31V69.387H98.268V57.847H77.089V40.88H94.45V29.34H77.089V12.85h20.6V1.31Z" transform="translate(15067.438 -1487.408)" />
                <path fill="#5D7246" id="Path_12202" data-name="Path 12202" d="M109.924,31.256c3.149,0,4.485-.48,5.618-1.916a12.077,12.077,0,0,0,1.813-7.155c0-7.258-1.713-9.638-7.155-9.638h-4.3V31.24H109.9Zm-3.635,38.131H92.18V1.31h18.68c8.681,0,12.686,1.147,15.924,4.485,3.339,3.339,4.675,8.014,4.675,15.644,0,12-2.1,16.49-8.87,19.539L133.94,69.4H118.306l-9.434-27.353H106.3V69.4Z" transform="translate(15080.624 -1487.408)" />
                <path fill="#5D7246" id="Path_12203" data-name="Path 12203" d="M123.75,1.31V69.387h35.272V57.847H137.85V40.88H155.2V29.34H137.85V12.85h20.605V1.31Z" transform="translate(15094.878 -1487.408)" />
                <g id="Group_2788" data-name="Group 2788" transform="translate(15260.593 -1488)">
                  <path fill="#5D7246" id="Path_12204" data-name="Path 12204" d="M171.05,58.129c6.865-.189,7.911-1.713,7.911-12.585V25.136c0-10.873-1.046-12.4-7.911-12.6h-4.3V58.119h4.3ZM152.66,1.305H170.4c16.781-.29,22.979,5.531,22.688,21.352V48.012c.29,15.836-5.908,21.643-22.688,21.352H152.66Z" transform="translate(-152.66 0.586)" />
                  <path fill="#5D7246" id="Path_12205" data-name="Path 12205" d="M205.439,30.99h20.41V42.723c0,9.914-.957,15.255-3.339,19.16-3.425,5.527-8.87,8.1-17.347,8.1-7.911,0-13.732-2.38-17.157-7.155-2.676-3.629-3.715-8.767-3.715-17.637V24.778c0-9.726,1.235-15.068,4.572-18.783C192.39,2,197.629,0,204.9,0c8.3,0,13.921,2.859,17.071,8.767,1.626,2.946,2.293,6.381,2.482,12.106H211.564c-.667-7.534-2-9.537-6.284-9.537-5.428,0-6.865,3.049-6.865,14.5v18.3a36.876,36.876,0,0,0,.957,10.393,5.735,5.735,0,0,0,5.908,4.094c5.146,0,6.678-3.049,6.678-12.876V41.747h-6.488V30.976Z" transform="translate(-138.378)" />
                </g>
                <path fill="#5D7246" id="Path_12206" data-name="Path 12206" d="M216.5,1.31V69.387h35.288V57.847H230.609V40.88H247.97V29.34H230.609V12.85h20.6V1.31Z" transform="translate(15136.76 -1487.408)" />
              </g>
            </svg>

          </a>
          <a href="/" class="logo navbar-brand py-0 d-flex align-items-center me-0 d-block d-lg-none mobile-logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="187.933" height="34.031" viewBox="0 0 349.548 69.994">
              <g id="Group_1" data-name="Group 1" transform="translate(-15039 1488)">
                <path fill="#5D7246" id="Path_12199" data-name="Path 12199" d="M0,1.31V69.387H35.274V57.847H14.109V40.88H31.47V29.34H14.109V12.85h20.6V1.31Z" transform="translate(15039 -1487.408)" />
                <path fill="#5D7246" id="Path_12200" data-name="Path 12200" d="M61.239,1.31l-10.1,46.521L41.019,1.31H26.91L44.837,69.387h12.5L75.263,1.31Z" transform="translate(15051.152 -1487.408)" />
                <path fill="#5D7246" id="Path_12201" data-name="Path 12201" d="M62.98,1.31V69.387H98.268V57.847H77.089V40.88H94.45V29.34H77.089V12.85h20.6V1.31Z" transform="translate(15067.438 -1487.408)" />
                <path fill="#5D7246" id="Path_12202" data-name="Path 12202" d="M109.924,31.256c3.149,0,4.485-.48,5.618-1.916a12.077,12.077,0,0,0,1.813-7.155c0-7.258-1.713-9.638-7.155-9.638h-4.3V31.24H109.9Zm-3.635,38.131H92.18V1.31h18.68c8.681,0,12.686,1.147,15.924,4.485,3.339,3.339,4.675,8.014,4.675,15.644,0,12-2.1,16.49-8.87,19.539L133.94,69.4H118.306l-9.434-27.353H106.3V69.4Z" transform="translate(15080.624 -1487.408)" />
                <path fill="#5D7246" id="Path_12203" data-name="Path 12203" d="M123.75,1.31V69.387h35.272V57.847H137.85V40.88H155.2V29.34H137.85V12.85h20.605V1.31Z" transform="translate(15094.878 -1487.408)" />
                <g id="Group_2788" data-name="Group 2788" transform="translate(15260.593 -1488)">
                  <path fill="#5D7246" id="Path_12204" data-name="Path 12204" d="M171.05,58.129c6.865-.189,7.911-1.713,7.911-12.585V25.136c0-10.873-1.046-12.4-7.911-12.6h-4.3V58.119h4.3ZM152.66,1.305H170.4c16.781-.29,22.979,5.531,22.688,21.352V48.012c.29,15.836-5.908,21.643-22.688,21.352H152.66Z" transform="translate(-152.66 0.586)" />
                  <path fill="#5D7246" id="Path_12205" data-name="Path 12205" d="M205.439,30.99h20.41V42.723c0,9.914-.957,15.255-3.339,19.16-3.425,5.527-8.87,8.1-17.347,8.1-7.911,0-13.732-2.38-17.157-7.155-2.676-3.629-3.715-8.767-3.715-17.637V24.778c0-9.726,1.235-15.068,4.572-18.783C192.39,2,197.629,0,204.9,0c8.3,0,13.921,2.859,17.071,8.767,1.626,2.946,2.293,6.381,2.482,12.106H211.564c-.667-7.534-2-9.537-6.284-9.537-5.428,0-6.865,3.049-6.865,14.5v18.3a36.876,36.876,0,0,0,.957,10.393,5.735,5.735,0,0,0,5.908,4.094c5.146,0,6.678-3.049,6.678-12.876V41.747h-6.488V30.976Z" transform="translate(-138.378)" />
                </g>
                <path fill="#5D7246" id="Path_12206" data-name="Path 12206" d="M216.5,1.31V69.387h35.288V57.847H230.609V40.88H247.97V29.34H230.609V12.85h20.6V1.31Z" transform="translate(15136.76 -1487.408)" />
              </g>
            </svg>
          </a>
          <div class="d-flex d-lg-none align-items-center">
            <a href="javascript:;" class="header-icon d-flex justify-content-center align-items-center transition cartTrigger me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="21.082" height="16.381" viewBox="0 0 21.082 16.381">
                <g id="Group_2742" data-name="Group 2742" transform="translate(-1122.297 -74.962)">
                  <path id="Path_180" data-name="Path 180" d="M135.189,104.023h-3.978l-3.829-5.494a.5.5,0,0,0-.82.572l3.431,4.947h-9.521L123.9,99.1a.5.5,0,0,0-.82-.572l-3.8,5.494H115.3a.5.5,0,0,0,0,.994h1.367l2.386,9.074a.479.479,0,0,0,.472.373h11.436a.479.479,0,0,0,.472-.373l2.387-9.074h1.367a.5.5,0,1,0,0-.994Zm-4.6,9.447H119.9l-2.213-8.453H132.8Z" transform="translate(1007.594 -23.221)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                  <path id="Path_181" data-name="Path 181" d="M277.7,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,277.7,283.168Z" transform="translate(852.405 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                  <path id="Path_182" data-name="Path 182" d="M339.3,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,339.3,283.168Z" transform="translate(793.54 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                  <path id="Path_183" data-name="Path 183" d="M400.9,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,400.9,283.168Z" transform="translate(734.674 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                </g>
              </svg>
              <span class="counter">
                <?php echo WC()->cart->get_cart_contents_count();  ?>
              </span>

            </a>
            <a href="/my-account/" class="header-icon d-flex d-lg-none justify-content-center align-items-center transition me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="17.625" height="17.625" viewBox="0 0 17.625 17.625">
                <path id="noun-account-1345319" d="M170.7,98.141a4.613,4.613,0,1,0-4.773,0,8.723,8.723,0,0,0-6.326,8.372v.512H177.03v-.512a8.723,8.723,0,0,0-6.326-8.372Zm-5.974-3.928a3.588,3.588,0,1,1,3.588,3.588A3.591,3.591,0,0,1,164.729,94.213ZM160.646,106a7.687,7.687,0,0,1,15.341,0Z" transform="translate(-159.504 -89.5)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
              </svg>

            </a>

            <!-- humburger -->
            <div class="d-block text-end humbrger-menu">
              <button class="navbar-toggler p-0 border-0  rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="21" viewBox="0 0 29 21">
                  <g id="Group_2963" data-name="Group 2963" transform="translate(-313 -37)">
                    <rect id="Rectangle_1368" data-name="Rectangle 1368" width="29" height="3" rx="1.5" transform="translate(313 37)" fill="currentcolor" />
                    <rect id="Rectangle_1369" data-name="Rectangle 1369" width="29" height="3" rx="1.5" transform="translate(313 46)" fill="currentcolor" />
                    <rect id="Rectangle_1370" data-name="Rectangle 1370" width="29" height="3" rx="1.5" transform="translate(313 55)" fill="currentcolor" />
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 collapse d-lg-flex justify-content-lg-center" id="navbarHeader">
          <div class="d-flex flex-column h-100">
            <!-- Mobile menu open logo -->
            <div class="mob-container d-flex d-lg-none justify-content-between align-items-center">
              <a href="/" class="d-block d-lg-none py-0 text-capitalize menu-open-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="187.933" height="34.031" viewBox="0 0 349.548 69.994">
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
              </a>
              <a href="javascript:;" class="header-icon d-flex justify-content-center align-items-center transition cartTrigger cartTriggerMobile me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.082" height="16.381" viewBox="0 0 21.082 16.381">
                  <g id="Group_2742" data-name="Group 2742" transform="translate(-1122.297 -74.962)">
                    <path id="Path_180" data-name="Path 180" d="M135.189,104.023h-3.978l-3.829-5.494a.5.5,0,0,0-.82.572l3.431,4.947h-9.521L123.9,99.1a.5.5,0,0,0-.82-.572l-3.8,5.494H115.3a.5.5,0,0,0,0,.994h1.367l2.386,9.074a.479.479,0,0,0,.472.373h11.436a.479.479,0,0,0,.472-.373l2.387-9.074h1.367a.5.5,0,1,0,0-.994Zm-4.6,9.447H119.9l-2.213-8.453H132.8Z" transform="translate(1007.594 -23.221)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                    <path id="Path_181" data-name="Path 181" d="M277.7,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,277.7,283.168Z" transform="translate(852.405 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                    <path id="Path_182" data-name="Path 182" d="M339.3,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,339.3,283.168Z" transform="translate(793.54 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                    <path id="Path_183" data-name="Path 183" d="M400.9,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,400.9,283.168Z" transform="translate(734.674 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                  </g>
                </svg>
                <span class="counter">
                  <?php echo WC()->cart->get_cart_contents_count();  ?>
                </span>

              </a>
              <div class="d-block text-end humbrger-menu open-mobile-menu">
                <button class="navbar-toggler p-0 border-0  rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">

                  <svg class="mobile-menu-closed" xmlns="http://www.w3.org/2000/svg" width="29" height="21" viewBox="0 0 29 21">
                    <g id="Group_2963" data-name="Group 2963" transform="translate(-313 -37)">
                      <rect id="Rectangle_1368" data-name="Rectangle 1368" width="29" height="3" rx="1.5" transform="translate(313 37)" fill="#61714b" />
                      <rect id="Rectangle_1369" data-name="Rectangle 1369" width="29" height="3" rx="1.5" transform="translate(313 46)" fill="#61714b" />
                      <rect id="Rectangle_1370" data-name="Rectangle 1370" width="29" height="3" rx="1.5" transform="translate(313 55)" fill="#61714b" />
                    </g>
                  </svg>

                  <svg class="mobile-menu-open" xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663" viewBox="0 0 15.73 15.663">
                    <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
                      <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8"></line>
                      <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8"></line>
                    </g>
                  </svg>

                </button>
              </div>
            </div>
            <div class="px-4 mt-1 d-block d-lg-none">
              <form action="/" method="get" class="position-relative header-search-input-mobile px-2">
                <input type="search" class="mobile-search form-control text-base fw-medium font-sans position-relative" data-rlvlive="true" name="s" id="s" placeholder="Search here…">

                <div class="close-search opacity-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663" viewBox="0 0 15.73 15.663">
                    <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
                      <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                      <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                    </g>
                  </svg>
                </div>
                <button type="button" type="submit" class="serch-icon position-absolute top-50 translate-middle-y transition d-flex justify-content-center align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.405" height="15.389" viewBox="0 0 15.405 15.389">
                    <path id="Path_12469" data-name="Path 12469" d="M207.992,137.5l-3.09-3.064a6.8,6.8,0,0,0-.367-9.244,6.7,6.7,0,0,0-4.792-1.99,6.809,6.809,0,1,0,0,13.617,6.733,6.733,0,0,0,4.426-1.65l3.09,3.09a.5.5,0,0,0,.34.131.517.517,0,0,0,.367-.157.53.53,0,0,0,.026-.733Zm-12.334-3.43a5.64,5.64,0,0,1-1.676-4.059,5.855,5.855,0,0,1,1.676-4.085,5.7,5.7,0,0,1,4.085-1.676,5.761,5.761,0,1,1-4.085,9.82Z" transform="translate(-192.821 -123.098)" fill="currentcolor" stroke="currentcolor" stroke-width="0.1" />
                  </svg>
                </button>
              </form>
            </div>
            <!-- END Mobile menu open logo -->

            <!-- desktop/Mobile Menu list -->
            <div class="mob-container menu">

              <ul class="d-flex flex-wrap flex-column flex-lg-row p-0 m-0 justify-content-lg-end align-items-lg-center flex-grow-1">
                <li class="about-items">
                  <a href="javascript:void(0);" class="mega-menu text-primary menu-item text-xs d-flex align-items-center" data-menu="true" data-menu-name="#product-menu">
                    Products
                  </a>
                  <!-- mega menu div -->
                  <div class="custom-mega-menu pb-4" id="product-menu">
                    <!-- Mobile menu open logo -->
                    <div class="mob-container d-flex d-lg-none justify-content-between align-items-center">
                      <a href="/" class="d-block d-lg-none py-0 text-capitalize menu-open-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="187.933" height="34.031" viewBox="0 0 349.548 69.994">
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
                      </a>
                      <div class="d-block text-end humbrger-menu open-mobile-menu">
                        <button class="navbar-toggler p-0 border-0  rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="21" viewBox="0 0 29 21">
                            <g id="Group_2963" data-name="Group 2963" transform="translate(-313 -37)">
                              <rect id="Rectangle_1368" data-name="Rectangle 1368" width="29" height="3" rx="1.5" transform="translate(313 37)" fill="#61714b" />
                              <rect id="Rectangle_1369" data-name="Rectangle 1369" width="29" height="3" rx="1.5" transform="translate(313 46)" fill="#61714b" />
                              <rect id="Rectangle_1370" data-name="Rectangle 1370" width="29" height="3" rx="1.5" transform="translate(313 55)" fill="#61714b" />
                            </g>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <div class="px-3 mt-1 d-block d-lg-none">
                      <form action="/" method="get" class="position-relative header-search-input-mobile px-2">
                        <input type="text" class="form-control text-base fw-medium font-sans position-relative" name="s" id="s" placeholder="Search here…">

                        <button type="button" type="submit" class="serch-icon position-absolute top-50 translate-middle-y transition d-flex justify-content-center align-items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15.405" height="15.389" viewBox="0 0 15.405 15.389">
                            <path id="Path_12469" data-name="Path 12469" d="M207.992,137.5l-3.09-3.064a6.8,6.8,0,0,0-.367-9.244,6.7,6.7,0,0,0-4.792-1.99,6.809,6.809,0,1,0,0,13.617,6.733,6.733,0,0,0,4.426-1.65l3.09,3.09a.5.5,0,0,0,.34.131.517.517,0,0,0,.367-.157.53.53,0,0,0,.026-.733Zm-12.334-3.43a5.64,5.64,0,0,1-1.676-4.059,5.855,5.855,0,0,1,1.676-4.085,5.7,5.7,0,0,1,4.085-1.676,5.761,5.761,0,1,1-4.085,9.82Z" transform="translate(-192.821 -123.098)" fill="currentcolor" stroke="currentcolor" stroke-width="0.1" />
                          </svg>
                        </button>
                      </form>
                    </div>
                    <!-- END Mobile menu open logo -->
                    <div class="container h-100  mob-container">
                      <!-- our megamenu  -->
                      <div class="row d-block d-lg-flex megamenu-nav">
                        <div class="col-12 col-md-3 d-flex justify-content-center flex-column align-items-start h-100">

                          <ul class="p-0 m-0 d-flex flex-column h-100">
                            <?php

                            // Check rows exists.
                            if (have_rows('submenu', 'option')) :

                              // Loop through rows.
                              while (have_rows('submenu', 'option')) : the_row();

                                $subMenuTitle = get_sub_field('submenu_title');
                                $subMenuSlug = sanitize_title($subMenuTitle);
                                $showFirst = (isset(get_sub_field('show_first', 'option')[0]) && get_sub_field('show_first', 'option')[0] == 'yes') ? true : false;

                            ?>

                                <li>
                                  <a href="javascript:void(0);" class="our-category text-uppercase pb-2 d-block <?php if ($showFirst) echo 'open'; ?>" data-mega-menu="true" data-mega-menu-name="#<?php echo clean($subMenuSlug) ?>">
                                    <span><?php echo  $subMenuTitle; ?></span>
                                  </a>
                                </li>

                            <?php

                              // End loop.
                              endwhile;
                            endif;  ?>
                          </ul>
                          <a href="/overseas/" class="btn btn-outline-primary btn-md header-open-btn flex-shrink-0">
                            <div class="d-flex justify-content-between align-items-center">
                              <span>
                                Overseas?
                              </span>
                              <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                  <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                                </svg>
                              </div>
                            </div>
                          </a>
                        </div>

                        <div class="col-12 col-md-9  h-100 overflow-auto mega-menu-result px-0">
                          <!-- Mobile menu open logo -->
                          <div class="mob-container d-flex d-lg-none justify-content-between align-items-center">
                            <a href="#" class="d-block d-lg-none py-0 text-capitalize menu-open-logo">
                              <svg id="Layer_1-2" xmlns="http://www.w3.org/2000/svg" width="187.933" height="34.031" viewBox="0 0 187.933 34.031">
                                <g id="Group_2789" data-name="Group 2789">
                                  <path id="Path_12199" data-name="Path 12199" d="M0,1.31V34.382H17.136V28.776H6.854V20.533h8.434V14.927H6.854V6.916H16.86V1.31Z" transform="translate(0 -0.386)" fill="currentcolor" />
                                  <path id="Path_12200" data-name="Path 12200" d="M43.587,1.31l-4.908,22.6L33.764,1.31H26.91l8.709,33.072H41.69L50.4,1.31Z" transform="translate(-7.934 -0.386)" fill="currentcolor" />
                                  <path id="Path_12201" data-name="Path 12201" d="M62.98,1.31V34.382H80.123V28.776H69.834V20.533h8.434V14.927H69.834V6.916H79.84V1.31Z" transform="translate(-18.569 -0.386)" fill="currentcolor" />
                                  <path id="Path_12202" data-name="Path 12202" d="M100.8,15.858c1.53,0,2.179-.233,2.729-.931a5.867,5.867,0,0,0,.881-3.476c0-3.526-.832-4.682-3.476-4.682H98.844V15.85h1.946ZM99.034,34.382H92.18V1.31h9.075c4.217,0,6.163.557,7.736,2.179,1.622,1.622,2.271,3.893,2.271,7.6,0,5.832-1.022,8.011-4.309,9.492l5.514,13.807h-7.595L100.289,21.1H99.041V34.389Z" transform="translate(-27.178 -0.386)" fill="currentcolor" />
                                  <path id="Path_12203" data-name="Path 12203" d="M123.75,1.31V34.382h17.135V28.776H130.6V20.533h8.427V14.927H130.6V6.916H140.61V1.31Z" transform="translate(-36.486 -0.386)" fill="currentcolor" />
                                  <g id="Group_2788" data-name="Group 2788" transform="translate(107.65)">
                                    <path id="Path_12204" data-name="Path 12204" d="M161.594,28.905c3.335-.092,3.843-.832,3.843-6.114V12.877c0-5.282-.508-6.022-3.843-6.121h-2.087V28.9h2.087ZM152.66,1.3h8.617c8.152-.141,11.163,2.687,11.022,10.373V23.99c.141,7.693-2.87,10.514-11.022,10.373H152.66Z" transform="translate(-152.66 -0.381)" fill="currentcolor" />
                                    <path id="Path_12205" data-name="Path 12205" d="M194.564,15.055h9.915v5.7c0,4.816-.465,7.411-1.622,9.308C201.193,32.748,198.548,34,194.43,34c-3.843,0-6.671-1.156-8.335-3.476-1.3-1.763-1.805-4.259-1.805-8.568V12.037c0-4.725.6-7.32,2.221-9.125C188.225.973,190.77,0,194.3,0c4.034,0,6.763,1.389,8.293,4.259.79,1.431,1.114,3.1,1.206,5.881H197.54c-.324-3.66-.973-4.633-3.053-4.633-2.637,0-3.335,1.481-3.335,7.045v8.892a17.914,17.914,0,0,0,.465,5.049,2.786,2.786,0,0,0,2.87,1.989c2.5,0,3.244-1.481,3.244-6.255V20.281h-3.152V15.048Z" transform="translate(-161.986)" fill="currentcolor" />
                                  </g>
                                  <path id="Path_12206" data-name="Path 12206" d="M216.5,1.31V34.382h17.143V28.776H223.354V20.533h8.434V14.927h-8.434V6.916H233.36V1.31Z" transform="translate(-63.832 -0.386)" fill="currentcolor" />
                                  <path id="Path_12207" data-name="Path 12207" d="M254.373,42.059h.557a.069.069,0,0,0,.078-.078V39.789c0-.049.007-.063.063-.063.282,0,.564.007.846.014a1.031,1.031,0,0,1,.3.028.88.88,0,0,1,.515.331,8.108,8.108,0,0,1,.5.684c.268.409.529.818.79,1.234a.077.077,0,0,0,.071.049c.254,0,.5,0,.755-.007h.063a.62.62,0,0,0-.042-.071c-.331-.515-.663-1.03-1-1.537a2.036,2.036,0,0,0-.769-.719c-.014,0-.021-.014-.049-.035a.574.574,0,0,1,.063-.014c.134-.035.275-.063.4-.106a1.4,1.4,0,0,0,.663-.416,1.379,1.379,0,0,0,.282-1.227,1.239,1.239,0,0,0-.973-1.022,3.045,3.045,0,0,0-.67-.071l-2.426-.021c-.078,0-.078,0-.078.078V42q0,.063.071.063m.628-4.6v-.063h.374c.522,0,1.051,0,1.573.021a.83.83,0,0,1,.169,1.643,3.432,3.432,0,0,1-.712.063c-.451,0-.9,0-1.347.007-.056,0-.063-.014-.063-.071V37.462" transform="translate(-74.98 -10.856)" fill="currentcolor" />
                                  <path id="Path_12208" data-name="Path 12208" d="M249.366,38.251l2.785-4.823h5.571l2.785,4.823-2.785,4.823h-5.571Zm2.426-5.451-3.152,5.451,3.152,5.451h6.3l3.152-5.451L258.089,32.8Z" transform="translate(-73.308 -9.671)" fill="currentcolor" />
                                </g>
                              </svg>
                            </a>
                            <div class="d-block text-end humbrger-menu open-mobile-menu">
                              <button class="navbar-toggler p-0 border-0  rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="21" viewBox="0 0 29 21">
                                  <g id="Group_2963" data-name="Group 2963" transform="translate(-313 -37)">
                                    <rect id="Rectangle_1368" data-name="Rectangle 1368" width="29" height="3" rx="1.5" transform="translate(313 37)" fill="#61714b" />
                                    <rect id="Rectangle_1369" data-name="Rectangle 1369" width="29" height="3" rx="1.5" transform="translate(313 46)" fill="#61714b" />
                                    <rect id="Rectangle_1370" data-name="Rectangle 1370" width="29" height="3" rx="1.5" transform="translate(313 55)" fill="#61714b" />
                                  </g>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <div class="mobile-custom-memu">
                            <div class="d-flex d-lg-none justify-content-between align-items-center pt-3 pt-lg-0 pb-3 mb-3">
                              <a href="javascript:void(0);" class="mega-menu-back btn btn-outline-primary header-open-btn back-btn">
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-arrow d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                      <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(19.249) rotate(90)" fill="#f5f3f0" />
                                    </svg>
                                  </div>
                                  <span>
                                    Go Back
                                  </span>
                                </div>
                              </a>
                            </div>

                            <?php

                            // Check rows exists.
                            if (have_rows('submenu', 'option')) :

                              // Loop through rows.
                              while (have_rows('submenu', 'option')) : the_row();

                                $subMenuTitle = get_sub_field('submenu_title');
                                $subMenuSlug = sanitize_title($subMenuTitle);
                                $showFirst = (isset(get_sub_field('show_first', 'option')[0]) && get_sub_field('show_first', 'option')[0] == 'yes') ? true : false;

                            ?>


                                <!-- tab 1 -->
                                <div id="<?php echo clean($subMenuSlug) ?>" class="mega-menu-result-tab <?php if ($showFirst) echo 'show'; ?>">
                                  <div class="p-0 m-0 g-0 row mega-menu-result-list">
                                    <?php
                                    // Check rows exists.
                                    if ($subMenuLinks = get_sub_field('submenu_links', 'option')) :

                                      // Loop through rows.
                                      foreach ($subMenuLinks as $submenuLink) :

                                        $postID = $submenuLink->ID;
                                        $postThumbnail = get_the_post_thumbnail_url($postID, 'medium');


                                    ?>
                                        <div class="col-6 col-md-6 col-lg-3 px-lg-2 px-1">
                                          <a href="<?php echo get_the_permalink($postID); ?>" class="position-relative card-hover w-100">
                                            <div class="header-menu-img overflow-hidden position-relative">
                                              <img src="<?php echo $postThumbnail; ?>" alt="<?php echo get_the_title($postID); ?>" class="object-cover w-100 h-100">
                                              <div class="position-absolute top-50 start-50 translate-middle text-center z-2">
                                                <h3 class="text-secondary headingL"><?php echo get_the_title($postID); ?></h3>
                                              </div>
                                              <div class="overlay--default"></div>
                                            </div>

                                          </a>
                                        </div>

                                    <?php endforeach;
                                    endif; ?>
                                  </div>
                                </div>
                              <?php $i++;
                              endwhile; ?>
                            <?php endif; ?>

                            <a href="javascript:void(0);" class="btn btn-outline-primary header-open-btn mt-5 my-5 my-lg-0 d-inline-flex d-lg-none">
                              <div class="d-flex justify-content-between align-items-center">
                                <span>
                                  Overseas?
                                </span>
                                <div class="ms-1 btn-arrow d-flex justify-content-center align-items-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="19.249" height="19.242" viewBox="0 0 19.249 19.242">
                                    <path id="Path_12443" data-name="Path 12443" d="M9.619,19.249a.982.982,0,0,0,.63-.244l8.708-8.249a.922.922,0,0,0,.036-1.3.953.953,0,0,0-1.3-.036L10.536,16.2V.916A.917.917,0,0,0,8.7.916V16.2L1.542,9.424a.965.965,0,0,0-1.3.036.929.929,0,0,0,.036,1.3L8.99,19.005a.838.838,0,0,0,.63.244Z" transform="translate(0 19.242) rotate(-90)" fill="#f5f3f0" />
                                  </svg>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- END our megamenu  -->
                    </div>
                  </div>
                  <!--END mega menu div -->
                </li>
                <?php wp_nav_menu_no_ul(); ?>

              </ul>
              <div class="d-block d-lg-none header-btn">
                <li><a href="/contact/" class="btn btn-primary w-100">Get in touch</a></li>
              </div>
            </div>
            <!-- END desktop/Mobile Menu list -->
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <ul class="d-lg-flex header-btn justify-content-end align-items-center d-none  main-menu mb-0">
            <li><a href="/contact/" class="btn btn-primary">Get in touch</a></li>
            <li>
              <a href="javascript:;" class="header-icon d-flex justify-content-center align-items-center transition cartTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.082" height="16.381" viewBox="0 0 21.082 16.381">
                  <g id="Group_2742" data-name="Group 2742" transform="translate(-1122.297 -74.962)">
                    <path id="Path_180" data-name="Path 180" d="M135.189,104.023h-3.978l-3.829-5.494a.5.5,0,0,0-.82.572l3.431,4.947h-9.521L123.9,99.1a.5.5,0,0,0-.82-.572l-3.8,5.494H115.3a.5.5,0,0,0,0,.994h1.367l2.386,9.074a.479.479,0,0,0,.472.373h11.436a.479.479,0,0,0,.472-.373l2.387-9.074h1.367a.5.5,0,1,0,0-.994Zm-4.6,9.447H119.9l-2.213-8.453H132.8Z" transform="translate(1007.594 -23.221)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                    <path id="Path_181" data-name="Path 181" d="M277.7,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,277.7,283.168Z" transform="translate(852.405 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                    <path id="Path_182" data-name="Path 182" d="M339.3,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,339.3,283.168Z" transform="translate(793.54 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                    <path id="Path_183" data-name="Path 183" d="M400.9,283.168a.5.5,0,0,0,.5-.5V277.7a.5.5,0,1,0-.994,0v4.972A.5.5,0,0,0,400.9,283.168Z" transform="translate(734.674 -194.163)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                  </g>
                </svg>
                <span class="counter">
                  <?php echo WC()->cart->get_cart_contents_count();  ?>
                </span>

              </a>
            </li>
            <li>
              <a href="/my-account/" class="header-icon d-flex justify-content-center align-items-center transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.625" height="17.625" viewBox="0 0 17.625 17.625">
                  <path id="noun-account-1345319" d="M170.7,98.141a4.613,4.613,0,1,0-4.773,0,8.723,8.723,0,0,0-6.326,8.372v.512H177.03v-.512a8.723,8.723,0,0,0-6.326-8.372Zm-5.974-3.928a3.588,3.588,0,1,1,3.588,3.588A3.591,3.591,0,0,1,164.729,94.213ZM160.646,106a7.687,7.687,0,0,1,15.341,0Z" transform="translate(-159.504 -89.5)" fill="currentcolor" stroke="currentcolor" stroke-width="0.2" />
                </svg>

              </a>
            </li>
            <li class="search-box">
              <div class="search-button">
                <form action="/" method="get" action="search.html" class="d-flex align-items-center searchglobal">
                  <span class="d-block search-close cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.422" height="11.421" viewBox="0 0 11.422 11.421">
                      <g id="Group_2785" data-name="Group 2785" transform="translate(-967.538 -138.54)">
                        <rect id="Rectangle_639" data-name="Rectangle 639" width="14.588" height="1.563" transform="translate(967.539 148.855) rotate(-45)" fill="#61714b" />
                        <rect id="Rectangle_640" data-name="Rectangle 640" width="14.589" height="1.563" transform="translate(977.854 149.961) rotate(-135)" fill="#61714b" />
                      </g>
                    </svg>
                  </span>
                  <input type="text" class="input-control ms-2 header-search-input" data-rlvlive="true" name="s" id="s" placeholder="Search...">


                  <button type="submit" class="menu-item serach-global-icon  border-end-0 d-flex border-0 bg-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.446" height="17.446" viewBox="0 0 17.446 17.446">
                      <path id="Path_184" data-name="Path 184" d="M95.657,25.072,90.07,19.485a6.713,6.713,0,1,0-.579.579l5.587,5.587a.41.41,0,0,0,.579-.579ZM80.858,19.2a5.913,5.913,0,1,1,4.176,1.727A5.905,5.905,0,0,1,80.858,19.2Z" transform="translate(-78.326 -8.319)" />
                    </svg>
                  </button>
                </form>
                <button type="submit" class="menu-item global-search-btn header-icon d-flex justify-content-center align-items-center  transition">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.405" height="15.389" viewBox="0 0 15.405 15.389">
                    <path id="Path_12469" data-name="Path 12469" d="M207.992,137.5l-3.09-3.064a6.8,6.8,0,0,0-.367-9.244,6.7,6.7,0,0,0-4.792-1.99,6.809,6.809,0,1,0,0,13.617,6.733,6.733,0,0,0,4.426-1.65l3.09,3.09a.5.5,0,0,0,.34.131.517.517,0,0,0,.367-.157.53.53,0,0,0,.026-.733Zm-12.334-3.43a5.64,5.64,0,0,1-1.676-4.059,5.855,5.855,0,0,1,1.676-4.085,5.7,5.7,0,0,1,4.085-1.676,5.761,5.761,0,1,1-4.085,9.82Z" transform="translate(-192.821 -123.098)" fill="currentcolor" stroke="#586d42" stroke-width="0.2" />
                  </svg>
                </button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- END menu -->
  <div class="menu-bg-overlay"></div>
</header>
<div class="fake-header d-block"></div>
<!-- END header -->



<div class="mini-cart--wrap">
  <div class="mini-cart bg-secondary">
    <button type="button" class="btn-close ms-auto me-0 d-flex justify-content-center align-items-center close-button" data-bs-dismiss="modal" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663" viewBox="0 0 15.73 15.663">
        <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
          <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
          <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
        </g>
      </svg>
    </button>
    <div class="wrap px-md-4">
      <div class="padding-top--30px"></div>
      <h2 class="medium-title text-primary mb-0">ADDED PRODUCTS (<?php echo WC()->cart->get_cart_contents_count(); ?>)</h2>

      <?php
      if (WC()->cart->get_cart()) :
        $i = 0;
        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
          $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
          $product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
          $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

          if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
            $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key); ?>
            <div class="d-flex align-items-center mt-5 pt-lg-2">
              <div class="cart-img theme-radius overflow-hidden flex-shrink-0">
                <a href="<?php echo $product_permalink; ?>">
                  <img src="<?php echo get_the_post_thumbnail_url($product_id, 'large') ?>" alt="<?php echo $product_name ?>" class="object-cover">

                </a>

              </div>
              <div class="d-flex align-items-center ps-4 w-100">
                <a href="<?php echo $product_permalink; ?>" class="flex-grow-1">
                  <h3 class="text-primary text-xxl mb-1 line-height-1"><?php echo $product_name ?></h3>
                  <?php // Meta data.
                  echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.
                  ?>
                  <span class="text-sm text-capitalize text-gray font-sans fw-medium">Qty:
                    <?php echo $cart_item['quantity'] ?>
                  </span>
                </a>
                <a href="<?php echo wc_get_cart_remove_url($cart_item_key) ?>" class="cart-item-delete">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 15.73 15.663">
                    <g id="Group_2895" data-name="Group 2895" transform="translate(-1109.741 -6524.04)">
                      <line id="Line_610" data-name="Line 610" x2="18.551" transform="translate(1111.081 6525.313) rotate(45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                      <line id="Line_611" data-name="Line 611" x2="18.551" transform="translate(1111.014 6538.43) rotate(-45)" fill="none" stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
        <?php   }
          $i++;
        endforeach; ?>

        <div class="d-flex justify-content-between font-sans text-primary pt-5 mt-lg-4 mt-3">
          <h4 class="text-base text-capitalize">Subtotal</h4>
          <span class="text-base fw-medium"><?php wc_cart_totals_subtotal_html(); ?></span>
        </div>
        <div class="pb-2 pb-lg-0 text-center">
          <a href="/cart/" class="btn-primary-bg btn-outline-primary-bg d-block mt-3">View Basket</a>
          <a href="/checkout/" class="btn-primary-bg d-block mt-2">Continue to Checkout</a>
          <a href="/product-category/commercial-garden-edging/?filters=25,16" class="text-underline d-block mt-2 w-100  d-inline-block">
            Continue Shopping
          </a>
        </div>
      <?php else : ?>
        No products in your basket
      <?php endif; ?>
      <p class="medium-title text-primary my-2 font-body text-center">We Also Offer</p>
      <?php if (get_field('side_basket_image', 'options')) : ?>
        <?php if ($side_basket_link = get_field('side_basket_link', 'options')) : ?>
          <a href="<?php echo esc_html($side_basket_link); ?>" class="d-block theme-radius overflow-hidden mt-lg-3 mt-4 text-white card-hover">
            <div class="modal-cart-img position-relative">
              <?php $side_basket_image = get_field('side_basket_image', 'options');
              if ($side_basket_image) : ?>
                <img src="<?php echo esc_url($side_basket_image['url']); ?>" alt="<?php echo esc_url($side_basket_image['alt']); ?>" class="w-100 h-100 object-cover">
              <?php endif; ?>
              <div class="position-absolute top-50 translate-middle-y text-center w-100 px-3">
                <?php if ($side_basket_title = get_field('side_basket_title', 'options')) : ?>
                  <h2 class="headingL mb-0 line-height-1"><?php echo esc_html($side_basket_title); ?></h2>
                <?php endif; ?>
                <span class="text-sm fw-medium text-decoration-underline font-sans">Shop
                  now</span>
              </div>
            </div>
          </a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
</div>

<style>
  #trustpilot-widget-trustbox-0-wrapper {
    display: none;
  }
</style>