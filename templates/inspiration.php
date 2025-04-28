<?php

/*

* Template Name: Inspiration
*/

?>

<?php if (have_rows('what_we_do')): ?>
    <section class="what-we-do-sec">
        <div class="container">
            <?php while (have_rows('what_we_do')): the_row();
                $title = get_sub_field('title');
                $inspiration_gallery = get_sub_field('inspiration_gallery');
            ?>
                <div class="">
                    <?php if (!empty($title)): ?>
                        <div class="text-primary font-sans font50 leading60 mb-4 pb-2">
                            <?php echo $title; ?>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12">
                            <?php if (!empty($inspiration_gallery)): ?>
                                <div class="inspiration_gallery">
                                    <?php foreach ($inspiration_gallery as $key => $i_gallery):
                                        $image = $i_gallery['image'];
                                        $category_tag = $i_gallery['category_tag'];
                                    ?>
                                        <?php if (!empty($i_gallery)): ?>
                                            <div class="grid-item position-relative overflow-hidden transition cursor-pointer" data-bs-toggle="modal"
                                                data-bs-target="#inspirationModal"
                                                data-index="<?php echo $key; ?>"
                                                data-category="<?php echo $category_tag; ?>">
                                                <div class="position-absolute more-like-sec">
                                                    <button class="btn border-0 d-flex bg-primary primary-btn ">
                                                        More like this
                                                    </button>
                                                </div>
                                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>" class="w-100 object-cover transition">
                                                <?php if (!empty($category_tag)): ?>
                                                    <div class="position-absolute alt-font rounded-pill text-xs text-secondary bg-primary category-tag transition"><?php echo $category_tag; ?></div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    <?php while (have_rows('what_we_do')): the_row();
        $title = get_sub_field('title');
        $inspiration_gallery = get_sub_field('inspiration_gallery');
    ?>
        <div class="modal inspiration-modal fade" id="inspirationModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-secondary overflow-hidden">
                    <div class="modal-body p-0 bg-seconday position-relative overflow-auto">
                        <!-- <div class="container"> -->

                        <div id="inspirationCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <?php foreach ($inspiration_gallery as $index => $m_gallery):
                                    $m_image = $m_gallery['image'];
                                    $category_tag = $m_gallery['category_tag'];
                                    $image_content = $m_gallery['image_content'];
                                    $product_attach = $m_gallery['product_attach'];
                                ?>
                                    <div class="carousel-item d-flex flex-column justify-content-between h-100 <?php echo $index === 0 ? 'active' : ''; ?>" id="<?php echo $index; ?>" data-tag="<?php echo $category_tag; ?>">
                                        <div class="carousel-sec justify-content-center">
                                            <div class="carousel-image border--radius ovrflow-hidden">
                                                <img src="<?php echo $m_image['url']; ?>" alt="<?php echo $m_image['title']; ?>" class="h-100 w-100 object-cover">
                                            </div>
                                        </div>
                                        <div class="carousel--footer bg-white">
                                            <div class="container">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <?php if (!empty($category_tag)): ?>
                                                        <div class="text-primary font-body text-uppercase tag-title fw-medium"><?php echo $category_tag; ?></div>
                                                    <?php endif; ?>
                                                    <div class="d-flex  align-items-center">
                                                        <?php if (!empty($image_content)): ?>
                                                            <div class="text-707070 alt-body text-base image_content me-4"><?php echo $image_content; ?></div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($product_attach)): ?>
                                                            <a href="<?php echo get_the_permalink($product_attach->ID); ?>" class="btn border-0 d-flex bg-primary px-4">
                                                                View product
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#inspirationCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#inspirationCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>