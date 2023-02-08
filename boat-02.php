<?php
/**
 * Template Name: Boat-02
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

    <header class="boat-02-header  section-reset section-header">
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
            <h2 class="boat-01-descr section-title">Beneteau 411 Boat Review</h2>
            <p class="boat-01-descr">The 411 was designed for easy cruising and the test boat was certainly
                that, with roller furling on&nbsp;the headsail and in-mast furling
                on&nbsp;the main and electric winches. Standard deck gear is&nbsp;two
                Lewmar 40&nbsp;halyard winches on&nbsp;the cabin top and two Lewmar
                48&nbsp;self-tailing genoa winches on&nbsp;the cockpit coamings. The
                electric winches on&nbsp;the test boat were a&nbsp;factory option and
                a&nbsp;good one to&nbsp;look for if&nbsp;you&rsquo;re after
                a&nbsp;411.</p>
            <p class="boat-01-descr">The mainsheet traveller is&nbsp;on&nbsp;the coach roof, which clears
                the cockpit, and there are six clutches for the control lines. The
                mainsheet feeds back to&nbsp;the portside coach roof winch.
                A&nbsp;solid boom vang is&nbsp;also standard fare.</p>
        </section>
        <div class="row">
            <section class="about global-main section-reset flex col-3-yacht-section">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/beneteau-oceanis-411.jpg" alt="about-img" class="about-img col-xxl-6 col-sm-12">
                <div class="about-info flex  col-sm-13">
                    <h2 class="about-title">Beneteau Oceanis 411 (Su&nbsp;Gibi) 2005</h2>
                    <p class="line  col-sm-13"></p>
                    <h3 class="about-title-parag"></h3>

                    <p class="about-descr  col-sm-13">Length overall: 12,5&nbsp;| Draught: 1.9m</p>
                    <p class="about-descr  col-sm-13">Four berths in&nbsp;2&nbsp;cabins and a&nbsp;cozy saloon</p>
                    <p class="about-descr  col-sm-13">Sea toilet compartment and shower</p>
                    <p class="about-descr  col-sm-13">Volvo 29hp engine</p>

                    <p class="about-descr"></p>
                </div>
            </section>

            <section class="gal section-reset">
                <p class="gallery-title section-title">Gallery</p>
                <div class="gallery">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide1.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide2.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide3.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide4.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide5.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide6.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide7.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oceanis411/oceanis411-slide8.jpg" alt="">
                    

                </div>
            </section>
        </div>
    </main>

<?php get_footer();
