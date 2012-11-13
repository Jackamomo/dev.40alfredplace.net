<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

	</div><!-- #main -->

</div><!-- #page -->

	<footer id="colophon" role="contentinfo">
		
		<div id="foot-container">
		
				<div class="column">All content &copy; 40 Alfred Place <?php date(Y) ?>
				<br />
				<br />
				
				<div id="fb-root"></div>
					
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) {return;}
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				</script>
		
				<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="lucida grande"></div>
				</br />
				</br />
				<!-- Place this tag where you want the +1 button to render -->
				<g:plusone size="medium"></g:plusone>
				
				<!-- Place this render call where appropriate -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
		
				</div>
				<div class="column">
				    <ul>
				       <li><a href="/calendar/">Events Calendar</a></li>
				       <li><a href="/blog/">Blog</a></li>
				       <li><a href="/gallery/">Gallery</a></li>
				       <li><a href="/rates/">Rates</a></li>
				       <li><a href="/contact/">Contact</a></li>
				    </ul>
				</div>
				<div class="column last">
						<p>40 alfred place<br />Kingsdown<br />Bristol<br /><a href="/find-us/" title="Find Us">BS2 8HD</a><br />0117 944 3060</p>
						<a href="http://www.designmesh.co.uk" title="Site by Design Mesh" alt="Design Mesh" class="dm">Design Mesh</a>
				</div>
		
				<!-- <p class="foot"><span class="wordpress"><a href="http://wordpress.com">Wordpress</a></span> Theme by <a class="logo" title="Design Mesh" href="http://designmesh.co.uk"><span class="dm">DM</span></a></p> -->

		</div><!-- #foot-container -->
		
	</footer><!-- #colophon -->
</div><!-- #wrap -->

<?php wp_footer(); ?>


<!-- cufon -->
<script src="cufon-yui.js" type="text/javascript"></script>
<script src="Dharma_Slab.font.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('h2'); // Works without a selector engine
	Cufon.replace('#intro h2'); // Requires a selector engine for IE 6-7, see above
	Cufon.replace('h3');
</script>

</body>
</html>