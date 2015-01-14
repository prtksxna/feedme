<div class="quote">

<div class="entry-meta">
	<footer>
		<a href="<?php echo the_permalink() ?>">
			<time datetime="<?php the_time( 'Y-m-d H:i' ) ?>" class="dt-published">
				<?php the_date() ?> at
				<?php the_time() ?>
			</time>
		</a>
	</footer>
</div>

<div class="entry-content e-content"><?php the_content() ?></div>
<em><?php echo get_field( 'author' ) ?></em>


</div>