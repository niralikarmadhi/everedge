<?php

/*

  * Template Name: Custom Product

  */

?>

<main class="pb-5">

    <!-- hero section -->
    <section class="position-relative">
        <div class="container">
            <nav aria-label="breadcrumb" class="d-none d-lg-block">
                <ol class="breadcrumb font-sans">
                    <li class="breadcrumb-item"><a href="/"
                            class="text-sm text-capitalize text-primary fw-normal opacity-75">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);"
                            class="text-sm text-capitalize text-primary fw-normal opacity-75">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Titan</li>
                </ol>
            </nav>
        </div>
        <div class="row g-0 product-info-sec">
            <div class="col-lg-7 product-slider slick-indicators slick-horizontal-dots-center  bg-primary">
                <div class="product-slider-img position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/product-slider-img.png" alt="image"
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
                <div class="product-slider-img position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/product-slider-img.png" alt="image"
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
                <div class="product-slider-img position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/product-slider-img.png" alt="image"
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
                <div class="product-slider-img position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/product-slider-img.png" alt="image"
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
            </div>
            <div class="col-lg-5 product-info-block">
                <div class="col-lg-9 mx-auto d-flex flex-column justify-content-center h-100 pt-4 pt-lg-0 mt-3 mt-lg-0">
                    <h2 class="headingXXL text-primary mb-2 pb-1 pb-lg-0 line-height-1">EVEREDGE TITAN</h2>
                    <div class="col-lg-10">
                        <p class="text-sm fw-light text-gray">Curabitur a dolor dolor. Proin nec enim sit amet urna
                            faucibus cursus id id lectus. Curabitur a dolor dolor. Proin nec enim sit amet urna faucibus
                            cursus id id lectus.</p>
                    </div>
                    <ul class="d-flex flex-wrap product-modal-label mb-4 pb-lg-2 pb-3 justify-content-lg-start">
                        <li class=" pe-lg-3"><a href="javascript:void(0);"
                                class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans">Nbs
                                Product Spec</a></li>
                        <li class="ms-lg-4 ms-5"><a href="javascript:void(0);"
                                class="text-primary d-inline-block fw-normal text-sm text-capitalize text-decoration-underline font-sans">Installation
                                Guide</a></li>
                    </ul>
                    <div class="border-bottom"></div>
                    <div
                        class="d-lg-flex flex-lg-row flex-column align-items-center justify-content-between pt-lg-4 mt-0 mt-lg-3 pt-4">
                        <h3 class="headingM text-primary mb-4">POA</h3>
                        <a href="javascript:void(0);" class="btn-primary-bg d-block">Custom Size</a>
                        <a href="javascript:void(0);"
                            class="btn-primary-bg btn-outline-primary-bg d-block mt-3 mt-lg-0 d-lg-none">Custom Size</a>
                    </div>
                    <h5
                        class="text-primary text-base text-lg-end text-center pt-lg-4 mt-0 mt-lg-3 pt-4 mb-4 d-none d-lg-block">
                        BUYING OVERSEAS?
                        <a href="contact.html"
                            class="text-sm font-sans text-decoration-underline text-transform-none">Get in touch</a>
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <!-- choose titan -->
    <section class="choose-titan-sec why-choose-everedge bg-primary position-relative">
        <div class="container">
            <h2 class="text-secondary section-title mb-0">REASONS TO CHOOSE TITAN?</h2>
            <div class="row g-0 mt-lg-5 mt-4 pt-lg-2 pt-1">
                <div class="col-12 col-lg-4">
                    <a href="javaseript:void(0);" class="d-block choose-card overflow-hidden card-hover">
                        <div class="card-img overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/choose-img-1.png" alt="choose-img-1"
                                class="w-100 h-100 object-cover">
                        </div>
                        <div class="card-body text-center bg-secondary  transition">
                            <h3 class="text-primary mb-2">EASY TO INSTALL</h3>
                            <p class="text-lg text-gray px-4 mb-0 fw-light">Interlocking tabbed joining system to
                                connect sections</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="javaseript:void(0);" class="d-block choose-card overflow-hidden card-hover">
                        <div class="card-img overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/choose-img-2.png" alt="choose-img-1"
                                class="w-100 h-100 object-cover">
                        </div>
                        <div class="card-body text-center bg-secondary  transition">
                            <h3 class="text-primary mb-2">VERSATILE</h3>
                            <p class="text-lg text-gray px-4 mb-0 fw-light">EverEdge can be bent, curved and formed to
                                almost any shape</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="javaseript:void(0);" class="d-block choose-card overflow-hidden card-hover">
                        <div class="card-img overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/choose-img-3.png" alt="choose-img-1"
                                class="w-100 h-100 object-cover">
                        </div>
                        <div class="card-body text-center bg-secondary  transition">
                            <h3 class="text-primary mb-2">DURABLE</h3>
                            <p class="text-lg text-gray px-4 mb-0 fw-light">EverEdge can be bent, curved and formed to
                                almost any shape</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- dimensions -->
    <section class="dimensions-sec bg-primary text-secondary pb-5 pb-lg-0 position-relative">
        <div class="container pb-4 pb-lg-0">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0 pb-2 pb-lg-0">
                    <h3 class="section-title">DIMENSIONS</h3>
                </div>
                <div class="col-12 col-lg-6 dimensions-content">
                    <h4 class="medium-title mb-2 pb-1">LENGTH: 2500MM</h4>
                    <div class="col-lg-7 pe-lg-4">
                        <p class="text-primary-light opacity-50 pe-lg-3 mb-4">Curabitur a dolor dolor. Proin nec enim
                            sit amet urna faucibus cursus id id lectus. Integer venenatis dapibus dui, vitae laoret.</p>
                    </div>
                </div>
            </div>
            <div class="w-100 text-center mt-4 d-none d-lg-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/image.png" alt="dimension-img" class="mx-auto">
            </div>
            <div class="row justify-content-between dimension-block">
                <div
                    class="col-12 col-lg-4 dimensions-content border-block-end text-lg-end d-flex flex-column justify-content-end pt-lg-5">
                    <h4 class="medium-title mb-2 pb-1 ">THICKNESS: 2.5 / 4.0 / 6.0MM</h4>
                    <div class="ps-lg-4">
                        <p class="text-primary-light opacity-50 pe-lg-3 mb-4">Curabitur a dolor dolor. Proin nec enim
                            sit amet urna faucibus cursus id id lectus. Integer venenatis dapibus dui, vitae laoret.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 content-right mt-lg-5 pt-lg-5">
                    <div class="dimensions-content">
                        <h4 class="medium-title mb-2 pb-1">LENGTH: 2500MM</h4>
                        <div class="col-lg-9 pe-lg-2">
                            <p class="text-primary-light opacity-50 pe-lg-3 mb-4">Curabitur a dolor dolor. Proin nec
                                enim sit amet urna faucibus cursus id id lectus. Integer venenatis dapibus dui, vitae
                                laoret.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product video -->
    <section class="product-video-sec">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/general/product-video.mp4" class="product-video-img" data-fancybox>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/product-video-img.png" alt="image" class="h-100 w-100 object-cover">
        </a>
    </section>

    <!-- suitable finishes -->
    <section class="suitable-finishes position-relative">
        <div class="container">
            <h2 class="text-primary section-title">MOST SUITABLE FINISHES</h2>
            <div class="row pt-4 mt-3 flex-nowrap overflow-auto scroll-hidden -mr-4">
                <div class="col-11 col-lg-6 px-lg-2 px-1">
                    <a href="finishes.html" class="suitable-card  overflow-hidden d-block position-relative transition">
                        <div class="suitable-img theme-radius overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/suitable-img-1.png" alt="image"
                                class="w-100 h-100 object-cover">
                            <div class="small-img position-absolute">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/small-img-1.png" alt="about-img"
                                    class="object-cover transition">
                            </div>
                        </div>
                        <div class="suitable-card-body mt-4 pt-3">
                            <h3 class="text-primary mb-3">POWDER COATED</h3>
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
                <div class="col-11 col-lg-6 px-lg-2 px-1">
                    <a href="finishes.html" class="suitable-card  overflow-hidden d-block position-relative">
                        <div class="suitable-img theme-radius overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/suitable-img-2.png" alt="image"
                                class="w-100 h-100 object-cover">
                            <div class="small-img position-absolute">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/small-img-2.png" alt="about-img"
                                    class="object-cover transition">
                            </div>
                        </div>
                        <div class="suitable-card-body mt-4 pt-3">
                            <h3 class="text-primary mb-3">COR-TEN STEEL</h3>
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
            </div>
        </div>
    </section>

    <!-- faqs -->
    <section class="bg-primary bg-green-img product-faqs">
        <div class="container">
            <div class="col-lg-10 px-lg-5 mx-auto">
                <h3 class="headingL text-white text-center mb-0">FREQUENTLY ASKED QUESTIONS</h3>
                <div class="pt-4 mt-2 mt-lg-0 pt-md-5">
                    <div class="accordion theme-accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button medium-title text-primary collaps" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span>HOW LONG WILL IT TAKE FOR MY EDGING TO ARRIVE?</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 text-gray text-sm">
                                    <div class="col-lg-10 pe-lg-4">
                                        <p class="pb-lg-4 pb-2">Assuming your order is in stock, normal delivery will be
                                            1-5 working days although this may increase slightly in the Spring due to
                                            the added volume of sales. Some products, such as ProEdge, Halestem and
                                            Titan are on a longer lead time. Please contact us if you need more precise
                                            details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button medium-title text-primary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span>CAN I AMEND MY ORDER AFTER PAYING FOR IT?</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 text-gray text-sm">
                                    <div class="col-lg-10 pe-lg-4">
                                        <p class="pb-lg-4 pb-2">Assuming your order is in stock, normal delivery will be
                                            1-5 working days although this may increase slightly in the Spring due to
                                            the added volume of sales. Some products, such as ProEdge, Halestem and
                                            Titan are on a longer lead time. Please contact us if you need more precise
                                            details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button medium-title text-primary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span>WHAT DEPTH SHOULD I CHOOSE?</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 text-gray text-sm">
                                    <div class="col-lg-10 pe-lg-4">
                                        <p class="pb-lg-4 pb-2">Assuming your order is in stock, normal delivery will be
                                            1-5 working days although this may increase slightly in the Spring due to
                                            the added volume of sales. Some products, such as ProEdge, Halestem and
                                            Titan are on a longer lead time. Please contact us if you need more precise
                                            details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4 pt-2">
                            <a href="faqs.html" class="btn">
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

    <!-- related post -->
    <section class="related-post-sec position-relative">
        <div class="container">
            <h2 class="section-title text-primary">RELATED POSTS</h2>
            <div class="row mt-4 pt-3 flex-nowrap overflow-auto scroll-hidden -mr-4">
                <div class="col-11 col-lg-6 px-2">
                    <a href="javascript:void(0);"
                        class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                        <div class="resources-img position-relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/related-post-1.png" alt="resources-img"
                                class="w-100 h-100 object-cover">
                            <div
                                class="resources-tag  position-absolute text-lg text-uppercase text-center text-secondary">
                                GENERAL
                            </div>
                        </div>
                        <div class="card-body bg-white p-4 transition">
                            <h3 class=" mb-3 d-none d-lg-block">CHALLENGES AHEAD FOR UK MANUFACTURING</h3>
                            <h3 class="mb-3 d-block d-lg-none">OPENING TIMES AND LAST SHIPPING DATES</h3>
                            <p class="text-gray fw-light pe-lg-5 me-lg-5 mb-2 pb-1  2">
                                Curabitur a dolor dolor. Proin nec enim sit amet urna faucibus cursus id id lectus.
                                Integer venenatis dapibus dui, vitae laoret.</p>
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
                <div class="col-11 col-lg-6 px-2">
                    <a href="javascript:void(0);"
                        class="resources-card d-block card-hover overflow-hidden theme-radius mx-0">
                        <div class="resources-img position-relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/resources-img-1.png" alt="resources-img"
                                class="w-100 h-100 object-cover">
                            <div
                                class="resources-tag  position-absolute text-lg text-uppercase text-center text-secondary">
                                GENERAL
                            </div>
                        </div>
                        <div class="card-body bg-white p-4 transition">
                            <h3 class="mb-3 d-none d-lg-block">HOW TO SAVE YOU MONEY ON YOUR LAWN EDGING</h3>
                            <h3 class="mb-3 d-block d-lg-none">OPENING TIMES AND LAST SHIPPING DATES</h3>
                            <p class="text-gray fw-light pe-lg-5 me-lg-5 mb-2 pb-1  2">
                                Curabitur a dolor dolor. Proin nec enim sit amet urna faucibus cursus id id lectus.
                                Integer venenatis dapibus dui, vitae laoret.</p>
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
            </div>
        </div>
    </section>

    <!-- the-trade -->
    <section class="the-trade pt-0">
        <div class="container">
            <div class="trade-content-box theme-radius overflow-hidden">
                <div class="trade-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/trade-img.png" alt="trade-img"
                        class="w-100 h-100 object-cover d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/trade-mobile-img.png" alt="trade-img"
                        class="w-100 h-100 object-cover d-block d-lg-none">
                </div>
                <div class="trade-info">
                    <h2 class="headingXL text-secondary mb-2">IN THE TRADE?</h2>
                    <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start">
                        <div class="col-lg-8 mb-2 pb-1 pb-lg-0 mb-lg-0">
                            <p class="text-lg fw-light text-secondary opacity-75 mb-0  2">
                                Curabitur a dolor dolor. Proin nec enim sit amet urna faucibus cursus id id lectus.
                                Integer venenatis dapibus dui, vitae laoret.ex tincidunt ac. In lectus sapien, posuere
                                sed libero. Aliquam diam nulla, ultricies in neque vitae, mattis pretium urna.
                                Pellentesque placerat rhoncus nunc, quis ullamcorper lorem posuere sit amet.</p>
                        </div>
                        <a href="account.html" class="btn btn-lg">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Create an account</span>
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
    </section>

    <!-- div border -->
    <div class="container">
        <div class="border-bottom d-block d-lg-none"></div>
    </div>
    <!-- why-choose -->
    <section class="why-choose-sec slick-overflow">
        <div class="container">
            <h2 class="section-title text-primary mb-5 pb-lg-2 text-center">WHY CHOOSE EVEREDGE?</h2>
            <div class="col-lg-8 choose-slider mx-auto">
                <div class="px-lg-3">
                    <div class="choose-box bg-primary text-white">
                        <h4 class="mb-3">LOOK SO GOOD</h4>
                        <p class="text-xl fw-light mb-0 pe-lg-5 mb-5 pb-lg-4 pb-3">“Many thanks for the Tree Rings which
                            I positioned today – easily. They look so good that my wife Pam is demanding more!!”</p>
                        <span class="text-base text-capitalize font-sans">David Steventon, Surrey</span>
                    </div>
                </div>
                <div class="px-lg-3">
                    <div class="choose-box bg-primary text-white">
                        <h4 class="mb-3">LOOK SO GOOD</h4>
                        <p class="text-xl fw-light mb-0 pe-lg-5 mb-5 pb-lg-4 pb-3">“Many thanks for the Tree Rings which
                            I positioned today – easily. They look so good that my wife Pam is demanding more!!”</p>
                        <span class="text-base text-capitalize font-sans">David Steventon, Surrey</span>
                    </div>
                </div>
                <div class="px-lg-3">
                    <div class="choose-box bg-primary text-white">
                        <h4 class="mb-3">LOOK SO GOOD</h4>
                        <p class="text-xl fw-light mb-0 pe-lg-5 mb-5 pb-lg-4 pb-3">“Many thanks for the Tree Rings which
                            I positioned today – easily. They look so good that my wife Pam is demanding more!!”</p>
                        <span class="text-base text-capitalize font-sans">David Steventon, Surrey</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- div border -->
    <div class="container">
        <div class="border-bottom d-block d-lg-none"></div>
    </div>

    <!-- want to explore -->
    <section class="want-to-explore">
        <div class="container text-center">
            <h3 class="text-primary mb-0 line-height-1">WANT TO EXPLORE</h3>
            <h5 class="headingL text-primary-light mb-lg-4 pb-2 mb-lg-0 mb-1">OUR FULL RANGE OF PRODUCTS?</h5>
            <a href="javascript:void(0);" class="btn btn-outline-primary">
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
    </section>

    <section class="hero-section home-bottom-cards product-bottom-card pb-0">
        <div class="container">
            <div class="row g-0 -mx-4">
                <div class="col-12 col-lg-6 px-lg-2">
                    <a href="product-open.html" class="theme-radius d-block card-hover overflow-hidden w-100">
                        <div class="hero-img position-relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-img-1.png" alt="hero-img-1"
                                class="h-100 w-100 object-cover">
                            <div
                                class="position-absolute top-50 translate-middle-y hero-content w-100 text-lg-center text-start">
                                <h2 class="section-title text-secondary mb-lg-3 mb-2 pb-1">DOMESTIC PRODUCTS</h2>
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
                </div>
                <div class="col-12 col-lg-6 px-lg-2">
                    <a href="product-open.html" class="theme-radius d-block card-hover overflow-hidden w-100">
                        <div class="hero-img position-relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-img-2.png" alt="hero-img-1"
                                class="h-100 w-100 object-cover">
                            <div
                                class="position-absolute top-50 translate-middle-y hero-content w-100 text-lg-center text-start">
                                <h2 class="section-title text-secondary mb-lg-3 mb-2 pb-1">COMMERCIAL PRODUCTS</h2>
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
                </div>
            </div>
        </div>
    </section>
    <!-- info modal -->
    <div class="info-modal">
        <div class="modal fade" id="infoModal" aria-hidden="true" aria-labelledby="infoModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content text-white">
                    <button type="button"
                        class="btn-close ms-auto me-0 d-flex justify-content-center align-items-center"
                        data-bs-dismiss="modal" aria-label="Close">
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
                    </button>
                    <div class="modal-body p-0 text-secondary pt-lg-3">
                        <div>
                            <h2 class="medium-title text-primary mb-0">ADDED PRODUCTS (1)</h2>
                            <a href="javascript:void(0);" class="d-flex align-items-center mt-5 pt-lg-2">
                                <div class="cart-img theme-radius overflow-hidden flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/cart-img.png" alt="image" class="object-cover">
                                </div>
                                <div class="d-flex align-items-center ps-4 w-100">
                                    <div class="flex-grow-1">
                                        <h3 class="text-primary text-xxl mb-1 line-height-1">EVEREDGE TITAN</h3>
                                        <span class="text-sm text-capitalize text-gray font-sans">Qty: 1</span>
                                    </div>
                                    <div class="cart-item-delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.73" height="15.663"
                                            viewBox="0 0 15.73 15.663">
                                            <g id="Group_2895" data-name="Group 2895"
                                                transform="translate(-1109.741 -6524.04)">
                                                <line id="Line_610" data-name="Line 610" x2="18.551"
                                                    transform="translate(1111.081 6525.313) rotate(45)" fill="none"
                                                    stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                                                <line id="Line_611" data-name="Line 611" x2="18.551"
                                                    transform="translate(1111.014 6538.43) rotate(-45)" fill="none"
                                                    stroke="#61714b" stroke-linecap="round" stroke-width="1.8" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between font-sans text-primary pt-5 mt-lg-4 mt-3">
                                <h4 class="text-base text-capitalize">Subtotal</h4>
                                <span class="text-base">£XX.XX</span>
                            </div>
                            <div class="pb-2 pb-lg-0">
                                <a href="javascript:void(0);"
                                    class="btn-primary-bg btn-outline-primary-bg d-block mt-3">View bag</a>
                                <a href="javascript:void(0);" class="btn-primary-bg d-block mt-2">Continue to
                                    checkout</a>
                            </div>
                            <a href="javascript:void(0);"
                                class="d-block theme-radius overflow-hidden mt-lg-3 mt-4 text-white card-hover">
                                <div class="modal-cart-img position-relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/general/modal-card-img.png" alt="image"
                                        class="w-100 h-100 object-cover">
                                    <div class="position-absolute top-50 translate-middle-y text-center w-100 px-3">
                                        <h2 class="headingL mb-0 line-height-1">CLASSIC</h2>
                                        <span class="text-sm fw-medium text-decoration-underline font-sans">Shop
                                            now</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END info modal -->
</main>