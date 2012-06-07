<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<hr />
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<small><?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a></small>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-transition.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-alert.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-modal.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-tab.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-tooltip.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-popover.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-button.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-typeahead.js"></script>

</body>
</html>