$( function () {
	$( '.trip_plan' ).each( function ( i ) {
		var $this = $( this );
		var geojson = $this.data( 'geojson' );
		console.log( geojson );
//		geojson = JSON.parse( geojson );

		var map = L.map( $this[0], {
			'scrollWheelZoom': false
		} );

		var layer = L.geoJson().addTo(map);
		layer.addData( geojson );

		map.fitBounds( layer );

		L.tileLayer(
			'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
			{ maxZoom: 18 }
		).addTo(map);


	} );
} );
