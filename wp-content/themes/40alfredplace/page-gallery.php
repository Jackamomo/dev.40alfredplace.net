<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>
<div id="left-bar">
	&nbsp;
</div>

		<div id="primary">
			<div id="content" role="main">
		
				

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<div id="right-bar">&nbsp;</div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>