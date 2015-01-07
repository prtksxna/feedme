<?php $location = get_field('location'); ?>
<div class="checkin" data-lat="<?php echo $location['lat']; ?>" data-lon="<?php echo $location['lng']; ?>">
	<div class="map" id="map"></div>
	<h1>
		<a href="<?php echo the_permalink() ?>" class="p-name u-url"><?php echo the_title() ?></a>
		at
		<span class="p-location">
			<span class="h-card">
				<span class="p-name p-locality">
					<?php echo $location['address']; ?>
				</span>
				<span class="h-geo">
					<data class="p-latitude" value="<?php echo $location['lat']; ?>"></data>
					<data class="p-longitude" value="<?php echo $location['lng']; ?>"></data>
				</span>
			</span>
		</span>
	</h1>
	<br>
	<footer>
		<a href="<?php echo the_permalink() ?>">
			<time datetime="<?php the_time( 'Y-m-d H:i' ) ?>" class="dt-published">
				<?php echo the_date() ?> at
				<?php echo the_time() ?>
			</time>
		</a>
	</footer>
</div>