<?php if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">
	<?php
	$args = array(
		'id_form'           => 'commentform',
		'id_submit'         => 'submit',
		'title_reply'       => __( 'Leave a Reply' ),
		'title_reply_to'    => __( 'Leave a Reply to %s' ),
		'cancel_reply_link' => __( 'Cancel Reply' ),
		'label_submit'      => __( 'Post Comment' ),

		'comment_field' =>  '<textarea id="comment" placeholder="message" name="comment" style="width: 100%;" rows="8" aria-required="true"></textarea>',

		'must_log_in' => '<p class="must-log-in">' .
		                 sprintf(
			                 __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
			                 wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
		                 ) . '</p>',

		'logged_in_as' => '<p class="logged-in-as">' .
		                  sprintf(
			                  __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
			                  admin_url( 'profile.php' ),
			                  $user_identity,
			                  wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
		                  ) . '</p>',

		'comment_notes_before' => '<p class="comment-notes">' .
		                          __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
		                          '</p>',

		'comment_notes_after' => '',

		'fields' => apply_filters( 'comment_form_default_fields', array(
				'author' =>
					'<input id="author" name="author" placeholder="author*" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' />',

				'email' =>
					'<input id="email" name="email" placeholder="email*" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' />',
			)
		),
	);
	?>
	<?php comment_form($args); ?>
	<br>
	<?php if ( have_comments() ) : ?>
		<ul class="commentlist">
			<?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
		</ul><!-- .commentlist -->
		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>
	<?php endif; ?>
</div><!-- #comments .comments-area -->
