<?php
/**
 * Template Name: Prices
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

    <header class="prices-header  section-reset section-header">
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
        <section class="about-us section-sides col-sm-13">
            <h2 class="pricses-tittle section-title">Charter Price List</h2>
            <p class="price-line"></p>
            <p class="about-us-descr prices-about">
                Hereby you can find a&nbsp;complete all you need to&nbsp;know about
                &quot;How much does it&nbsp;cost to&nbsp;rent a&nbsp;boat
                in&nbsp;Fethiye
            </p>
        </section>
        <section class="prices-table section-sides col-sm-13">
            <div class="table-name">Beneteau Oceanis&nbsp;43 (IDILIJA)</div>
            <div class="table-wrap">
                <table role="table">
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">January-Febrary</th>
                            <th role="columnheader">March-April</th>
                            <th role="columnheader">May</th>
                            <th role="columnheader">June</th>
                            <th role="columnheader">July</th>
                            <th role="columnheader">August</th>
                            <th role="columnheader">September-October</th>
                            <th role="columnheader">November-December</th>
                        </tr>
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td role="cell">1900 &euro;</td>
                            <td role="cell">2200 &euro;</td>
                            <td role="cell">2500 &euro;</td>
                            <td role="cell">2750 &euro;</td>
                            <td role="cell">2900 &euro;</td>
                            <td role="cell">2900 &euro;</td>
                            <td role="cell">2750 &euro;</td>
                            <td role="cell">1900 &euro;</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </section>
        <section class="prices-table section-sides col-sm-13">
            <div class="table-name">Beneteau Oceanis 411- (2007) (Su&nbsp;Gibi)</div>
            <div class="table-wrap">
                <table role="table">
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">January-Febrary</th>
                            <th role="columnheader">March-April</th>
                            <th role="columnheader">May</th>
                            <th role="columnheader">June</th>
                            <th role="columnheader">July</th>
                            <th role="columnheader">August</th>
                            <th role="columnheader">September-October</th>
                            <th role="columnheader">November-December</th>
                        </tr>
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td role="cell">1500 &euro;</td>
                            <td role="cell">1600 &euro;</td>
                            <td role="cell">2000 &euro;</td>
                            <td role="cell">2500 &euro;</td>
                            <td role="cell">2600 &euro;</td>
                            <td role="cell">2700 &euro;</td>
                            <td role="cell">2500 &euro;</td>
                            <td role="cell">1500 &euro;</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </section>
        <section class="prices-table section-sides col-sm-13">
            <div class="table-name">BENETEAU CYCLADES - 43,4 Under sail</div>
            <div class="table-wrap ">
                <table role="table ">
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">January-Febrary</th>
                            <th role="columnheader">March-April</th>
                            <th role="columnheader">May</th>
                            <th role="columnheader">June</th>
                            <th role="columnheader">July</th>
                            <th role="columnheader">August</th>
                            <th role="columnheader">September-October</th>
                            <th role="columnheader">November-December</th>
                        </tr>
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td role="cell">1800 &euro;</td>
                            <td role="cell">2000 &euro;</td>
                            <td role="cell">2300 &euro;</td>
                            <td role="cell">2600 &euro;</td>
                            <td role="cell">2900 &euro;</td>
                            <td role="cell">2900 &euro;</td>
                            <td role="cell">2500 &euro;</td>
                            <td role="cell">1800 &euro;</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </section>
        <section class="prices-table section-sides col-sm-13">
            <div class="table-name">
                Required additional options(additional services, that must be paid, are not included in the rental
                price)
            </div>
            <div class="table-wrap">
                <table role="table">

                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">Transit log</th>
                            <th role="columnheader">Cleaning at the end of the charter</th>
                            <th role="columnheader">Security deposit</th>

                        </tr>
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td class="required" role="cell">100-150 &euro;</td>
                            <td class="required" role="cell">100-150 &euro;</td>
                            <td class="required" role="cell">1000-4500 &euro;</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </section>
        <section class="prices-table section-sides col-sm-13">
            <div class="table-name">
                Optional additional services
            </div>
            <div class="table-wrap">
                <table role="table">

                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">Turkish transit log</th>
                            <th role="columnheader">Captain</th>
                            <th role="columnheader">Hanging matator</th>
                            <th role="columnheader">Transitlog on the way back from Turkey</th>
                            <th role="columnheader">Chef / Hostess</th>
                            <th role="columnheader">Extra bedding</th>
                            <th role="columnheader">Internet</th>
                            <th role="columnheader">Extra set of towels</th>
                        </tr>
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td class="options" role="cell">100 &euro;</td>
                            <td class="options" role="cell">100 &euro; / day</td>
                            <td class="options" role="cell">75 &euro; / week</td>
                            <td class="options" role="cell">5 &euro; / day</td>
                            <td class="options" role="cell">150 &euro; / day</td>
                            <td class="options" role="cell">10 &euro; / week</td>
                            <td class="options" role="cell">50 &euro; / week</td>
                            <td class="options" role="cell">5 &euro; / week</td>

                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </section>
        <div class="row">
            <section class="faq section-reset flex">
                <h2 class="faq-title">FAQs</h2>
                <details class="faq-details col-2 col-md-12 col-sm-12">
                    <summary>What licenses do&nbsp;I need to&nbsp;hire a&nbsp;boat?</summary>
                    <p>Before you charter a&nbsp;boat, make sure your navigation licenses or&nbsp;permits are
                        valid
                        in&nbsp;your navigation region by&nbsp;checking with Sailingtakeaway. The only countries
                        that
                        do&nbsp;not require a&nbsp;license to&nbsp;rent a&nbsp;sailboat or&nbsp;catamaran are
                        France
                        and
                        Ireland. The base manager will want a&nbsp;nautical&nbsp;CV detailing your experience.
                        All
                        boats
                        with a&nbsp;motor power greater than 6&nbsp;horsepower, however, must have a&nbsp;valid
                        license.
                    </p>
                </details>
                <details class="faq-details col-2 col-md-12 col-sm-12">
                    <summary>How does a&nbsp;Skipper rental work? And what about a&nbsp;hostess?</summary>
                    <p>If&nbsp;you require the services of&nbsp;a&nbsp;skipper, please notify Sailingtakeaway
                        as&nbsp;soon
                        as&nbsp;possible. All of&nbsp;the skippers we&nbsp;provide have been certified and have
                        the
                        required
                        professional license. In&nbsp;general, they are fluent in&nbsp;English. If&nbsp;you have
                        any
                        particular requests for the skipper, please let&nbsp;us know as&nbsp;soon
                        as&nbsp;possible.<br>
                        <br>

                        While you remain in&nbsp;command on&nbsp;board, the skipper is&nbsp;in&nbsp;charge
                        of&nbsp;navigation and safety. Feel free to&nbsp;join him in&nbsp;the maneuvers;
                        he&rsquo;ll
                        be&nbsp;glad to&nbsp;teach you the basics of&nbsp;navigating.<br>
                        <br>


                        The skipper sleeps on&nbsp;board, either in&nbsp;a&nbsp;separate cabin
                        or&nbsp;in&nbsp;the
                        common
                        area, depending on&nbsp;the sleeping arrangements (saloon). Obviously, he, just like
                        rest
                        of&nbsp;your staff, must be&nbsp;included in&nbsp;your meals.<br>
                        <br>


                        Please note that the skipper is&nbsp;not responsible for cooking or&nbsp;dishwashing.
                        A&nbsp;hostess
                        (or&nbsp;a&nbsp;cook) can make meals, clean the saloon area, and your cabins upon
                        request,
                        and
                        generally keep the boat neat.<br>
                    </p>
                </details>
                <details class="faq-details col-2 col-md-12 col-sm-12">
                    <summary>What is&nbsp;the best way to&nbsp;arrange my&nbsp;transportation from the airport
                        to&nbsp;the
                        boat, as&nbsp;well as&nbsp;my&nbsp;provisioning on&nbsp;board?</summary>
                    <p>Following your reservation, the base manager will contact you to&nbsp;schedule your
                        cruise.
                        Remember
                        to&nbsp;let&nbsp;us know when you&rsquo;ll be&nbsp;arriving. To&nbsp;get to&nbsp;the
                        boat,
                        you
                        may
                        use a&nbsp;taxi or&nbsp;a&nbsp;minivan that is&nbsp;generally hired by&nbsp;the base
                        (payment
                        on&nbsp;site).<br>
                        <br>
                        In&nbsp;terms of&nbsp;provisioning, keep in&nbsp;mind that certain supermarkets provide
                        on-board
                        delivery. Some rental businesses may also provide you a&nbsp;comprehensive provisioning
                        list
                        so&nbsp;that you may have your food and supplies delivered to&nbsp;your boat when you
                        arrive.
                        You
                        can consult our base manager for further information.
                    </p>
                </details>
                <details class="faq-details col-2 col-md-12 col-sm-12">
                    <summary>
                        What are the hours for embarking and disembarking?</summary>
                    <p>The majority of sailboat and catamaran rentals in the Mediterranean are always from
                        Saturday
                        to
                        Saturday, for one reason: scheduling efficiency. <br>
                        <br>
                        Saturday afternoon is generally reserved for check-in. The base manager will frequently
                        request
                        that
                        you return to the port on Friday night the next week in order to exit on Saturday
                        morning.
                        The
                        technical and cleaning teams will then have to get the boat ready for the next round of
                        clients.
                        The
                        weekly charter/rental is cut in half to allow time for the base to intervene between
                        charters/rentals.
                    </p>
                </details>
                <details class="faq-details col-2 col-md-12 col-sm-12">
                    <summary>What about the cruise schedule?</summary>
                    <p>At Sailingtakeaway we can help you organize your itinerary! Together we can create the
                        best
                        route
                        for
                        your holidays as we have a long experience on the Aegean sea area, including great ports
                        to
                        visit,
                        nice restaurants and taverns you should not not miss etc!</p>
                </details>
            </section>
        </div>
    </main>

<?php get_footer();
