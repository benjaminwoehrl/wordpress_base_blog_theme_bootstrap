<?php get_header(); ?>

<div class="content">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
			<div class="row post_single">
				<div class="col-md-3">
					<div class="crop">
						<?php
						if ( has_post_thumbnail($r->ID)) {
							the_post_thumbnail('post-thumbnail', array('class' => 'post_thumbnail'));
						} else {
							echo '<img src="http://www.placehold.it/260x200" />';
						} ?>
					</div>
					<br>
					<p><?php the_date(); ?></p>
					<?php the_tags('<ul class="tag_list clearfix"><li>','</li><li>','</li></ul>'); ?>
					<br>
					<a href="/">[ << ]</a>
					<hr>
					<div class="row">
						<div class="col-md-5">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
						</div>
						<div class="col-md-7">
							<b><?php the_author_meta( 'nickname' ); ?></b>
							<p><?php the_author_meta('description'); ?></p>

							<a href="<?php the_author_meta( 'user_url' ); ?>">
								<span class="glyphicon glyphicon-globe"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h2>
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<p><?php the_content(); ?></p>
					<br>
					<?php comments_template( '', true ); ?>
				</div>
			</div>
		<? endwhile;
	else : ?>
		<h2>Sorry, no posts were found</h2>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
