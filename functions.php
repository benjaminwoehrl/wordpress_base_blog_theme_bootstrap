<?php

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form' ) );
	add_theme_support( 'post-formats', array( 'aside' ) );
}

function register_my_menus() {
	register_nav_menus( array(
		'header-nav' => 'Header Navigation',
		'footer-nav' => 'Footer Navigation',
		'link-nav' => 'Link Navigation',
	) );
}
add_action( 'init', 'register_my_menus' );


function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	$args['avatar_size'] = 55;
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
	?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body row">
	<?php endif; ?>
	<div class="comment-avatar col-md-1">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	</div>

	<div class="col-md-11">
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<p class="text-danger"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
		<?php endif; ?>
		<?php printf( __( '<b>%s</b>'), get_comment_author_link() ); ?>
		<br><br>
		<?php comment_text(); ?>
		<br>
		<hr>
		<div class="comment-meta commentmetadata">
			<?php
			printf( __('%1$s'), get_comment_date()); ?>
			<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>

	<div class="reply">

	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
<?php
}
