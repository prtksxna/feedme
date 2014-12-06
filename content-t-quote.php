<div class="quote">

<div class="entry-meta">
	<footer>
		<a href="<?php echo the_permalink() ?>"><?php the_date() ?> at <?php the_time() ?></a>
	</footer>
</div>

<div class="entry-content"><?php the_content() ?></div>
<em><?php echo get_field( 'author' ) ?></em>


</div>