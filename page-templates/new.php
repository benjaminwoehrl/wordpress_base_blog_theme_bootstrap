<?php
/*
Template Name: New
*/
?>

<?php get_header(); ?>

	<div class="content">
		<h2>Latest posts</h2>
		<?php
			if ( have_posts() ):
				$posts = get_posts('');

				foreach($posts as $post) :
					setup_postdata($post);
				?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endforeach; wp_reset_postdata(); ?>
			<?php else : ?>
				<h2>Sorry, no posts were found</h2>
			<?php endif; ?>
	</div>

<?php get_footer(); ?>
