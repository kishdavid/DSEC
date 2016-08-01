<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

		<section class="inner-intro overlay-dark light-color inner-intro-small">
		<div class="container">
			<div class="row title">
				<h2 class="h2"><?php _e( 'Hiba: 404', 'bootstrapcanvaswp' ); ?></h2>
			</div>
		</div>
	</section>
       
	<div class="clearfix"></div>
   
	   
	<section id="blog" class="ptb ptb-sm-80">
		<div class="container text-left">
			<div class="row text-left">

				<div class="col-lg-9 col-md-9">
					<div class="spacer-15"></div>
					<div class="row">
						<div class="col-md-12 blog-post-hr">
							<h3>
								<?php _e( 'A kívánt tartalom nem található. </br> Próbálja meg kereséssel!', 'bootstrapcanvaswp' ); ?></p>
							</h3>	
							<?php get_search_form(); ?>
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