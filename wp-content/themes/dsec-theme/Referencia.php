<?php
/*
 Template Name: Referencia
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */


get_header(); ?>

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
        <section id="service" class="wow fadeIn pt pb-80">
            <div class="container text-center">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="spacer-15"></div>
                        <?php 
							
$page_id = 128; // 312 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
$page_data = get_page( $page_id ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. 

$content = $page_data->post_content; // Get Content
$title = $page_data->post_title; // Get title
echo $page_data->post_content; // Output Content, echo $page_data->[Page data field] (see above)

						?>
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