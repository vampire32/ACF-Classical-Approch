<?php

$testimonial_title=get_field('testimonial_title');
$testimonial_slider=get_field('testimonial_slider');

?>

<section class="testimonials">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <!-- Display the 'testimonial_title' value within an <h2> element -->
                    <h2><?php echo $testimonial_title ?></h2>
                    <!-- Create a decorative arc element -->
                    <span class="sec__head--title-arc"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper mySwiper2 testimonials__slider">
        <div class="swiper-wrapper">
            <?php foreach ($testimonial_slider as $item) : ?>

                <div class="swiper-slide slide">
                    <div class="testimonial__card">
                        <div class="testimonial__card--image">
                            <img width="150" height="150" src="<?php echo $item['testimonal_image'] ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Derek_Walker_Testimonial" decoding="async" loading="lazy" srcset="<?php echo $item['testimonal_image'] ?> 150w, <?php echo $item['testimonal_image'] ?>160w" sizes="(max-width: 150px) 100vw, 150px" />
                        </div>
                        <div class="testimonial__card--rating">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="testimonial__card--text">
                            <p style="font-size: 13pt"><?php echo $item['testimonial_text'] ?></p>
                        </div>
                        <h5 class="testimonial__card--title"><?php echo $item['testimonial_name'] ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>

        <div class="swiper__nav">
            <div class="nav__btn swiper-button-prev"></div>
            <div class="nav__btn swiper-button-next"></div>
        </div>
    </div>

</section>