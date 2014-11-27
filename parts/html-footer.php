	<?php wp_footer(); ?>

	<!-- Import JQuery and Bootstrap JS-->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/site.js"></script>

	<!-- Additional JS -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.sticky.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/easing.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.ui.totop.min.js"></script>
	
	<!-- Starting the ScrollToTop -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>

	</body>
</html>