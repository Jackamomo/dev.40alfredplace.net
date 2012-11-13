<?php
global $spEvents;
$spEvents->loadDomainStylesScripts();
get_header();
?>
<div id="primary">
	<div id="tec-content" class="tec-event widecolumn events">
	<?php the_post(); global $post; ?>
			<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
				<h2 class="entry-title"><?php the_title() ?></h2>
				<!-- <a class="ical" href="<?php // bloginfo('home'); ?>/?ical=<?php // echo $post->ID; ?>"><?php // _e('iCal Import', $spEvents->pluginDomain) ?></a> -->
				<?php if (the_event_end_date() > time()  ) { ?><small><?php  _e('This event has passed.', $spEvents->pluginDomain) ?></small> <?php } ?>
				<?php if( get_post_meta( $post->ID, '_EventShowMap', true ) == 'true' ) : ?>
					<?php if( tec_address_exists( $post->ID ) ) event_google_map_embed(); ?>
				<?php endif; ?>
				<div class="entry">
					<?php the_content(); ?>	
					<?php if (function_exists('the_event_ticket_form')) { the_event_ticket_form(); } ?>		
				</div>
				<span class="back"><a href="<?php echo events_get_events_link(); ?>"><?php _e('&laquo; back to Events', $spEvents->pluginDomain); ?></a></span>
				<br /><br /><?php edit_post_link('Edit', '<span class="edit-link">', '</span>'); ?>
			</div><!-- post -->

		<?php if(eventsGetOptionValue('showComments','no') == 'yes'){ comments_template();} ?>

	</div><!-- tec-content -->
</div><!-- /#primary -->

<div id="secondary" class="widget-area"><ul class="widgets"><?php dynamic_sidebar( 'widget-area-blog' ); ?></ul></div>

<?php
	get_footer();