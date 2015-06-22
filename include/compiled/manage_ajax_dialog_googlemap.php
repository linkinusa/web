<div id="order-pay-dialog" class="order-pay-dialog-c" style="width:620px;">
	<h3><span id="order-pay-dialog-close" class="close" onclick="return X.boxClose();">关闭</span>谷歌地图坐标定位</h3>
	<div id="map_canvas" style="width:620px; height:420px"></div> 
</div>
<script>
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
</script>
