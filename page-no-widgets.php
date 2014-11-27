<?php
/*
Template Name: Keine Widgets
*/
?>

<?php get_template_parts( array( 'parts/html-header', 'parts/header' ) ); ?>

<div id="inner-container" class="container">
<div class="row">

	<div id="page-container" class="col col-md-8">
	
		<h2><i class="fa fa-file-o"></i><?php the_title(); ?></h2>

		<aside class="aside-meta">		
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
				<i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_time( 'd.m.Y' ); ?>
			</time>
		</aside>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	
	</div><!-- col -->
	
	<div class="col col-md-4">
		<?php get_template_parts( array( 'parts/sidebar' ) ); ?>
	</div><!-- .col -->

</div><!-- .row -->
</div><!-- .container -->

<?php get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>