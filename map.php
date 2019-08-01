<link rel="stylesheet" href="findjm/leaflet-min.css"/>
<script src="findjm/leaflet.js"></script>
<link rel="stylesheet" href="findjm/LeafletStyleSheet-min.css"/>
<script src="findjm/PruneCluster.js"></script>
<script src="findjm/leaflet-providers.js"></script>


	<div class="location_search map-filter">
		<div class="grid-container">
			<div class="grid-x align-center align-middle map-filter-inputs">
				<div class="cell shrink text-center">
					<div class="input-group">
						<span id="zipcode">
							<!-- <input type="text" class="form-control" id="addressInput" placeholder="Enter Zip or City, State" name="location_search_zip"> -->
						</span>
						<span class="input-group-btn">
							<!-- <input type="submit" value="Find" id="searchButton" class="btn btn-default submit"> -->
						</span>
					</div>
				</div>
				<div class="cell shrink text-center">
					<div class="input-group">
						<!-- <select id="radiusSelect" class="miles-dropdown miles-locations">
							<option value="5">5 mi</option>
							<option value="10" selected="selected">10 mi</option>
							<option value="25">25 mi</option>
						</select> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- closes .site-content in header file -->
<div class="grid-container">

<div id="ajaxdata" class="locationarea">
	<div class="text-center"><h3>Loading</h3></div>
</div>
</div>
<?php include 'nav.php';	?>


<script src="js/jm-js.js"></script>

<script>

  jQuery(function($) {

			$(document).ready(function(){
				$.fn.locationfind();
	    });
			//
			// $( "#radiusSelect" ).change(function() {
			// 	$.fn.locationfind();
	    // });
			//
			// $("#searchButton").click(function(){
			// 	  $.fn.locationfind();
			//
			// });
			// var input = document.getElementById("addressInput");
			//
			// input.addEventListener("keyup", function(event) {
			//   if (event.keyCode === 13) {
			//     document.getElementById("searchButton").click();
			//   }
			// });

	    $.fn.locationfind = function() {
				var radius = $("#radiusSelect").val();
				var address = $("#addressInput").val();
				var lnglat = "<?php echo $ip_lnglat; ?>";
				var ip_zip_code = "<?php echo $ip_zip_code; ?>";
				console.log(ip_zip_code);
	      $.ajax({
	        type: "POST",
	        url: 'store_data.php',
					data: ({radius: radius, address: address, lnglat: lnglat, ip_zip_code: ip_zip_code}),
	        success: function(response){
	          $("#ajaxdata").html(response);
	        }
	      });
	    }

    });
  </script>
