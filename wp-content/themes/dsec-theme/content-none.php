<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
        <div class="entry clearfix">
          <h2 class="center"><?php _e( 'Nincs találat', 'bootstrapcanvaswp' ); ?></h2>
          <p class="center">
          <p><?php _e( ''A kívánt tartalom nem található. </br> Próbálja meg kereséssel!'', 'bootstrapcanvaswp' ); ?></p>
		  <?php get_search_form(); ?>
        </div>
        