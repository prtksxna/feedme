<div class="trip">
<header class="entry-header">
	<h1><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h1>
	<div class="entry-meta">
		<a href="<?php echo the_permalink() ?>">
			<?php the_date() ?> at
			<?php the_time('F j Y') ?>
		</a>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="trip_plan" data-geojson="<?php echo get_field( 'geojson' ) ?>"></div>

<div class="entry-content">
	<?php the_content(); ?>
</div>

</div>