<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="middleSidebar" class="widget-area span3">
			<div class="content">
				<?php if ( ! dynamic_sidebar( 'middle-sidebar' ) ) : ?>

					<aside id="archives" class="widget">
						<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget">
						<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</aside>

				<?php endif; // end sidebar widget area ?>
			</div>
		</div>
		<div id="rightSidebar" class="widget-area span2" role="complementary">
			<div class="content">
				<?php if ( ! dynamic_sidebar( 'third-sidebar' ) ) : ?>

					<aside id="archives" class="widget">
						<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget">
						<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</aside>

				<?php endif; // end sidebar widget area ?>
			</div>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>