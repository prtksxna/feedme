<div class="post">
<header class="entry-header">
	<h1><a href="<?php echo the_permalink() ?> class="p-name u-url"><?php echo the_title() ?></a></h1>
	<div class="entry-meta">
		<a href="<?php echo the_permalink() ?>">
			<time datetime="<?php the_time( 'Y-m-d H:i' ) ?>" class="dt-published">
				<?php the_date() ?> at
				<?php the_time() ?>
			</time>
		</a>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="entry-content e-content">
	<?php the_content(); ?>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'feed' ),
			'after'  => '</div>',
		) );
	?>
</div><!-- .entry-content -->
</div>