<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diligent_technologies
 */

 //get_template_part( 'template-parts/content', 'banner_cta' );
 
 wp_footer(); ?>

<footer class="footer" >
    <div class="container">
        <div class="inner">
            <div class="footer__top">
                <div class="footer__links">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'secondary',
                            'walker'         =>new WP_Menu_Navwalker()
                        )
                    );
                    ?>
                </div>
                <div class="footer__social">
                    <a href="" class="footer__site--logo">
                        <img src="https://ankragency.com/wp-content/themes/urban_insight/assets/images/logo-white.png" alt="">
                    </a>
                    <h6>Follow us</h6>
                    <div class="footer__social--links">
                        <a href="https://www.facebook.com/ankragency/" class="fa-brands fa-square-facebook"></a>
                        <a href="https://www.youtube.com/channel/UCWIU4WpYkcc1Sd3J-SLOi-Q" class="fa-brands fa-youtube"></a>
                        <a href="https://twitter.com/ankragency" class="fa-brands fa-twitter"></a>
                        <a href="https://www.instagram.com/ankragency/?hl=en" class="fa-brands fa-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="copyright__text">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
