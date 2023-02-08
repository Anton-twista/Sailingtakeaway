<?php
/**
 * Template Name: Contacts
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

    <header class="contact-header  section-header">
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
        <section class="contact-main  flex">
            <div class="contact-info col-sm-13">
                <h2 class="contact-info-title">Our Contacts</h2>
                <p class="contact-info-descr">Contact &laquo;Sailingtakeaway&raquo;, rent your power yacht and sail
                    across the Aegean Sea.</p>

                <iframe class="contact-map col-sm-12-2"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6404.325469613073!2d29.100276!3d36.6224693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2c0d64e5e960593!2sSailingtakeaway!5e0!3m2!1sen!2sru!4v1673879547999!5m2!1sen!2sru"
                    width="800" height="540" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <ul class="contact-list list-reset">
                    <li class="contact-item"><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt=""><a
                            href="https://goo.gl/maps/ac7BnsrQYiLNRiAB6">Karagözler, Fevzi Çakmak Cd., 48300 Karagözler
                            District/Muğla, Türkiye</a>
                    </li>
                    <li class="contact-item"><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/email-icon.png" alt=""><a
                            href="mailto:Info@sailingtakeaway.com">Info@sailingtakeaway.com</a>
                    </li>
                    <li class="contact-item"><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.png" alt=""><a
                            href="tel:+302661044244">+90541 692 02 92 Natalia Kolat (LANG: ENG TR RUS)</a></li>
                    <li class="contact-item"><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.png" alt=""><a
                            href="tel:+302661035295">+90532 514 31 75 Cumhur Orhan (LANG: ENG TR) </a></li>
                </ul>
                <p class="let"></p>
                <div class="contact-icons"></div>
            </div>
        </section>
    </main>

<?php get_footer();
