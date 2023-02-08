<?php
/**
 * Template Name: Boat-03
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sailingtakeaway
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sailingtakeaway</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
     'Skip to content',
     'sailingtakeaway'
 ); ?></a>

    <header class="boat-03-header  section-reset section-header">
        <div class="nav flex col-sm-15">
                    <div class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoboats.png" alt="heaeder-logo" class="header-logo-img col-sm-14">
                    </div>
                    <div class="header-menu flex ">
                        <ul class="header-menu-list list-reset flex  col-sm-14">
                            <li class="header-menu-item"><a href="<?php echo get_home_url(); ?>">HOME</a>
                            </li>
                            <li class="header-menu-item"><a href="/our-fleet/">Boats</a></li>
                            <li class="header-menu-item"><a href="/about-us/">ABOUT&nbsp;US</a></li>
                            <li class="header-menu-item"><a href="/prices/">PRICES</a>
                            </li>
                            <li class="header-menu-item"><a href="/information/">INFORMATION</a></li>
                            <li class="header-menu-item"><a href="/contacts/">CONTACT</a></li>
                        </ul>
                        <div class="header-icon-box flex flex col-xxl-12 col-lg-12 col-md-12 col-sm-14">
                            <a
                                href="https://www.google.com/maps/place/Sailingtakeaway/@36.637596,29.1171786,13.13z/data=!4m5!3m4!1s0x14c041a45d2477c7:0xd2c0d64e5e960593!8m2!3d36.6227574!4d29.1013978?hl=en"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/google.png" alt="icon" class="icon-box-item"></a>
                            <a href="https://www.facebook.com/profile.php?id=100089775544213&mibextid=ZbWKwL"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.png" alt="icon" class="icon-box-item"></a>
                            <a href="https://www.instagram.com/sailingtakeaway/?igshid=OGQ2MjdiOTE%3D"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/insta.png" alt="icon" class="icon-box-item"></a>
                            <a href="https://vk.com/club218340874"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vk.png" alt="icon"
                                    class="icon-box-item"></a>
                            <a href="https://www.tripadvisor.com/Profile/sailingtakeaway"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/trip.png"
                                    alt="icon" class="icon-box-item"></a>
                        </div>
                    </div>

                </div>
    </header>

    <main class="main">
        <section class="section-boat-01 section-reset col-3-yacht-section">
            <h2 class="boat-01-descr section-title">BENETEAU CYCLADES - 43,4 Under sail 2008</h2>
            <p class="boat-01-descr">The Cyclades&nbsp;43.4 has been built with the solidity, reliability,
                and speed that characterizes charter yachts. The sizeable main beam
                offers a&nbsp;cozy and immense interior. As&nbsp;you would expect from
                Beneteau, she is&nbsp;high-performing and seaworthy. The
                Cyclades&nbsp;43.4&nbsp;is a&nbsp;boat that will perfectly suit both
                an&nbsp;experienced and beginner crew due to&nbsp;its high
                maneuverability.</p>

        </section>
        <div class="row">
            <section class="about global-main section-reset flex col-3-yacht-section">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yacht-item-02.jpg" alt="about-img" class="about-img col-xxl-6 col-sm-12">
                <div class="about-info flex col-sm-13">
                    <h2 class="about-title col-sm-13">Cyclades&nbsp;&mdash; 43,4 (Lion) 2008</h2>
                    <p class="line col-sm-13"></p>
                    <p class="about-descr col-sm-13">Length overall 13,26m Draught&nbsp;1,90m</p>
                    <p class="about-descr col-sm-13">Eight berths in&nbsp;4&nbsp;cabins and a&nbsp;saloon</p>
                    <p class="about-descr col-sm-13">Sea toilet compartment and shower&nbsp;x2</p>
                    <p class="about-descr col-sm-13">Yanmar 54&nbsp;BHP engine</p>
                </div>
            </section>

            <section class="gal section-reset">
                <p class="gallery-title section-title">Gallery</p>
                <div class="gallery">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide1.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide2.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide3.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide4.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide5.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide6.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide7.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide8.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide9.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide10.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide11.JPG" alt="cyclades-slide.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyclades43.4/cyclades-slide12.JPG" alt="cyclades-slide.jpg">

                </div>
            </section>
        </div>
    </main>

<?php get_footer();
