<?php
/*
 Template Name: FoglalkozasEgyeszsegugy
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */


get_header(); ?>

<!-- Intro Section -->
        <section class="inner-intro overlay-dark light-color inner-intro-small">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Foglalkozás egészségűgy</h2>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Service Section -->
        <section id="service" class="wow fadeIn pt pb-80">
            <div class="container text-center">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="spacer-15"></div>
                        <h3 class="lead">A jó munkának fontos alappillére a jó egészség, ebben nagy szerepe van a rendszeres egészségügyi állapot felmérésnek. A tudatos és egészséges életmód követése mellett, jogszabályi előírás is a dolgozók rendszeres foglalkozás egészségügyi orvosi vizsgálata.</h3>
                        <p>A vizsgálat során derül fény a dolgozó valós egészségügyi állapotára, ami fontos a munkavégzés, egészség megőrzés és foglalkozási megbetegség megelőzés szempontjából is. Nem beszélve arról, hogy ezen vizsgálatok eredménye alapján tudja eldönteni a munkáltató, hogy egy adott munka elvégzésére egészségügyileg alkalmas-e a munkavállaló.</p>
                        <p>Különböző foglalkozásokhoz, meghatározott vizsgálatokra van szükség, jogszabály által rögzített időközönként. Azt, hogy mit és pontosan mikor kell tenni Önnek, mint munkáltatónak, nem kell észben tartania, erre vagyunk mi.</p>
                        <p>Cégünk több magasan képzett orvossal dolgozik együtt annak érdekében, hogy gördülékennyé tegyük a rendszeres vizsgálatok menetét. Akár még arra is tudunk megoldást nyújtani, hogy a munka helyszínén történjenek az orvosi vizsgálatok, így spórolva az Önök idejével.</p>
                        <p>Cégünk a megfelelő időpontban értesíti Önt, hogy milyen vizsgálatokon kell megjelenniük a dolgozóknak és mikor. Így elkerülhető az, hogy mulasztások történjenek a határidők és vizsgálatok tekintetében.</p>
						<p>Annak érdekében, hogy egyedi személyre szabott ajánlatot és teljeskörű tájékoztatást tudjunk adni Önnek, kérem, keressen minket az alább megadott elérhetőségek bármelyikén.</p>
                    </div>
                </div>
            </div>
        </section>

<?php
if(is_active_sidebar('fourth-footer-widget-area')){
dynamic_sidebar('fourth-footer-widget-area');
}
?>	
<?php get_footer(); ?>