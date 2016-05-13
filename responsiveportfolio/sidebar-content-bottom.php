<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) && ! is_active_sidebar( 'sidebar-4' ) && ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}

$widget_areas = 0;

for ($i=0; $i < 6; $i++) { 
	# code...
	if( is_active_sidebar( 'sidebar-' . $i ) ) {
		$widget_areas = $widget_areas + 1;
	}
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<?php echo '<div class="widget-area widget-area-2 widget-areas-' . $widget_areas . '">' ?>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<?php echo '<div class="widget-area widget-area-3 widget-areas-' . $widget_areas . '">' ?>
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<?php echo '<div class="widget-area widget-area-4 widget-areas-' . $widget_areas . '">' ?>
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php echo '<div class="widget-area widget-area-5 widget-areas-' . $widget_areas . '">' ?>
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
