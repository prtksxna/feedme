<?php $location = get_field('location'); ?>
<div class="checkin" data-lat="<?php echo $location['lat']; ?>" data-lon="<?php echo $location['lng']; ?>">
	<div class="map" id="map"></div>
	<h1><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h1>
	<footer>
		<a href="<?php echo the_permalink() ?>">
			<?php echo the_date() ?> at
			<?php echo the_time() ?>
		</a>
	</footer>
</div>