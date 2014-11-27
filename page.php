<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
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

<?php get_template_parts( array( 'parts/widgets' ) ); ?>

<?php get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>