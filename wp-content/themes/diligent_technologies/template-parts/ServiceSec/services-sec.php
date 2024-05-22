<?php
// Fetch all 'service-sec' posts
$args = array(
    'post_type' => 'service-sec',
    'posts_per_page' => -1,
);
$services = new WP_Query($args);
?>

<section class="services" id="services-section">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>OUR SERVICES</h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                    <p style="color: black">Want a better return on your online investment? That’s where we come in. We help you get noticed on search engines, create posts that your audience loves, and build websites that make visitors want to stay. With our data tools, we make sure everything is working like it should</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services__list">
        <?php if ($services->have_posts()) : ?>
            <?php while ($services->have_posts()) : $services->the_post(); ?>
                <div class="service">
                    <div class="service__image">
                        <img width="150" height="71" src="<?php echo esc_url(get_field('services_list_image')); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
                    </div>
                    <div class="service__title">
                        <h3><?php echo esc_html(get_field('service_list_title')); ?></h3>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
