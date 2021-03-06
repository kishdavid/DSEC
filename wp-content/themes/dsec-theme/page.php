<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

	<section class="inner-intro overlay-dark light-color inner-intro-small">
		<div class="container">
			<div class="row title">
				<h2 class="h2"><?php echo(the_title()); ?></h2>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>
	
	<section id="blog" class="wow fadeIn pt pb-80">
		<div class="container text-left">
			<div class="row text-left">
				<div class="col-md-12">
					<div class="spacer-15"></div>
					<div class="row">
						<div class="col-sm-12 blog-main">
							 <?php get_template_part( 'loop', 'page' ); ?>
						</div><!-- /.blog-main -->
					</div><!-- /.row -->
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