<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<div id="primary">
<div id="content" role="main">

<?php // get_template_part( 'content', 'page' ); ?>

<!-- <h2>Recent Posts</h2> -->

<?php //query_posts('paged='.$paged);
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	$wp_query->query('showposts=5'.'&paged='.$paged);
?>
				
<!-- /* Start the Loop */ -->
<ul>
<?php while ( have_posts() ) : the_post(); ?>
	<li class="blog-list">
	<?php
		
		// Title
		echo '<h2><a href="';
		the_permalink();
		echo '">';
		the_title();
		echo '</a></h2>';
		
		// Content
		the_content();
		
		//footer tag
		echo '<div class="footer">';
		
		// date
		echo 'Posted on ';
		echo get_the_date();
		
		// category
		echo ' in ';
		the_category( ', ' );
		
		// author
		echo ' by ';
		the_author_link();
		echo '</a>';
		
		echo '</div>'

	?>
	<?php /*
		echo '<p><a href="';
		the_permalink();
		echo '">Read more &raquo;</a></p>';
	      */
	?>
	<div class="clearfix"></div>
	</li>

<?php endwhile; ?>
</ul>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<nav id="nav-below">
		<h1 class="section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'toolbox' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?></div>
	</nav><!-- #nav-below -->
<?php endif; ?>				

</div><!-- #content -->
		</div><!-- #primary -->

<div id="secondary" class="widget-area"><ul class="widgets"><?php dynamic_sidebar( 'widget-area-blog' ); ?></ul></div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>