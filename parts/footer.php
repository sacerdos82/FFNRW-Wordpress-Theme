</div><!-- #content-container -->

<div id="footer-container">
<div class="container">
<footer class="row">
	
	<div class="col col-md-12">
	
		<div class="pull-right social hidden-xs">
			<?php wp_nav_menu( array( 	'theme_location' 	=> 'footerSocial',
										'container'			=> 'nav',
										'items_wrap' 		=> '<ul id="%1$s">%3$s</ul>',
										'depth'				=> 1) ); ?>
		</div>
	
		<div class="pull-left menu-left">
		<?php wp_nav_menu( array( 	'theme_location' 	=> 'footerNavigation',
									'container'			=> 'nav',
									'items_wrap' 		=> '<ul id="%1$s">%3$s</ul>',
									'depth'				=> 1) ); ?>
		</div>
									
		<div id="copyright">
			Wordpress-Theme &copy <a href="https://freifunk-nrw.de">Verbund freier Netzwerke NRW e.V.</a>&nbsp;
			<a href="http://creativecommons.org/licenses/by-nc/4.0/">CC-BY-BC</a>
		</div>
									
	</div><!-- .col -->								
	
</footer><!-- .row -->
</div><!-- .container -->
</div><!-- #footer-container -->