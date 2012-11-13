<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div id="primary">
		<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php  ?>

				<?php endwhile; ?>


<?php

// The Query
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
	
	echo '<li>';
	
	echo '<h2><a href="';
	the_permalink();
	echo '">';
	the_title();
	echo '</a></h2>';

	the_excerpt();
	
	echo '<a href="';
	the_permalink();
	echo '">Read more &raquo;</a>';
	
	echo '</li>';

endwhile;

// Reset Query
wp_reset_query();

?>



<?php next_posts_link(); ?>

</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>