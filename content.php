<div class="row post_container">
	<div class="col-md-3">
		<div class="crop">
			<?php
				if ( has_post_thumbnail($r->ID)) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>_thumbnail">
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'post_thumbnail')); ?>
					</a>
				<?php } else { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>_thumbnail">
						<?php echo '<img src="http://www.placehold.it/260x200" />'; ?>
					</a>
				<?php } ?>
		</div>
	</div>
	<div class="col-md-9">
		<h2>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<p><?php the_excerpt(); ?> </p>
		<?php the_tags('<ul class="tag_list clearfix"><li>','</li><li>','</li></ul>'); ?>
	</div>
</div>
