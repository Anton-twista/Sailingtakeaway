<?php
/**
 * Template Name: About us
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
	<link rel="icon" href="http://example.com/favicon.png">
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

    <header class="about-us-header section-reset section-header">
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

	<main class="main ">

<section class="about-us section-sides section-reset col-sm-13">
	<h2 class="about-us-title section-title col-sm-13">Sailingtakeaway&nbsp;&mdash; A&nbsp;Family Company</h2>
	<div class="about-line col-sm-13"></div>
	<h3 class="about-title-list col-sm-13"> Why sail with boutique sailingtakeaway </h3>
	<ol class="about-is-list flex col-sm-13">
		<li class="about-is-list-item col-sm-13">Verified Yachts
			We&nbsp;offer only our reliable yachts, professionally maintained for your safety, comfort, and
			enjoyment</li>
		<li class="about-is-list-item col-sm-13">Flexibility with booking cancellation</li>
		<li class="about-is-list-item col-sm-13">Customized services
			Whether you are on&nbsp;land or&nbsp;offshore, You are in&nbsp;direct contact with the boat&rsquo;s
			owner</li>
		<li class="about-is-list-item col-sm-13">Knowledgeable, Professional and Friendly Captains</li>
		<li class="about-is-list-item col-sm-13">Affordable prices</li>
	</ol>
</section>


<section class="our-team section-sides section-reset col-3-about-section col-sm-13">
	<h2 class="our-team-title section-title">Our Team</h2>
	<div class="our-line yacht-line col-sm-13"></div>



	<ul class="our-team-list list-reset flex ">
		<li class="our-team-item yacht-item scale col-lg-12 col-md-12 col-sm-12">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/char-card-01.jpg" alt="" class="our-team-iteam-img">
			<p class="our-team-name yacht-descr ">Cumhur</p>
			<p class="team-item-name yacht-descr  ">IYT OFFSHORE SAILING SKIPPER YACHTMASTER, 499GT
				POWERBOAT
				SKIPPER, GMDSS GENERAL RADIO OPERATOR.</p>
			<p class="team-item-pos yacht-descr  ">Spoken language: Turkish, English</p>
		</li>
		<li class="our-team-item yacht-item scale col-lg-12 col-md-12 col-sm-12">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/char-card-02.jpg" alt="" class="our-team-iteam-img ">
			<p class="our-team-name yacht-descr ">Natalia</p>
			<p class="team-item-name yacht-descr  ">IYT OFFSHORE SAILING SKIPPER YACHTMASTER, 499GT
				POWERBOAT
				SKIPPER, GMDSS GENERAL RADIO OPERATOR.</p>
			<p class="team-item-pos yacht-descr ">Spoken language: Russian, English, Turkish</p>
		</li>
	</ul>



</section>



</main>

<?php get_footer();
