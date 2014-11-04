<?php get_header(); ?>

<div class="content">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<? endwhile;
	else : ?>
		<h2>Sorry, no posts were found</h2>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
