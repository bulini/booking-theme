jQuery(window).load(function(){
   jQuery('.flexslider').flexslider({
      animation: "fade",
      controlNav: "thumbnails",
      start: function(slider){
      jQuery('body').removeClass('loading');
        }
      });
 });
 
 
 		
jQuery(document).ready(function(){
	jQuery('.toggler').click(function(){
	jQuery('.gmappanel').removeClass('hide-map').addClass('show-map').css('height', '600');
	jQuery('.toggler').css('display', 'none');
	
	jQuery('.toggler-hide').css('display', 'block');
	address_field = jQuery('#map').attr("data-address");
	lat_field = jQuery('#map').attr("data-lat");
	lng_field = jQuery('#map').attr("data-lng");

	//alert(address_field);
			var jQuerymap = jQuery('#map');
			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(homeLatlng);
			});
			if( jQuerymap.length ) {
	
				jQuerymap.gMap({
					address: address_field,
					zoom: 14,
					markers: [
						{ 'latitude': lat_field, 'longitude': lng_field, 'html': '<h5>'+address_field+'</h5>'}
					]
				});
	
			}
	
	
	});
	jQuery('.toggler-hide').click(function(){
	jQuery('.gmappanel').removeClass('show-map').addClass('hide-map').css('height', '0');
	jQuery('.toggler').css('display', 'block');
	jQuery('.toggler-hide').css('display', 'none');
	});
});
