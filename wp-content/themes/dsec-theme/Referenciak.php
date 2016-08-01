<?php
/**
 * Template Name: Referenciak
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php get_header(); ?>


<!-- Intro Section -->
        <section class="inner-intro overlay-dark light-color inner-intro-small">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Referenciák</h2>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Service Section -->
        <section id="referenciak" class="wow fadeIn pt pb-80">
            <div class="container text-center">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="spacer-15"></div>
                        <h3 class="lead">Alább, a teljesség igénye nélkül, találhatóak a már elégedett partnereink. Bízunk benne, hogy hamarosan Önt is elégedett ügyfeleink között köszönthetjük. Keressen minket bizalommal, hogy munka és tűzvédelmére ne legyen többé gondja.</h3>
						
<?php 
 
//Define your custom post type name in the arguments
 
$args = array('post_type' => 'dsec-referenciak', 'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1);
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );
 
//Display the contents
?>
<div class="row"> 

<?php
while ( $loop->have_posts() ) : $loop->the_post();
?>
 <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->

 <div class="entry-content referencia col-md-3 col-sm-4 mb-45">
<div class="referenciabox">
 <?php the_content(); ?>
</div>
 </div>
<?php endwhile;?>
</div>
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