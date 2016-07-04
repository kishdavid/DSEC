<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    <!--</div> /.container -->

<div id="footer-sidebar" class="secondary">
<div id="footer-sidebar1">
<?php
if(is_active_sidebar('first-footer-widget-area')){
dynamic_sidebar('first-footer-widget-area');
}
?>

<?php
if(is_active_sidebar('second-footer-widget-area')){
dynamic_sidebar('second-footer-widget-area');
}
?>

</div>
	
	<footer class="footer pt-80">
            <!-- Copyright Bar -->
            <section class="copyright pb-60">
                <div class="container">
                    <p class="">
                        © 2015 <b>D SAFETY ENGINEERING &amp; CONSULTING Kft.</b> Minden jog fenntartva.
                        <br>
                    </p>
                </div>
            </section>
            <!-- End Copyright Bar -->
    </footer>

    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
  </body>
</html>