<?php
/*
 Template Name: Ajanlatkeres
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */


get_header(); ?>

<!-- Intro Section -->
        <section class="inner-intro overlay-dark light-color inner-intro-small">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Ajánlatkérés</h2>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
		
<div class="spacer-75"></div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- Contact FORM -->
							<?php echo do_shortcode( '[contact-form-7 id="40" title="1 kapcsolati űrlap"]' ); ?>
                        <!-- END Contact FORM -->
                    </div>
                </div>

<?php get_footer(); ?>