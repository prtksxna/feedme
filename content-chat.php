<div class="chat">
<header class="entry-header">
	<h1><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h1>
	<div class="entry-meta">
		<a href="<?php echo the_permalink() ?>">
			<?php the_date() ?> at
			<?php the_time() ?>
		</a>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="entry-content">
	<?php the_content(); ?>
</div>

</div>