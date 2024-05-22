<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title=get_field('title');
$subtitle=get_field('subtitle');
$description=get_field('description');
$buuton_link=get_field('button_link');
$button_color=get_field('button_color');
$background_image=get_field('background_image');

?>
<div class="container-fluid hero" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $background_image?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-8" >
                <h1 style="color: #ffffff; font-size: 36pt">
                    <?php echo $title ?>
                </h1>
                <p style="font-size: 26pt; color: #ffffff"><?php echo $description?></p>
                <a href="<?php echo $buuton_link ?>" class="header__cta--btn btn">BEGIN TODAY</a>
            </div>

        </div>
    </div>

</div>
