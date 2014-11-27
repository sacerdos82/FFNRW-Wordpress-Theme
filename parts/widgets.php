<div id="widgets-container">
<div class="container">
<section id="widgets" class="row">

	<div class="col col-lg-2 visible-lg">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widgets Left') ) : ?>
		<!-- Standard-Sidebar, wenn keine Widgets vorhanden sind -->
		<?php endif; ?>
	</div><!-- .col -->

	<div class="col col-lg-4 col-md-6">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widgets Middle') ) : ?>
		<!-- Standard-Sidebar, wenn keine Widgets vorhanden sind -->
		<?php endif; ?>
	</div><!-- .col -->

	<div class="col col-lg-6 col-md-6">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widgets Right') ) : ?>
		<!-- Standard-Sidebar, wenn keine Widgets vorhanden sind -->
		<?php endif; ?>
	</div><!-- .col -->

</section><!-- #widgets .row -->
</div><!-- .container -->
</div><!-- #widgets-container -->