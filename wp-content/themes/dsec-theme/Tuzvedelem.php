<?php
/*
 Template Name: Tuzvedelem
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */


get_header(); ?>

<!-- Intro Section -->
        <section class="inner-intro overlay-dark light-color inner-intro-small">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">TŰZVÉDELEM</h2>
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
                        <h3 class="lead">Rengeteg tűzvédelmi előírásnak kell megfelelni a munkáltatónak, a gazdasági társaságnak és munkavállalónak egyaránt. Ezen tűzvédelmi előírások között kiigazodni viszonylag nehéz, amit nem kell az embernek egyedül megoldania.</h3>
                        <p>Hány tűzoltó készüléket kell a telephelyemen készenlétben tartani? Milyen sűrűséggel és kinek kell azt felülvizsgálni? A hol és hogyan tárolhatja a cég működéséhez szükséges eszközöket, hogy a biztonság szintje ne csökkenjen? Mit kell jól látható módon megjelölni? Mikor és miből kell oktatni a munkavállalókat? Bejelentkezett a hatóság egy ellenőrzésre, ilyen esetben mivel kell készülni az ellenőrzésre? Hogyan lehet megelőzni a hatóság által kiszabható bírságot? Hogyan lehet hatékonyabb az üzemeltetés tűzvédelem szempontjából? Kötelező-e tűzvédelmi szolgáltatót alkalmazni? Milyen dokumentációval kell rendelkezni? Szükséges-e gyakoroltatni a leírt megelőző intézkedéseket? Milyen ellenőrzéseket kell végrehajtani?</p>
                        <p>Többek között ezek a kérdések, amik egy vállalkozás élete során egyszer biztosan felmerülnek a vezetőség fejében. Lehetséges, hogy nincs is idő többre minthogy egyszer felmerüljenek, majd ezek fontosságát megkérdőjelezve halogatni kezdik a napi rutinba való beillesztését. Viszont a hamis biztonságérzet veszélyesebb és kevésbé kifizetődő, mint folyamatosan tájékozódni és a megelőzés jegyében ésszerűen és költséghatékonyan cselekedni.</p>
                        <p>A magasabb tűzbiztonság elérése érdekében szeretnénk segíteni Megrendelőinknek. Amennyiben bármely kérdése felmerült vállalkozásának tűzvédelme kapcsán, vegye fel velünk a kapcsolatot, hogy mihamarabb segíteni tudjunk Önnek, és ne legyen több gondja ezekre a kérdésekre.</p>
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