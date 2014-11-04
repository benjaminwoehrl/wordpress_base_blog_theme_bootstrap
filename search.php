<?php get_header(); ?>

<div class="content">

	<?php
	if ( have_posts() ) : ?>
		<h2>Search Results for: <?php echo get_search_query(); ?></h2>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<? endwhile;
	else : ?>
		<h2>Noting found for: <?php echo get_search_query(); ?></h2>
	<?php endif; ?>
</div>

<?php get_footer(); ?>


