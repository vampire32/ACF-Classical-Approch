<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$about_title=get_field('about_title');
$about_description=get_field('about_description');
$about_banner_title=get_field('banner_titile');
$about_banner_bg=get_field('bg_image');
?>

<section class="about__note" id="about_us_section">
    <!-- Start a new section with a CSS class 'about__note' -->
    <div class="container">
        <!-- Create a container div -->
        <div class="inner">
            <!-- Create an inner div -->
            <div class="sec__head">
                <!-- Create a section header div -->
                <div class="sec__head--title">
                    <!-- Create a div for the section title -->
                    <h2>
                        <?php echo $about_title?>
                    </h2>
                    <!-- Output the 'about_note_title' within an h2 element -->
                    <span class="sec__head--title-arc"></span>
                    <!-- Create a decorative span element -->
                </div>
                <div class="sec__head--headline">
                    <!-- Create a div for the section headline -->
                    <?php echo $about_description?>
                    <!-- Output the 'about_note_headline' -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about__banner">
    <!-- Start a new section with a CSS class 'about__banner' -->
    <div class="about__banner--bg" style="background-image: url(' <?php echo $about_banner_bg?>')">
        <!-- Create a div for the background image with inline CSS -->

        <div class="container">
            <!-- Create a container div -->
            <div class="inner">
                <!-- Create an inner div -->
                <h2 class="text-center" style="font-size: 36pt; font-weight: bold"> <?php echo $about_banner_title?></h2>
                <!-- Output the 'about_banner_title' within an h2 element -->
            </div>
        </div>
    </div>
</section>