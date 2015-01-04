<div class="photo">
	<a href="<?php echo the_permalink() ?>">
		<img src="<?php echo get_field('image') ?>" alt="<?php echo the_title() ?>">
	</a>
	<h1><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h1>
	<footer>
		<a href="<?php echo the_permalink() ?>">
			<?php echo the_date() ?> at
			<?php echo the_time() ?>
		</a>
	</footer>
</div>