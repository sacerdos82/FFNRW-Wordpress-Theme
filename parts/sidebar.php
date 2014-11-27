<section id="sidebar">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
	<!-- Standard-Sidebar, wenn keine Widgets vorhanden sind -->
	<?php endif; ?>

</section>