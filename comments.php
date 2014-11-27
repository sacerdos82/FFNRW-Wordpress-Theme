<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to starkers_comment() which is
 * located in the functions.php file.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>Dieser Beitrag ist Passwort geschützt.</p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

	<h2><i class="fa fa-comments"></i>&nbsp; <?php comments_number(); ?></h2>

	<ol>
		<?php wp_list_comments( array( 'callback' => 'starkers_comment' ) ); ?>
	</ol>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p>Kommentare wurden deaktviert</p>
	
	<?php endif; ?>
 	
	<div class="form-horizontal">
	<?php
	
		$fields=  array(	'author' => 	'<div class="form-group comment-form-author">' .
											'<label for="author" class="control-label col-md-2">' . __( 'Name', 'domainreference' ) . '</label> ' .
											'<div class="col-md-10"><input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>' .
											'</div>',

							'email' =>      '<div class="form-group comment-form-email">' .
											'<label for="email" class="control-label col-md-2">' . __( 'Email', 'domainreference' ) . '</label> ' .
											'<div class="col-md-10"><input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>' . 
											'</div>',
											
							'url' =>		'<div class="form-group comment-form-url">' .
											'<label for="url" class="control-label col-md-2">' . __( 'Website', 'domainreference' ) . '</label>' . 
											'<div class="col-md-10"><input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>' . 
											'</div>' );
											
		$args = array( 	'fields' => 				apply_filters( 'comment_form_default_fields', $fields),
		
						'comment_field' => 			'<div class="form-group comment-form-comment">' . 
													'<label for="comment" class="control-label col-md-2">' . _x( 'Comment', 'noun' ) . '</label>' . 
													'<div class="col-md-10"><textarea class="form-control" id="comment" name="comment" rows="8" aria-required="true">' . '</textarea></div>' .
													'</div>',
											
						'comment_notes_before' => 	'<p class="comment-notes">' . __( 'Your email address will not be published.' ) . '</p>' );
						

		comment_form( $args );
		
	?>
	</div><!-- .form-horizontal -->

</div><!-- #comments -->
