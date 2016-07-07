<?php
/*
 Template Name: Ajanlatkeres
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */


get_header(); ?>

       <section class="inner-intro overlay-dark light-color inner-intro-small">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Ajánlatkérés</h2>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
<section id="ajanlatkeres" class="gray-bg ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="lead">Keressen minket, kérjen ajánlatot, hogy meg tudjuk Önnel közösen valósítani  cége magasszintű munkavédelmét és tűzvédelmét.</h3>
                <p>Az ajánlatadás az egyes tevékenységekre a következőképpen zajlik:  Ön megadja elérhetőségét, mi felvesszük Önnel a kapcsolatot és minden felmerülő kérdésére válaszolunk, miközben mi is megismerjük a munka jellegét, volumenét. A pontos és a lehető leggazdaságosabb ajánlathoz elengedhetetlen a terület és a tevékenység személyes megtekintése, így következő lépésben egy időpontot egyeztetünk Önnel, amikor pontosan felmérjük munka- és tűzvédelmi szempontból a cég üzemelését. Ezt követően írásban adunk árajánlatot az Ön specifikációira szabva. Szükség esetén az árajánlat minden pontját részletesen átbeszéljük, a felmerülő kérdéseket megválaszoljuk. Ezt követően nem marad hátra más minthogy véglegesítjük a közreműködői szerződést az Ön cégével, majd megkezdjük a közös munkát, hogy biztonságos, nyugodt munka körülményt biztosíthassunk Önnek és munkatársainak.</p>
            </div>
        </div>
        <div class="spacer-75"></div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <!-- Contact FORM -->
					<?php echo do_shortcode( '[contact-form-7 id="40" title="1 kapcsolati űrlap"]' ); ?>
                <!-- END Contact FORM -->
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>