<?php /* Template Name: HomePage */ ?>

<?php

    get_header();
?>

<?php echo get_template_part('template-parts/common/hero-sec' , 'page') ?>
<?php echo get_template_part('template-parts/AboutSec/about-sec' , 'page') ?>
<?php echo get_template_part('template-parts/ServiceSec/services-sec' , 'page') ?>
<?php echo get_template_part('template-parts/VideoGallery/video-gallery' , 'page') ?>
<?php echo get_template_part('template-parts/testimonialSec/testimonial-sec' , 'page') ?>
<?php echo get_template_part('template-parts/ourTeam/team-sec' , 'page') ?>
<?php //echo get_template_part('template-parts/contactform/contact-hero' , 'page') ?>

<?php
get_sidebar();
get_footer();