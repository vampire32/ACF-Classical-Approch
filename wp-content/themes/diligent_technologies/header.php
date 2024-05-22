<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diligent_technologies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <style>
        <?php include 'assets/css/theme_options.php'; ?>
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header  id="masthead" class="site-header" >
        <nav id="site-navigation" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="https://ankragency.com/" class="custom-logo-link" rel="home" aria-current="page"><img style="width: 140px;height: 140px" src="https://ankragency.com/wp-content/uploads/2024/02/Ankr-Final-White.png" class="custom-logo" alt="ANKR Agency | Digital Marketing Agency in Dallas Fort Worth" decoding="async" fetchpriority="high" srcset="https://ankragency.com/wp-content/uploads/2024/02/Ankr-Final-White.png 476w, https://ankragency.com/wp-content/uploads/2024/02/Ankr-Final-White-289x300.png 289w" sizes="(max-width: 476px) 100vw, 476px" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'walker'         =>new WP_Menu_Navwalker()
                )
            );
            ?>
                <div class="header__cta">
                <a href="#contactUs-section" class="header__cta--btn btn">SCHEDULE STRATEGY SESSION</a>
            </div>
            </div>
        </nav>

<!--
             <nav id="site-navigation" class="navbar__wrap d-lg-block d-none">-->
<!--                 -->
<!--                </nav>-->



    </header><!-- #masthead -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
