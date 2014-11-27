<?php
/**
 * The Template for displaying all single posts
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

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php 
		get_template_part( 'parts/content', get_post_format() );
		comments_template( '', true ); 
		?>

<?php endwhile; ?>

</div><!-- .col -->

<div class="col col-md-4">
	<?php get_template_parts( array( 'parts/sidebar' ) ); ?>
</div><!-- .col -->

</div><!-- .row -->
</div><!-- .container -->

<?php get_template_parts( array( 'parts/widgets' ) ); ?>

<?php get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>