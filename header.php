<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sailingtakeaway</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <?php wp_head(); ?>


</head>

<body class="container">
    <header class="header background-tint section-reset">
        <div class="row row-anti">
            <section class="header-main">
                <div class="nav flex col-sm-15">
                    <div class="header-logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logoboats.png" alt="heaeder-logo" class="header-logo-img col-sm-14" />
                    </div>
                    <div class="header-menu flex">
                        <ul class="header-menu-list list-reset flex col-sm-14">
                            <li class="header-menu-item col-sm-header-nav-link"><a href="<?php echo get_home_url(); ?>">HOME</a></li>
                            <li class="header-menu-item col-sm-header-nav-link">
                                <a href="/our-fleet/">Boats</a>
                            </li>
                            <li class="header-menu-item col-sm-header-nav-link">
                                <a href="/about-us/">ABOUT&nbsp;US</a>
                            </li>
                            <li class="header-menu-item col-sm-header-nav-link">
                                <a href="/prices/">PRICES</a>
                            </li>
                            <li class="header-menu-item col-sm-header-nav-link">
                                <a href="/information/">INFORMATION</a>
                            </li>
                            <li class="header-menu-item col-sm-header-nav-link">
                                <a href="/contacts/">CONTACT</a>
                            </li>
                        </ul>
                        <div class="header-icon-box flex flex col-xxl-12 col-lg-12 col-md-12 col-sm-14">
                            <a href="https://www.google.com/maps/place/Sailingtakeaway/@36.637596,29.1171786,13.13z/data=!4m5!3m4!1s0x14c041a45d2477c7:0xd2c0d64e5e960593!8m2!3d36.6227574!4d29.1013978?hl=en"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/google.png" alt="icon" class="icon-box-item" /></a>
                            <a href="https://www.facebook.com/profile.php?id=100089775544213&mibextid=ZbWKwL"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/facebook.png" alt="icon" class="icon-box-item" /></a>
                            <a href="https://www.instagram.com/sailingtakeaway/?igshid=OGQ2MjdiOTE%3D"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/insta.png" alt="icon" class="icon-box-item" /></a>
                            <a href="https://vk.com/club218340874"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/vk.png" alt="icon" class="icon-box-item" /></a>
                            <a href="https://www.tripadvisor.com/Profile/sailingtakeaway"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/trip.png" alt="icon" class="icon-box-item" /></a>
                        </div>
                    </div>
                </div>

                <div class="header-body flex col-lg-14 col-md-14 col-sm-header-title col-xxs-header-title">
                    <h1 class="header-title col-sm-header-title col-xxs-header-title">A&nbsp;family yacht charter company</h1>
                    <p class="header-descr ">
                        Rent Fully Equipped and well maintained Family-owned yachts and
                        sail the Aegean sea
                    </p>

                    
                        
                           <a class="header-btn btn-reset btn-style col-lg-14 col-md-14 col-sm-14" href="/our-fleet/">VIEW ALL YACHTS &rarr;</a>
                </div>
                
            </section>
        </div>
    </header>