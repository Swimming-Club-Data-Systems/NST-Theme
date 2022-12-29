<?php

$file = null;
$cache_file = get_template_directory() . '/cache/SE-News.json';
if(file_exists($cache_file)) {
if(time() - filemtime($cache_file) > 10800) {
    // too old , re-fetch
    $cache = file_get_contents('https://www.swimming.org/sport/wp-json/wp/v2/posts');
    file_put_contents($cache_file, $cache);
    $file = $cache;
  } else {
    $file = file_get_contents($cache_file);
  }
} else {
  // no cache, create one
  $cache = file_get_contents('https://www.swimming.org/sport/wp-json/wp/v2/posts');
  file_put_contents($cache_file, $cache);
  $file = $cache;
}
$asa = json_decode($file);

$file = null;
$cache_file = get_template_directory() . '/cache/SE-NE.xml';
if (file_exists($cache_file)) {
  if (time() - filemtime($cache_file) > 10800) {
    // too old , re-fetch
    $cache = file_get_contents('http://asaner.org.uk/feed/');
    file_put_contents($cache_file, $cache);
    $file = $cache;
  } else {
    $file = file_get_contents($cache_file);
  }
} else {
  // no cache, create one
  $cache = file_get_contents('http://asaner.org.uk/feed/');
  file_put_contents($cache_file, $cache);
  $file = $cache;
}
$asa_ne = null;
try {
  $asa_ne = new SimpleXMLElement($file);
} catch (Exception $e) {
}

// Code to automatically switch to/from gala home
$td = current_time("Y-m-d", $gmt = 0);
if ("2020-01-20" == $td || "2020-01-25" == $td || "2020-01-26" == $td) {
  include "page-galahome.burnsmeet.php";
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

<div class="front-page pt-0 mb-n3 <?=$fp_img?>">
  <!--[if !IE]>
  <div class="row"><div class="col-md-12"><hr><div class="alert alert-danger"><strong>Unsupported Browser</strong><br>You're using an unsupported browser and this website may not work properly with it. <a  href="http://browsehappy.com/" target="_blank">Upgrade your browser today</a> to better experience this site.</p></div><hr></div></div><![endif]-->

  <div class="bg-dark py-0">
    <div class="container">
      <div class="row mb-4 text-white">
  			<div class="col-md-9">

          <h1 class="mt-3 sr-only">Chester-le-Street Junor Meet 2022</h1>
          <!--<img src="/wp-content/themes/chester/img/openmeet/OpenMeet2022WhiteWeb.svg" class="my-4 d-block" style="height:3.0rem;">-->
          <p class="mt-4 mb-0"><strong>Tweet about today</strong> Use <a href="https://twitter.com/search?q=%23CLSOpenMeet" target="_blank" class="text-white">#CLSJuniorMeet</a></p>

        </div>
      </div>

      <div class="row pb-4 mb-4">
        <div class="col">

          <div class="news-grid">
            <a target="_blank" href="https://www.foxsgalatimings.co.uk/onlineresults/CJMeet22/">
              <span class="title"><span class="spinner-grow spinner-grow-sm live" aria-hidden="true"></span> Live Results</span>
              <span class="category">SPORTSYSTEMS</span>
            </a>

            <!--<a href="/downloads/galas/junior-meet-2019" target="_blank">
              <span class="title">Gala Results</span>
              <span class="category">SPORTSYSTEMS</span>
            </a>-->

            <!--<a href="https://chesterlestreetasc.co.uk/downloads/galas/online-programmes/open-meet-2022">
              <span class="title">Gala Programme</span>
              <span class="category">Online programme</span>
            </a>-->

            <!--<a href="/competitions/galas/chester-le-street-junior-meet-2018/">
              <span class="title">Latest Results</span>
              <span class="category ">Gala Results (<abbr title="PDF Files may be harder to view on mobile phones">PDF</abbr>)</span>
            </a>-->

            <a href="/competitions/galas/chester-le-street-junior-meet-2022/">
              <span class="title">Junior Meet Website</span>
              <span class="category ">Galas</span>
            </a>

            <!-- <a href="/galahome/parkingcharges/">
              <span class="title">Car Parking at Chester-le-Street</span>
              <span class="category ">Help and Support</span>
            </a> -->

            <a href="https://chesterlestreetasc.myswimmingclub.uk/timeconverter">
              <span class="title">Online Swim Time Converter</span>
              <span class="category ">Convert between short course and long course</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <!--<div class="pt-4">
      <div class="alert alert-warning mb-0">
        <p class="mb-0"><strong>Notice</strong></p>
        <p class="mb-0">The warmup for the Tynemouth Gala this afternoon has changed to 13:00</p>
      </div>
    </div>-->
    <div class="row mb-4">
			<div class="col-md-9">
        <?php if (!isset($_COOKIE['CLSASC_AutoLogin']) && !isset($_COOKIE['CLSASC_UserInformation'])) { ?>
        <h1>Welcome to Chester&#8209;le&#8209;Street ASC</h1>
        <p class="lead">We're an Amateur Swimming Club offering the opportunity to participate in swimming as a competitive sport.</p>
        <p>Established in 1975, we've grown in size and stature over the years, boasting tremendously talented young athletes who have achieved significant success at the local, national and international level.</p>
        <p class="mb-0">Why not join us for your journey through swimming?</p>
        <?php } else {
          if (isset($_COOKIE['CLSASC_UserInformation'])) {
            $user = json_decode(stripcslashes($_COOKIE['CLSASC_UserInformation']));
            $forename = $user->Forename;
            if (isset($_SESSION['CLSASC_UserInformation-Forename'])) {
              $forename = $_SESSION['CLSASC_UserInformation-Forename'];
            } else {
              $_SESSION['CLSASC_UserInformation-Forename'] = $forename;
            } ?>
            <h1>Hello <?=htmlspecialchars($forename)?></h1>
            <p class="lead mb-0">Here's the latest from our club</p>
          <?php } else { ?>
            <h1 class="mt-3">Welcome to Chester&#8209;le&#8209;Street ASC</h1>
            <p class="lead mb-0">Here's the latest from our club</p>
          <?php }
        } ?>
			</div>
    </div>
    <!--
    <div class="mb-4">
      <h2 class="mb-4">Membership Renewal for 2019 is open until 24 January</h2>
      <div class="news-grid">
        <a href="https://account.chesterlestreetasc.co.uk/renewal" target="_blank">
          <span class="mb-3">
            <span class="title mb-0">
              Complete membership renewal online
            </span>
          </span>
          <span class="category">
            Renewal
          </span>
        </a>
        <a href="https://www.chesterlestreetasc.co.uk/support/membershiprenewal/completing-your-membership-renewal/">
          <span class="mb-3">
            <span class="title mb-0">
              Help with membership renewal
            </span>
          </span>
          <span class="category">
            Help and Support
          </span>
        </a>
        <a href="https://www.chesterlestreetasc.co.uk/support/directdebit/">
          <span class="mb-3">
            <span class="title mb-0">
              Learn more about Direct Debits
            </span>
          </span>
          <span class="category">
            Payments
          </span>
        </a>
      </div>
    </div>-->
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
        	'meta_value' =>'',
        	'post_type' => 'post',
        	'post_status' => 'publish',
        	'suppress_filters' => true
        ];
        /* post status, future, pending, private */
        $recent_posts = wp_get_recent_posts($args, ARRAY_A);
      	foreach($recent_posts as $recent) { ?>
      	<a href="<?=get_permalink($recent["ID"])?>" title="<?=$recent["post_title"]?>">
          <span class="title"><?=$recent["post_title"]?></span>
          <span class="category"><?=get_the_category($recent["ID"])[0]->name?></span>
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
				  'numberposts'       => 6,
				  'event_end_after'   => date("Y-m-d"),
          'group_events_by'   => 'series',
          'event-category'    => 'galas'
				]);

      	foreach($events as $event) {
          $format = (eo_is_all_day($event->ID) ? 'j F' :  'H:i, j F');
          ?>
      	<a href="<?=get_permalink($event->ID)?>" title="<?=get_the_title($event->ID)?>, <?=eo_get_venue_name(eo_get_venue($event->ID))?>">
          <div>
            <span class="title mb-0"><?=get_the_title($event->ID)?></span>
            <span class="d-flex mb-3"><?=eo_get_venue_name(eo_get_venue($event->ID))?></span>
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
          <span class="category"><?=$output?></span>
        </a>
      	<?php }
      	wp_reset_query();

        ?>
			</div>
		</div>
    <?php } ?>

    <?php if ($asa != null && $asa != "") { ?>
    <div class="mb-4">
      <h2 class="mb-4">Swim England News</h2>
      <div class="news-grid">
        <?php
        $site = get_site_url();
        $max_posts = 6;
        if (sizeof($asa) < $max_posts) {
          $max_posts = sizeof($asa);
        }
        for ($i = 0; $i < $max_posts; $i++) { ?>
  			<a href="<?=$asa[$i]->link?>" target="_blank" title="<?=$asa[$i]->title->rendered?>">
  				<span class="mb-3">
            <span class="title mb-0">
  						<?=$asa[$i]->title->rendered?>
  					</span>
  				</span>
          <span class="category">
  					News
  				</span>
        </a>
        <?php } ?>
  		</div>
  	</div>
    <?php } ?>

    <?php if ($asa_ne != null) { ?>
    <div class="mb-4">
      <h2 class="mb-4">Swim England North East News</h2>
      <div class="news-grid">
        <?php
        $max_posts = 6;
        if (sizeof($asa_ne->channel->item) < $max_posts) {
          $max_posts = sizeof($asa_ne->channel->item);
        }
        for ($i = 0; $i < $max_posts; $i++) { ?>
  			<a href="<?=$asa_ne->channel->item[$i]->link?>" target="_blank" title="<?=$asa_ne->channel->item[$i]->title?> (<?=$asa_ne->channel->item[$i]->category?>)">
  				<span class="mb-3">
            <span class="title mb-0">
  						<?=$asa_ne->channel->item[$i]->title?>
  					</span>
  				</span>
          <span class="category">
  					<?=$asa_ne->channel->item[$i]->category?>
  				</span>
        </a>
        <?php } ?>
  		</div>
  	</div>
    <?php } ?>

    <div class="mb-4">
      <h2 class="mb-4">Help and Support</h2>
      <div class="news-grid">
        <a href="https://www.chesterlestreetasc.co.uk/support/website/">
          <span class="mb-3">
            <span class="title mb-0">
              Website Help
            </span>
          </span>
          <span class="category">
            Support
          </span>
        </a>
        <a href="https://www.chesterlestreetasc.co.uk/support/onlinemembership/">
          <span class="mb-3">
            <span class="title mb-0">
              Online Membership Help
            </span>
          </span>
          <span class="category">
            Support
          </span>
        </a>
        <a href="https://www.chesterlestreetasc.co.uk/support/">
          <span class="mb-3">
            <span class="title mb-0">
              More Help and Support
            </span>
          </span>
          <span class="category">
            Support
          </span>
        </a>
      </div>
    </div>
   

  </div>
</div>

<!--<div class="container"><div class="row front-page-content"></div></div>-->
<?php get_footer();
}?>
