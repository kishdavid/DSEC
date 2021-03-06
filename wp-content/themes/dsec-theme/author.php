<?php
/**
 * Template for displaying Author Archive pages
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
	
      <div class="row">

        <div class="col-sm-8 blog-main">

          <h1><?php printf( __( 'Author Archives: %s', 'bootstrapcanvaswp' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
          <hr />
		  <?php get_template_part( 'loop', 'author' ); ?>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->
      
	<?php get_footer(); ?>