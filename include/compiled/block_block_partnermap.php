<?php if($partner['longlat']){?>
<style type="text/css">
.mapbody, .mapbody div{ overflow:visible}
</style>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=<?php echo $INI['system']['googlemap']; ?>" type="text/javascript"></script>

<script type="text/javascript">
window.x_init_hook_gmp = function() {
	X.misc.setgooglemap = function() {
		X.get(WEB_ROOT+'/ajax/system.php?id=<?php echo $partner['id']; ?>&action=googlemap');
	};
	
	function GShowMap() {
		if (GBrowserIsCompatible()) { 
		var map = new GMap2(document.getElementById("map_canvas")); 
		var latlng = new GLatLng(<?php echo $longi; ?>, <?php echo $lati; ?>);
		map.setCenter(latlng, 12); 
		map.addControl(new GLargeMapControl());
		map.enableGoogleBar();
		map.enableScrollWheelZoom();
		var point = new GMarker(latlng,{draggable:true});
		map.addOverlay(point);
	    GEvent.addListener(point, "dragend", function() {
			 latlng = point.getLatLng();
			  map.panTo(latlng);
		});
		GEvent.addListener(point, "dragend", X.misc.setgooglemappoint);
		GEvent.addListener(map, "click", X.misc.setgooglemapclick);
	} 
		}
	setTimeout(GShowMap,100);
};
</script>
<div class="mapbody map"><div id="map_canvas" style="width:684px;height:322px;"></div><a class="link" href="javascript:;" onclick="X.misc.setgooglemap();" title="点击查看完整地图"></a></div>
<?php }?>
