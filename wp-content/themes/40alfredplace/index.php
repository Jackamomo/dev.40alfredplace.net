<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<div id="image-slide">
				<?php if (function_exists("easing_slider")){ easing_slider(); }; ?>
			</div>

		<div id="left-col">
			<div class="home-box" id="intro">
				<div class="inner">
					<?php
					$post_id = 1;
					$queried_post = get_post($post_id);
					// $content = $queried_post->post_excerpt;
					// $content = apply_filters('the_content', $content);
					// $content = str_replace(']]>', ']]&gt;', $content);
					$content = $queried_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					?>
					<h2><?php echo $queried_post->post_title; ?></h2>
					<?php echo $content; ?>
					
				</div>
			</div>
			
			<div class="home-box" id="find-us">
				<h2>Find Us</h2>
<iframe width="585" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=BS2+8HD&amp;aq=&amp;sll=51.454513,-2.58791&amp;sspn=0.322617,0.564423&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Bristol+BS2+8HD,+United+Kingdom&amp;ll=51.461122,-2.598625&amp;spn=0.00252,0.00441&amp;t=m&amp;z=14&amp;iwloc=near&addr&amp;output=embed"></iframe>			</div>
			
		<div class="container">
			<div class="home-box last" id="tweets">
				<div class="inner">
					<?php dynamic_sidebar( 'widget-area-home-right' ); ?>
					<a class="link" href="http://twitter.com/#!/40alfredplace">follow us on twitter &raquo;</a>
				</div>
			</div>
		
			<div class="home-box" id="latest">
				<div class="inner">
					<h2>Latest Blog Posts</h2>
					<?php
					$args = array( 'numberposts' => 3 );
					$lastposts = get_posts( $args );
					$content = apply_filters('the_content', $content);
					foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php echo '<li>'; ?>
						<?php // the_time('F jS, Y') ?>
						<!-- <h3><a href="<?php // the_permalink(); ?>"><?php // the_title(); ?></a></h3> -->
						<!-- <h4><?php // the_title(); ?></h4> -->
						<?php // the_excerpt(); ?>
						<?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,17); ?>...
						<?php // the_author() ?><br />
						<a href="<?php the_permalink() ?>">read more &raquo;</a>
						<?php echo '</li>'; ?>
					<?php endforeach; ?>
					<a class="link" href="/blog">blog &raquo;</a>
				</div>
			</div>
		</div> <!-- .container -->
			
		</div> <!-- #left-col -->
		
		<!-- <div style="width:960px;clear:both"></div> -->

		<div id="right-col">
			
			<div class="home-box" id="opening-times">
				<div class="inner">
					<?php mailchimpSF_signup_form(); ?>
					<!--<h2>The Cafe</h2>
					<a href="/cafe"><img src="/wp-content/themes/40alfredplace/images/opening-times.jpg" title="Open 8 - 4 Monday to Friday" /></a>
					-->
				</div>
			</div>
			
			<div class="home-box" id="banner">
				<div class="inner">
					<!-- <a href="http://40alfredplace.net/40alfredplaceevent/tfi-friday-bacon-bun-run/"><img src="/wp-content/themes/40alfredplace/images/BaconBunHome.png" title="Bacon Bun Run" /></a> -->
					<?php
						$post_id = 951; $queried_post = get_post($post_id);
						$content = $queried_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
					?>
					<?php echo $queried_post->post_content; ?>
				</div>
			</div>
			
			<div class="home-box" id="events">
				<div class="inner">
					<ul><?php dynamic_sidebar( 'widget-area-home-rightbar' ); ?></ul>
				</div>
			</div>
		</div><!-- #right-col -->
			
			</div><!-- #content -->
		</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>