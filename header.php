<?php
date_default_timezone_set('Europe/London');
$search_terms = htmlspecialchars($_GET["s"] ?? "");
$theme_dir = get_template_directory_uri();

?>
<!DOCTYPE html>
<!--
Copyright Chris Heppell & Newcastle Swim Team 2017-present.
Designed by Chris Heppell, chrisheppell.uk.
Get software to manage your swimming club at myswimmingclub.uk.
-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-title" content="Newcastle Swim Team">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!--<script>var shiftWindow = function() { scrollBy(0, -100) }; if (location.hash) shiftWindow(); window.addEventListener("hashchange", shiftWindow);</script>-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="icon" sizes="196x196" href="<?= $theme_dir ?>/img/touch-icon-196x196.png">
    <!-- For Chrome for Android: -->
    <link rel="icon" sizes="192x192" href="<?= $theme_dir ?>/img/touch-icon-192x192.png">
    <!-- For iPhone 6 Plus with @3× display: -->
    <link rel="apple-touch-icon-precomposed" sizes="180x180"
          href="<?= $theme_dir ?>/img/apple-touch-icon-180x180-precomposed.png">
    <!-- For iPad with @2× display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="<?= $theme_dir ?>/img/apple-touch-icon-152x152-precomposed.png">
    <!-- For iPad with @2× display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?= $theme_dir ?>/img/apple-touch-icon-144x144-precomposed.png">
    <!-- For iPhone with @2× display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="<?= $theme_dir ?>/img/apple-touch-icon-120x120-precomposed.png">
    <!-- For iPhone with @2× display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?= $theme_dir ?>/img/apple-touch-icon-114x114-precomposed.png">
    <!-- For the iPad mini and the first- and second-generation iPad (@1× display) on iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
          href="<?= $theme_dir ?>/img/apple-touch-icon-76x76-precomposed.png">
    <!-- For the iPad mini and the first- and second-generation iPad (@1× display) on iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?= $theme_dir ?>/img/apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?= $theme_dir ?>/img/apple-touch-icon-precomposed.png">
    <!-- 57×57px -->
    <!--    <link rel="mask-icon" href="--><?php //= $theme_dir ?><!--/img/apple/chesterIcon.svg" color="#bd0000">-->
    <meta name="application-name" content="Newcastle Swim Team"/>
    <meta name="msapplication-square70x70logo" content="small.jpg"/>
    <meta name="msapplication-square150x150logo" content="medium.jpg"/>
    <meta name="msapplication-wide310x150logo" content="wide.jpg"/>
    <meta name="msapplication-square310x310logo" content="large.jpg"/>
    <meta name="msapplication-TileColor" content="#bd0000"/>
    <?php wp_head(); ?>
    <style>
        .focus-highlight a:focus, .blog-sidebar a:focus, .event a:focus, .hentry a:focus, .blog-main a:focus {
            background: #ffbf47;
            outline: 3px solid #ffbf47;
            outline-offset: 0;
        }

        footer .focus-highlight a:focus {
            color: #212529;
        }

        <?php if (date("m") == "12") { ?>
        .bg-primary-darker {
            /*background:#005fbd;*/
            background-image: url("<?php echo htmlspecialchars($theme_dir . "/img/christmas.png") ?>");
            background-size: 50% auto;
            padding: 1rem;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, .5);
        }

        <?php } ?>
    </style>

</head>
<?php echo '<body class="' . join(' ', get_body_class()) . '">' . PHP_EOL; ?>

<div class="sr-only sr-only-focusable">
    <a href="#maincontent">Skip to main content</a>
</div>

<noscript>
    <div class="bg-dark text-white box-shadow py-2 d-print-none">
        <div class="container">
            <p class="mb-0">
                <strong>
                    JavaScript is disabled or not supported
                </strong>
            </p>
            <p>
                It looks like you've got JavaScript disabled or your browser does not
                support it. JavaScript is essential for our website to properly so we
                recommend you enable it or upgrade to a browser which supports it as
                soon as possible. <strong><a href="http://browsehappy.com/" class="text-white"
                                             target="_blank">Upgrade your browser today <i class="fa
      	    fa-external-link" aria-hidden="true"></i></a></strong>.
            </p>
            <p class="mb-0">
                If JavaScript is not supported by your browser, Newcastle Swim Team
                recommends you install <strong><a class="text-white"
                                                  href="https://www.firefox.com">Firefox by Mozilla</a></strong>.
            </p>
        </div>
    </div>
</noscript>

<!--<div class="bg-dark text-white box-shadow py-2 d-print-none">
    <div class="container">
      <p class="mb-0">
        <strong>
          The Chester-le-Street Junior Meet Returns!
        </strong>
      </p>
      <p class="mb-0">
          Friday night distance events for ages 12 to 15 and a full weekend for ages 9 to 14. <strong><a class="text-white"
        href="https://www.chesterlestreetasc.co.uk/competitions/galas/chester-le-street-junior-meet-2022/">Find out more</a></strong>.
      </p>
    </div>
  </div>-->

<div class="d-print-none festive">

    <!--    <div class="text-white py-2 top-bar bg-primary-dark hide-a-underline" style="font-size:0.875rem;">-->
    <!--        <div class="container d-flex">-->
    <!--            <div class="mr-auto">-->
    <!--            <span class="mr-2">-->
    <!--              <a href="https://www.twitter.com/CLSASC" target="_blank" class="text-white" title="Twitter">-->
    <!--                <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>-->
    <!--                <span class="sr-only">Newcastle Swim Team on Twitter</span>-->
    <!--              </a>-->
    <!--            </span>-->
    <!---->
    <!--                <span class="mr-2">-->
    <!--              <a href="https://www.facebook.com/CLSASC" target="_blank" class="text-white" title="Facebook">-->
    <!--                <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>-->
    <!--                <span class="sr-only">Newcastle Swim Team on Facebook</span>-->
    <!--              </a>-->
    <!--            </span>-->
    <!--            </div>-->
    <!---->
    <!--            <span class="d-flex" id="top-bar-visible">-->
    <!--          </span>-->
    <!---->
    <!--            <div class="ml-2 top-bar d-lg-none">-->
    <!--            <span>-->
    <!--              <a data-toggle="collapse" href="#mobSearch" role="button" aria-expanded="false" aria-controls="mobSearch"-->
    <!--                 class="text-white" title="Search the site">-->
    <!--                Search-->
    <!--              </a>-->
    <!--            </span>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="ml-2 top-bar">-->
    <!--            <span>-->
    <!--              <a id="top-bar-more-link" href="#top-bar-more" data-toggle="collapse" role="button" aria-expanded="false"-->
    <!--                 aria-controls="top-bar-more" class="text-white d-none" title="More Links">-->
    <!--                More <i class="fa fa-caret-down" aria-hidden="true"></i>-->
    <!--              </a>-->
    <!--            </span>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="collapse " id="top-bar-more">
        <div class="bg-primary-dark py-2 border-top border-white hide-a-underline" style="font-size:0.875rem;">
            <div class="container">
                <div id="top-bar-more-content">
                </div>
            </div>
        </div>
    </div>

    <div class="collapse <? if ($search_terms != "") {
        echo "show";
    } ?>" id="mobSearch">
        <div class="text-white py-3 d-lg-none bg-primary-darker">
            <form class="container" action="<?= esc_url(home_url('/')) ?>" id="head-search" method="get">
                <label for="s" class="sr-only">Search</label>
                <div class="input-group">
                    <input class="form-control bg-primary text-white border-primary" id="s" name="s"
                           placeholder="Search the site" type="search" <?php if ($search_terms !== '') {
                        echo ' value="' . $search_terms . '"';
                    } ?>>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                            <span class="sr-only">
                    Search
                  </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="py-3 d-none d-lg-flex">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col">
                    <a class="" href="<?= esc_url(home_url('/')) ?>" title="Website Homepage">
                        <img src="<?= htmlspecialchars($theme_dir . "/img/logo.png") ?>" alt="Newcastle Swim Team logo"
                             class="logo"/>
                        <img src="<?= htmlspecialchars($theme_dir . "/img/logo-dark.png") ?>"
                             alt="Newcastle Swim Team logo"
                             class="logo-dark"/>
                    </a>
                </div>
                <div class="col-4">
                    <!--<p class="lead mb-0 ml-auto text-right"><? bloginfo('description') ?></p>-->
                    <form action="<?= esc_url(home_url('/')) ?>" id="head-search" method="get">
                        <label for="s" class="sr-only">Search</label>
                        <div class="input-group">
                            <input class="form-control bg-primary text-white border-primary" id="s" name="s"
                                   placeholder="Search the site" type="search" <?php if ($search_terms !== '') {
                                echo ' value="' . $search_terms . '"';
                            } ?>>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                                <span class="sr-only">
                        Search
                      </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark justify-content-between mb-3 px-0">
                <a class="navbar-brand d-lg-none" href="<?php echo home_url(); ?>">
                    <img src="<?= $theme_dir ?>/img/logo-dark.png" class="mr-2" width="20"
                         height="20"> <?php bloginfo('name'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#chesterNavbar"
                        aria-controls="chesterNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <?php
                wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'chesterNavbar',
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker())
                );
                ?>
            </nav>
        </div>
    </div>

    <!-- <?php
    $covidVideos = [
        'https://myswimmingclub.uk/assets/covid/act-like-youve-got-it.mov',
        'https://myswimmingclub.uk/assets/covid/anyone-can-get-it.mov',
        'https://myswimmingclub.uk/assets/covid/anyone-can-spread-it.mov'
    ];

    $covidMobileVideos = [
        'https://myswimmingclub.uk/assets/covid/act-like-youve-got-it-mobile.mov',
        'https://myswimmingclub.uk/assets/covid/anyone-can-get-it-mobile.mov',
        'https://myswimmingclub.uk/assets/covid/anyone-can-spread-it-mobile.mov'
    ];
    ?>

      <div class="mt-n3 mb-3 text-center" style="background: #000000;">
        <div class="container">
          <video class="d-none d-sm-block mx-auto my-0 p-0" style="width: 100%" autoplay loop muted playsinline>
            <source src="<?= htmlspecialchars($covidVideos[rand(0, sizeof($covidVideos) - 1)]) ?>" type="video/mp4" />
            A COVID-19 video message appears here but your browser does not support the video element.
          </video>
          <video class="d-block d-sm-none mx-auto my-0 p-0" style="width: 100%" autoplay loop muted playsinline>
            <source src="<?= htmlspecialchars($covidMobileVideos[rand(0, sizeof($covidMobileVideos) - 1)]) ?>" type="video/mp4" />
            A COVID-19 video message appears here but your browser does not support the video element.
          </video>
        </div>
      </div> -->

</div>

<div id="maincontent"></div>
