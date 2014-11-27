<header>
	
	<?php
		if( ( is_single() || is_page() ) && has_post_thumbnail() ) {
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			$style 	= 'style="background-image: url(\''.$image_url[0].'\');"';
		}
		else {
			$headerImageURL = get_header_image();
			$style = 'style="background-image: url(\''.$headerImageURL.'\');"';
		}
	?>

	<div id="headerImageArea" <?php echo $style; ?>>
	
		<div id="navigation-container">
		
			<div id="information-top" class="hidden-xs">
				<div class="container"><div class="row"><div class="col col-md-12">
					
					<div class="pull-left contact">

						<?php wp_nav_menu( array( 	'theme_location' 	=> 'headerContact',
													'container'			=> 'nav',
													'depth'				=> 1) ); ?>
					</div><!-- .contact -->
					
					<div class="pull-right social">
						<?php wp_nav_menu( array( 	'theme_location' 	=> 'headerSocial',
													'container'			=> 'nav',
													'items_wrap' 		=> '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
													'depth'				=> 1) ); ?>
					</div><!-- .social -->
					
				</div></div></div>
			</div><!-- #information-top -->
		
			<div id="navigation-top" class="hidden-xs">
				<div class="container"><div class="row">
				
				<div class="col col-md-12">
				
					<?php wp_nav_menu( array( 	'theme_location' 	=> 'headerNavigation',
												'container'			=> 'nav',
												'container_class'  	=> 'navbar-inverse navbar-static-top',
												'items_wrap' 		=> '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
												'depth'				=> 2,
												'walker'            => new wp_bootstrap_navwalker() ) ); ?>
					
				</div><!-- col-md-12 hidden-xs -->
				
				</div></div>
			</div><!-- #naviagation-top -->
			
			<div id="navigation-top-xs" class="container visible-xs">
				<div class="row">
				
				<div class="col col-xs-12">
				
					<?php
						 
						wp_nav_menu( array( 	'theme_location' 	=> 'headerNavigation',
												'container'			=> 'nav',
												'container_class'  	=> 'navbar navbar-inverse navbar-fixed-top',
												'items_wrap' 		=> '<div class="navbar-header">
																			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
																				<span class="sr-only">Toggle navigation</span>
																				<span class="icon-bar"></span>
																				<span class="icon-bar"></span>
																				<span class="icon-bar"></span>
																			</button>
																			<a class="navbar-brand" href="/">Freifunk</a>
																		</div><!-- #navbar-header -->
																		<div class="navbar-collapse collapse">
																			<ul id="%1$s" class="nav navbar-nav">%3$s</ul>
																		</div><!-- #navbar-collapse -->',
												'depth'				=> 2,
												'walker'            => new wp_bootstrap_navwalker() ) ); 
					
					?>
												
				</div><!-- col-xs-12 visible-xs -->
			
				</div><!-- #row -->
			</div><!-- #navigation-top-xs -->
		
		</div><!-- #navigation-container -->

		<div id="headerImageArea_top"></div>
		<div id="headerImageArea_overlay">
			
			<div id="headerSpan" class="container">
			<div class"row"
			
				<div id="blogTitle" class="col col-md-3 col-md-offset-1"><h1>
					<a href="<?php bloginfo( 'wpurl' ); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo-lev.png" alt="<?php bloginfo('name') ?>" />
					</a>
				</h1></div>
				
				<div id="blogDescription" class="col col-md-8">
					<?php wp_nav_menu( array( 	'theme_location' 	=> 'headerImageArea',
												'container'			=> 'nav',
												'depth'				=> 1) ); ?>
				</div>
			
			</div>
			</div>
		
		<div id="headerImageArea_bottom"></div>
		</div> <!-- #headerImageArea_overlay -->
	
	</div> <!-- #headerImageArea -->
		
</header>

<div id="content-container">