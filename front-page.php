<?php

// Code to automatically switch to/from gala home
$td = current_time("Y-m-d", $gmt = 0);
if ("2022-10-21" == $td || "2022-10-22" == $td || "2022-10-23" == $td) {
    include "page-galahome.php";
} else {

    get_header(); ?>

    <!--<div class="homepage-masthead homepage-alert bg-primary d-print-none">
    <div class="container">
      <p class="h3">Chester-le-Street Junior Meet 2018</p>
      <p>Join us for our Junior Meet from 26 to 28 October, including 1500m, 800m, skins and more.</p>
      <a class="btn btn-dark" target="_blank" style="text-decoration:none" href="https://www.chesterlestreetasc.co.uk/competitions/galas/chester-le-street-junior-meet-2018/">
        Find out more
      </a>
    </div>
  </div>-->

    <?php
    $fp_img;
    $fp_image_name = 'Breaststroke.jpg';
    $fp_image_description = "Boy swimming breaststroke";
    if (!isset($_COOKIE['CLSASC_AutoLogin']) && !isset($_COOKIE['CLSASC_UserInformation'])) {
        $fp_img = "front-page-image";
        $image_picker = rand(1, 9);
        if ($image_picker == 1) {
            $fp_image_name = 'DivingIn.jpg';
            $fp_image_description = "Swimmers diving in for a race";
        } else if ($image_picker == 2) {
            $fp_image_name = 'Back.jpg';
            $fp_image_description = "Swimmers swimming in a backstroke race";
        } else if ($image_picker == 3) {
            $fp_image_name = 'Back2.jpg';
            $fp_image_description = "Girl swimming backstroke";
        } else if ($image_picker == 4) {
            $fp_image_name = 'Breaststroke.jpg';
            $fp_image_description = "Boy swimming breaststroke";
        } else if ($image_picker == 5) {
            $fp_image_name = 'Butterfly.jpg';
            $fp_image_description = "Boy swimming butterfly";
        } else if ($image_picker == 6) {
            $fp_image_name = 'Breaststroke2.jpg';
            $fp_image_description = "Girl swimming breaststroke";
        } else if ($image_picker == 7) {
            $fp_image_name = 'Butterfly2.jpg';
            $fp_image_description = "Girl swimming butterfly";
        } else if ($image_picker == 8) {
            $fp_image_name = 'Breaststroke3.jpg';
            $fp_image_description = "Girl swimming breaststroke";
        } else if ($image_picker == 9) {
            $fp_image_name = 'Back3.jpg';
            $fp_image_description = "Boy swimming backstroke";
        }
    }

    // $fp_image_name = 'ElizabethIIMem.png';
    // $fp_image_description = "Elizabeth II, 1926 - 2022";

    ?>

    <div class="front-page pt-0 mb-n3 <?= $fp_img ?>">
        <!--[if !IE]>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <div class="alert alert-danger"><strong>Unsupported Browser</strong><br>You're using an unsupported
                    browser and this website may not work properly with it. <a href="http://browsehappy.com/"
                                                                               target="_blank">Upgrade your browser
                        today</a> to better experience this site.</p></div>
                <hr>
            </div>
        </div><![endif]-->

        <?php if (!isset($_COOKIE['CLSASC_AutoLogin']) && !isset($_COOKIE['CLSASC_UserInformation'])) { ?>
            <img class="img-fluid img-fp" title="<?= $fp_image_description ?>."
                 src="https://chesterlestreetasc.co.uk/wp-content/themes/chester/img/stylish/<?= $fp_image_name ?>"
                 alt="<?= $fp_image_description ?>">
        <?php } ?>

        <div class="container">
            <div class="row mb-4">
                <div class="col-md-9">
                    <h1 class="mt-3">Welcome to Newcastle Swim Team</h1>
                </div>
            </div>
            <div class="mb-4">
                <h2 class="mb-4">Latest News</h2>
                <div class="news-grid">
                    <?php
                    $args = [
                        'numberposts' => 6,
                        'offset' => 0,
                        'category' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'include' => '',
                        'exclude' => '',
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'suppress_filters' => true
                    ];
                    /* post status, future, pending, private */
                    $recent_posts = wp_get_recent_posts($args, ARRAY_A);
                    foreach ($recent_posts as $recent) { ?>
                        <a href="<?= get_permalink($recent["ID"]) ?>" title="<?= $recent["post_title"] ?>">
                            <span class="title"><?= $recent["post_title"] ?></span>
                            <span class="category"><?= get_the_category($recent["ID"])[0]->name ?></span>
                        </a>
                    <?php }
                    wp_reset_query();
                    ?>
                </div>
            </div>

            <?php if (function_exists('eo_get_events')) { ?>
                <div class="mb-4">
                    <h2 class="mb-4">Upcoming Galas</h2>
                    <div class="news-grid">
                        <!--<a href="/competitions">Due to issues beyond our control, the list of upcoming galas is currently unavailable.</a>-->
                        <?php

                        $events = eo_get_events([
                            'numberposts' => 6,
                            'event_end_after' => date("Y-m-d"),
                            'group_events_by' => 'series',
                            'event-category' => 'galas'
                        ]);

                        foreach ($events as $event) {
                            $format = (eo_is_all_day($event->ID) ? 'j F' : 'H:i, j F');
                            ?>
                            <a href="<?= get_permalink($event->ID) ?>"
                               title="<?= get_the_title($event->ID) ?>, <?= eo_get_venue_name(eo_get_venue($event->ID)) ?>">
                                <div>
                                    <span class="title mb-0"><?= get_the_title($event->ID) ?></span>
                                    <span class="d-flex mb-3"><?= eo_get_venue_name(eo_get_venue($event->ID)) ?></span>
                                </div>
                                <?php
                                $output = "";
                                $start = eo_get_the_start($format, $event->ID, null, $event->occurrence_id);
                                $end = eo_get_the_end($format, $event->ID, null, $event->occurrence_id);
                                if ($start != $end) {
                                    $output = $start . " to " . $end;
                                } else {
                                    $output = $start;
                                } ?>
                                <span class="category"><?= $output ?></span>
                            </a>
                        <?php }
                        wp_reset_query();

                        ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <!--<div class="container"><div class="row front-page-content"></div></div>-->
    <?php get_footer();
} ?>