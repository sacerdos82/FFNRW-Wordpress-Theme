<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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

	<div class="col col-md-8">
	
		<?php if ( have_posts() ): ?>	
	
		<ol class="list-unstyled">
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<?php get_template_part( 'parts/content', get_post_format() ); ?>
			</li>
			<?php endwhile; ?>
		</ol>
		
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-prev-next" class="navigation">
			<div class="nav-previous"><?php next_posts_link( __( '<i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp; ältere Beiträge' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Neuere Beiträge &nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i>' ) ); ?></div>
			</div><!-- #nav-below -->
		<?php endif; ?>
		
		<?php else: ?>
		<h2>Keine Artikel vorhanden.</h2>
		<?php endif; ?>
		
	</div><!-- .col -->

	<div class="col col-md-4">
		<?php get_template_parts( array( 'parts/sidebar' ) ); ?>
	</div><!-- .col -->

</div><!-- .row -->
</div><!-- .container -->

<?php get_template_parts( array( 'parts/widgets' ) ); ?>

<?php get_template_parts( array( 'parts/footer','parts/html-footer') ); ?>