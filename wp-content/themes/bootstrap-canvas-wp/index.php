<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

	<section class="inner-intro overlay-dark light-color inner-intro-small">
		<div class="container">
			<div class="row title">
				<h2 class="h2"><?php echo($pagename); ?></h2>
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
						<div class="col-sm-8 blog-main">
							<?php get_template_part( 'loop', 'index' ); ?>
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