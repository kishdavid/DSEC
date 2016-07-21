<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

	<section class="inner-intro overlay-dark light-color inner-intro-small">
		<div class="container">
			<div class="row title">
				<h2 class="h2">
				<?php 
					if ( is_day() ) : 
						printf( __( 'Napi Archívum: <span>%s</span>', 'bootstrapcanvaswp' ), get_the_date() ); 
					elseif ( is_month() ) : 
						printf( __( 'Havi Archívum: <span>%s</span>', 'bootstrapcanvaswp' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'bootstrapcanvaswp' ) ) ); 
					elseif ( is_year() ) : 
						printf( __( 'Évi Archívum: <span>%s</span>', 'bootstrapcanvaswp' ), get_the_date( _x( 'Y', 'yearly archives date format', 'bootstrapcanvaswp' ) ) );
					else : 
						_e( 'Blog Archív', 'bootstrapcanvaswp' ); 
					endif; 
				?>
		  </h2>
		</div>
		</div>
	</section>
       
	<div class="clearfix"></div>
archive	   
	
	<section id="blog" class="ptb ptb-sm-80">
		<div class="container text-left">
			<div class="row text-left">

				<div class="col-lg-9 col-md-9">
					<div class="spacer-15"></div>
					<div class="row">
						<div class="col-md-12 blog-post-hr">
							<?php get_template_part( 'loop', 'archive' ); ?>
						</div><!-- /.blog-main -->
					</div><!-- /.row -->
				</div>
				
				<div class="col-lg-3 col-md-3 mt-sm-60">
					<div class="sidebar-widget">
                            <?php
								if(is_active_sidebar('primary-widget-area')){
									dynamic_sidebar('primary-widget-area');
								}
							?>	
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