$( function () {
	$( '.checkin' ).each( function ( i ) {
		var $this = $( this );
		var lat = $this.data( 'lat' );
		var lon = $this.data( 'lon' );
		var $map = $this.find( '.map' )[0];
		var map = L.map( $map, {
			'scrollWheelZoom': false
		} ).setView( [ lat, lon ], 15 );

		L.tileLayer(
			'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
			{ maxZoom: 18 }
		).addTo(map);
	} );
} );
