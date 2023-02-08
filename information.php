<?php
/**
 * Template Name: Information
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

    <header class="info-header  section-reset section-header">
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
        <h2 class="info-title section-title col-sm-12">Best direction for sailing</h2>
        <p class="info-title-line col-sm-11"></p>



        <section class="information  section-reset flex ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-01.jpg" alt="about-img" class="information-img img-resize col-sm-12-2">
            <div class="information-info flex col-sm-12">
                <h2 class="about-title"><a href="https://goo.gl/maps/txej4JLzkv7iqxa88"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt=""> Akvaryum Koyu</a></h2>
                <p class="line"></p>
                <p class="about-descr">Incredible water, clear beyond belief, great for a&nbsp;swim. Get there early
                    to&nbsp;enjoy relative peace and quiet. This is&nbsp;one of&nbsp;the most visited locations
                    in&nbsp;the Fethiye Bay. Afternoons are a&nbsp;mess, especially with day trippers not invested
                    in&nbsp;the peaceful exploration of&nbsp;this magnificent cove.</p>
            </div>
        </section>



        <section class="information  section-reset flex ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-02.jpg" alt="about-img" class="information-img img-resize col-sm-12-2">
            <div class="information-info flex col-sm-12">
                <h2 class="about-title"><a href="https://goo.gl/maps/SjdAwvDMQmPZiLCa6"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt="">Hamam Koyu</a></h2>
                <p class="line"></p>
                <p class="about-descr">Beautiful, bay where the Cleopatra bath ruins are located. It&nbsp;does tend
                    to&nbsp;get more windy in&nbsp;this bay. In&nbsp;hot weather the wind is&nbsp;really pleasant.
                    There
                    is&nbsp;a&nbsp;fantastic trail along the bay which is&nbsp;worth walking along. A&nbsp;great
                    place
                    to&nbsp;stop for lunch.</p>
                <h2 class="about-title"><a href="https://goo.gl/maps/QqxTGX2vaJQo14QV8"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt="">Binlik Koyu</a></h2>
                <p class="line"></p>
                <p class="about-descr">One of&nbsp;the most peaceful bays in&nbsp;Gocek. Interestingly Binlik has
                    no&nbsp;bees around in&nbsp;contrast to&nbsp;all the other bays.</p>
            </div>
        </section>


        <section class="information  section-reset flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-03.jpg" alt="about-img" class="information-img img-resize col-sm-12-2">
            <div class="information-info flex col-sm-12">
                <h2 class="about-title"><a href="https://goo.gl/maps/Y5cmQ5UtZTGU8km26"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt=""> Kille Koyu </a></h2>
                <p class="line"></p>
                <p class="about-descr">İncredible place, smooth sea, cristal clear and warm, no&nbsp;wind. Municipal
                    cafe, reasonable prices, different choice of&nbsp;food.</p>
            </div>
        </section>


        <section class="information  section-reset flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-04.jpg" alt="about-img" class="information-img img-resize col-sm-12-2">
            <div class="information-info flex col-sm-12">
                <h2 class="about-title"><a href="https://goo.gl/maps/XqyYaEaLaQzEdU6k6"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt="">Sarsala Koyu</a></h2>
                <p class="line"></p>
                <p class="about-descr">Stunning views of&nbsp;the peninsula, mountains and clear blue, calm water.
                    Well
                    worth the narrow mountain pass drive just for the amazing views. Amenities and deck chairs
                    available
                    for free. Small cafe also..</p>
            </div>
        </section>


        <section class="information  section-reset flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-05.jpg" alt="about-img" class="information-img img-resize col-sm-12-2">
            <div class="information-info flex col-sm-12">
                <h2 class="about-title"><a href="https://goo.gl/maps/BHY8Ftj49qNcuaLZ7"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt="">Binlik Koyu</a></h2>
                <p class="line"></p>
                <p class="about-descr">It&nbsp;is&nbsp;a&nbsp;very beautiful bay, even those who do&nbsp;not know
                    how
                    to&nbsp;swim can easily enter the entrance from the shore is&nbsp;not deep, the shore
                    is&nbsp;surrounded by&nbsp;trees, the shade and cool place.</p>
            </div>
        </section>


        <section class="information  section-reset flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info-06.jpg" alt="about-img" class="information-img img-resize col-sm-12-2">
            <div class="information-info flex col-sm-12">
                <h2 class="about-title"><a href="https://goo.gl/maps/g5Z3EWJQypiuxqKh8"><img class="contact-icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/geozone-icon.png" alt="">Akvaryum koyu
                        &amp;&nbsp;karacaoren adasi</a></h2>
                <p class="line"></p>
                <p class="about-descr">Brilliant place, Moor up&nbsp;on&nbsp;lazy lines and launch comes and gets
                    you
                    to&nbsp;eat in&nbsp;the fabulous restaurant.</p>
            </div>
        </section>









        <section class="gal section-reset">
            <p class="gallery-title section-title">Gallery</p>
            <div class="gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide1.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide15.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide20.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide26.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide5.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide10.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide16.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide21.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide27.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide6.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide11.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide17.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide22.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide28.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide7.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide12.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide18.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide23.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide29.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide8.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide13.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide19.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide24.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide3.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide9.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide14.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide2.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide25.JPG" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery-slide4.jpg" alt="">
            </div>
        </section>


        <section class="information  section-reset flex">

            <iframe class="col-sm-12"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3202.1746152974997!2d29.1006009!3d36.6221833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2c0d64e5e960593!2sSailingtakeaway!5e0!3m2!1sen!2sru!4v1673873700551!5m2!1sen!2sru"
                width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="about-info pic-size flex">
                <h2 class="about-title">Management office in&nbsp;Fethiye</h2>
                <p class="line about-item-info"></p>
                <ul class="about-info-list list-reset">
                    <li class="about-item-info"><a
                            href="https://www.google.com/maps/place/Sailingtakeaway/@36.6224693,29.100276,16z/data=!4m5!3m4!1s0x0:0xd2c0d64e5e960593!8m2!3d36.6227574!4d29.1013978?hl=en">Gouvia
                            Marina, Kerkira, 491 00, Pier &Beta;28-&Beta;32</a></li>
                    <li class="about-item-info"></li>
                    <li class="about-item-info"><a
                            href="mailto:Info@sailingtakeaway.com">email:Info@sailingtakeaway.com</a>
                    </li>
                    <li class="about-item-info"><a href="tel:+302661044244">tel:+90541692 02 92 Natalia Kolat (LANG: ENG
                            TR RUS)</a></li>
                    <li class="about-item-info"><a href="tel:+302661035295">tel:+90532 514 31 75 Cumhur Orhan (LANG: ENG
                            TR)</a></li>
                </ul>
            </div>
        </section>
    </main>

<?php get_footer();
