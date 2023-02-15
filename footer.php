<?php
global $wp;
$current_url = urlencode(home_url(add_query_arg(array(), $wp->request)));
?>
<footer>
    <!--    <div class="cls-global-footer cls-global-footer-sponsors d-print-none">-->
    <!--        <div class="container">-->
    <!--            <div class="row align-items-center text-center justify-content-center">-->
    <!--                <div class="col-xs-12 col-sm-6 col-md-4 col-lg">-->
    <!--                    <a href="http://www.gblf.co.uk" target="_blank"><img class="img-responsive sponsor center-block"-->
    <!--                                                                         src="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/gblf.png"-->
    <!--                                                                         srcset="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/gblf@2x.png 2x, https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/gblf@3x.png 3x"-->
    <!--                                                                         alt="Gordon Brown Law Firm Logo"/></a>-->
    <!--                </div>-->
    <!--                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">-->
    <!--                  <a href="http://www.wssrecruitment.co.uk" target="_blank"><img class="img-responsive sponsor center-block" src="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/wss.png" srcset="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/wss@2x.png 2x, https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/wss@3x.png 3x" alt="WSS Recruitment Logo" /></a>-->
    <!--                </div>-->
    <!--                <div class="clearfix visible-sm"></div>-->
    <!--                <div class="col-xs-12 col-sm-6 col-md-4 col-lg">-->
    <!--                    <a href="http://www.nessswimwear.co.uk" target="_blank"><img-->
    <!--                                class="img-responsive sponsor center-block"-->
    <!--                                src="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/ness.png"-->
    <!--                                srcset="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/ness@2x.png 2x, https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/ness@3x.png 3x"-->
    <!--                                alt="NESS Swimwear Logo"/></a>-->
    <!--                </div>-->
    <!--                <div class="clearfix visible-sm"></div>-->
    <!--                <div class="col-xs-12 col-sm-6 col-md-4 col-lg">-->
    <!--                    <a href="http://www.michaelenglishroofing.com" target="_blank"><img-->
    <!--                                class="img-responsive sponsor center-block"-->
    <!--                                src="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/menglish.png"-->
    <!--                                srcset="https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/menglish@2x.png 2x, https://static.chesterlestreetasc.co.uk/global/img/sponsors/white/menglish@3x.png 3x"-->
    <!--                                alt="Michael English Roofing Logo"/></a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <div class="cls-global-footer cls-global-footer-inverse cls-global-footer-body d-print-none focus-highlight pb-0">
        <div class="container">
            <div class="hidden-print">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <address>
                                    <strong>Newcastle Swim Team</strong><br>
                                    Hadrian Square<br>
                                    Byker<br>
                                    Newcastle-upon-Tyne<br>
                                    NE6 1AL
                                </address>
                                <p><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> <a
                                            href="mailto:admin@newcastleswimteam.co.uk" target="new">E-Mail Us</a>
                                </p>
                                <p><i class="fa fa-flag fa-fw" aria-hidden="true"></i> <a
                                            href="https://membership.newcastleswimteam.co.uk/report-an-issue?url=<?= $current_url ?>">Report
                                        an issue with this page</a></p>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul class="list-unstyled cls-global-footer-link-spacer">
                                    <li><strong>Key Information</strong></li>
                                    <li><a target="_self" href="https://membership.newcastleswimteam.co.uk/privacy">Privacy
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <!--<ul class="list-unstyled cls-global-footer-link-spacer">
                                  <li><strong>Downloads</strong></li>
                                  <li><i class="fa fa-file-pdf-o fa-fw"></i> <a title="Entry Form" target="_blank" href="http://www.chesterlestreetasc.co.uk/wp-content/uploads/2016/06/GalaEntryForm.pdf">Gala Entry Form</a></li>
                                  <li><i class="fa fa-file-pdf-o fa-fw"></i> <a title="Order Form" target="_blank" href="http://www.chesterlestreetasc.co.uk/wp-content/uploads/2016/06/ClothingOrderFormChild.pdf">Children's Kit Order Form</a></li>
                                  <li><i class="fa fa-file-pdf-o fa-fw"></i> <a title="Order Form" target="_blank" href="http://www.chesterlestreetasc.co.uk/wp-content/uploads/2016/06/ClothingOrderFormAdult.pdf">Adult Kit Order Form</a></li>
                                </ul>-->
                                <ul class="list-unstyled cls-global-footer-link-spacer">
                                    <li><strong>Social Media and More</strong></li>
                                    <li><i class="fa-brands fa-twitter fa-fw" aria-hidden="true"></i> <a
                                                title="Newcastle Swim Team on Twitter" target="_blank"
                                                href="https://twitter.com/NCL_SwimTeam">Twitter</a></li>
                                    <li><i class="fa fa-rss fa-fw" aria-hidden="true"></i> <a
                                                title="Stay up to date with RSS" target="_blank"
                                                href="/feed">RSS Feeds</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul class="list-unstyled cls-global-footer-link-spacer">
                                    <li><strong>Related Sites</strong></li>
                                    <li><a title="British Swimming" target="_blank"
                                           href="http://www.swimming.org/britishswimming/">British Swimming</a></li>
                                    <li><a title="the Amateur Swimming Association" target="_blank"
                                           href="http://www.swimming.org/swimengland/">Swim England</a></li>
                                    <li><a title="Swim England North East Region" target="_blank"
                                           href="http://asaner.org.uk/">Swim England North East</a></li>
                                    <li><a title="Northumberland and Durham Swimming" target="_blank"
                                           href="http://asaner.org.uk/northumberland-durham-swimming-association/">Northumberland
                                            &amp; Durham Swimming</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cls-global-footer-legal">
        <div class="container">
            <div class="row">
                <div class="col source-org vcard copyright">
                    <p class="mb-0" style="margin-bottom:0">&copy; <?php echo current_time("Y", $gmt = 0); ?> <span
                                class="org fn">Newcastle Swim Team</span>. NST is not responsible for
                        the content of external sites. Design Copyright <a class="text-white"
                                                                           href="https://myswimmingclub.uk/"
                                                                           target="_blank">Swimming Club Data
                            Systems</a> 2023</p>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
    <?php $theme_dir = get_template_directory_uri(); ?>
    <?php if ($_SERVER['HTTP_HOST'] == 'localhost') { ?>
        <!-- if development -->
        <script type="module" src="http://localhost:5173/@vite/client"></script>
        <script type="module" src="http://localhost:5173/js/main.js"></script>
    <?php } else { ?>
        <script type="module" src="<?= htmlspecialchars($theme_dir . "/dist/assets/main-ebb66399.js") ?>"></script>
    <?php } ?>
</footer>
</body>
</html>
