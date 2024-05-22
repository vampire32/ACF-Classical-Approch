<?php
class Custom_Contact_Form_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'custom_contact_form_widget', // Base ID
            __('Custom Contact Form', 'text_domain'), // Name
            array('description' => __('A custom contact form widget', 'text_domain'),) // Args
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Display the contact form
        ?>
        <section class="contact__us" id="contactUs-section" style="background-image: url('https://ankragency.com/wp-content/uploads/2023/09/contact-bg.jpg');">
            <div class="container">
                <div class="inner">
                    <h2 class="section__heading">
                        Want Better Online Results? <strong>Connect with Us.</strong>
                    </h2>
                    <div class="row contact__us--form--content m-0">
                        <div class="col-lg-4 single">
                            <div class="contact__us--text">
                                <div class="mail__image">
                                    <img src="https://ankragency.com/wp-content/uploads/2023/09/mail-icon.png" alt="Form Image">
                                </div>
                                <div class="description">
                                    <p>Ready to see <strong>real results</strong> from your digital efforts? Drop us a line. We've been helping businesses succeed online for years, and we can't wait to help yours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 single">
                            <div class="contact__us--form">
                                <h3>Contact Us</h3>
                                <div class="wpcf7 no-js" id="wpcf7-f177-p5-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="/#wpcf7-f177-p5-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                        <p>
                                    <span class="wpcf7-form-control-wrap" data-name="text-268">
                                        <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form__field" aria-required="true" aria-invalid="false" placeholder="Your Name" value="" type="text" name="cf-name" />
                                    </span><br />
                                            <span class="wpcf7-form-control-wrap" data-name="email-976">
                                        <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form__field" aria-required="true" aria-invalid="false" placeholder="Your E-mail" value="" type="email" name="cf-email" />
                                    </span><br />
                                            <span class="wpcf7-form-control-wrap" data-name="textarea-39">
                                        <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form__field" aria-required="true" aria-invalid="false" placeholder="Your Message" name="cf-message"></textarea>
                                    </span>
                                        </p>
                                        <div class="text-center">
                                            <p>
                                                <input class="wpcf7-form-control wpcf7-submit has-spinner btn" type="submit" name="cf-submitted" value="Send" />
                                            </p>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cf-submitted'])) {
            $name = sanitize_text_field($_POST['cf-name']);
            $email = sanitize_email($_POST['cf-email']);
            $message = sanitize_textarea_field($_POST['cf-message']);

            $to = get_option('admin_email');
            $subject = "Contact Form Message from $name";
            $headers = "From: $name <$email>";

            if (wp_mail($to, $subject, $message, $headers)) {
                echo '<p>' . __('Thank you for your message.', 'text_domain') . '</p>';
            } else {
                echo '<p>' . __('An unexpected error occurred.', 'text_domain') . '</p>';
            }
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Contact Us', 'text_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
}
