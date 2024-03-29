<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @subpackage Cheap Travel
 * @since      Cheap Travel 1.0
 */ ?>
</div> <!-- END .cheap-travel-site-main container -->
</div> <!-- END #main -->
<div class="cheap-travel-clear"></div>
<footer id="cheap_travel_colophon" class="cheap-travel-site-footer">
	<?php get_sidebar( 'footer' ); ?>
	<div class="cheap-travel-footer-background">
		<div class="cheap-travel-footer container">
			<div class="cheap-travel-footer-content col-lg-12">
				<div class="cheap-travel-site-info">
					<p>
						<label class="cheap-travel-date-info">&copy;&nbsp;<?php echo date( 'Y' ) . '&nbsp;';
							bloginfo( 'name' ); ?></label>
					
					</p>
				</div> <!-- END .cheap-travel-site-info -->
			</div> <!-- END .cheap-travel-footer-content -->
		</div> <!-- END .cheap-travel-footer -->
	</div>
</footer> <!-- END #cheap_travel_colophon -->
</div> <!-- END #page -->
<?php wp_footer(); ?>
</body>
</html>
