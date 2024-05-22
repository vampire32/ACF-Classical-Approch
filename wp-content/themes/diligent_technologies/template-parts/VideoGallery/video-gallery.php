<?php
$args = array(
    'post_type' => 'video-gallery',
    'posts_per_page' => -1,
);
$video_galleries = new WP_Query($args);
?>

<section class="video__gallery">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>DISCOVER OUR PROJECTS</h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                    <p>At ANKR Agency, we love what we do, and it shows in our projects. Dive into a curated selection of our creative and impactful work, offering insights into the projects that have brought brands to life. Whether you’re a potential client seeking inspiration or a future team member eager to join our journey, this section provides a window into our passion for videography, web development, social media content marketing, and search advertising.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper mySwiper video__gallery--slider">
        <div class="swiper-wrapper">
            <?php if ($video_galleries->have_posts()) : ?>
                <?php while ($video_galleries->have_posts()) : $video_galleries->the_post(); ?>
                    <div class="swiper-slide slide">
                        <div class="slide__thumbnail">
                            <a href="">
                                <iframe loading="lazy" width="560" height="315" src="<?php echo esc_url(get_field('video_slider')); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </a>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class="swiper__nav">
            <div class="swiper-pagination"></div>
            <div class="nav__btn swiper-button-prev"></div>
            <div class="nav__btn swiper-button-next"></div>
        </div>
    </div>
</section>
