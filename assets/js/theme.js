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
						{ 'address' : address_field}
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
