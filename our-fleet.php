<?php
/**
 * Template Name: Our fleet
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
	<title>Yacht</title>
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

    <header class="our-fleet-header section-reset section-header">
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
        <div class="row">
            <section class="yacht global-main section-reset col-3-yacht-section ">
                <h2 class="yacht-title section-title">Our Yachts</h2>
                <p class="yacht-line"></p>
                <p class="yacht-descr">Charter your power yacht or&nbsp;now and sail across the Aegean sea!
                </p>
                <ul class="yacht-card-list list-reset flex ">
					
                    <li class="yacht-item scale col-3-yacht col-lg-12 col-md-12 col-sm-12">
                        <a href="/boat-1/">
                            <img class="yacht-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/beneteau-oceanis-1.jpg" alt="yacht-item-01.JPG"></a>
                        <article class="yacht-item-box">
                            <h3 class="yacht-item-name">Beneteau oceanis 43 (IDILLIA)</h3>
                            <p class="yacht-item-cabine"> Cabins: 4</p>
                            <p class="yacht-item-people">People: 10</p>
                            <p class="yacht-item-wc">WC/Shower: 2</p>
                           <a href="/boat-1/" class="yacht-item-btn btn-reset btn-style">
                                    Discover &rarr;
                                </a>
                        </article>
                    </li>
					
                    <li class="yacht-item scale col-3-yacht col-lg-12 col-md-12 col-sm-12">
                        <a href="/boat-2/">
                            <img class="yacht-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/beneteau-oceanis-411.jpg" alt="yacht-item-02.JPG"></a>
                        <article class="yacht-item-box">
                            <h3 class="yacht-item-name">Beneteau Oceanis 411-(2007) (Su Gibi)</h3>
                            <p class="yacht-item-cabine">Cabins: 2</p>
                            <p class="yacht-item-people">People: 4</p>
                            <p class="yacht-item-wc">WC/Shower: 1</p>
                            <a href="/boat-2/" class="yacht-item-btn btn-reset btn-style">
                                    Discover &rarr;
                                </a>
                        </article>
                    </li>
                    <li class="yacht-item scale col-3-yacht col-lg-12 col-md-12 col-sm-12">
                        <a href="/boat-3/">
                            <img class="yacht-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/yacht-item-02.jpg" alt="yacht-item-03.JPG"></a>
                        <article class="yacht-item-box">
                            <h3 class="yacht-item-name">Cyclades - 43,4 (Lion)</h3>
                            <p class="yacht-item-cabine"> Cabins: 4</p>
                            <p class="yacht-item-people">People: 8</p>
                            <p class="yacht-item-wc">WC/Shower: 2</p>
                           <a href="/boat-3/" class="yacht-item-btn btn-reset btn-style">
                                    Discover &rarr;
                                </a>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </main><!-- #main -->
<?php get_footer();
