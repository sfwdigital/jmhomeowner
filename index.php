<?php

include 'includes/header.php';

?>

<link rel="stylesheet" href="findjm/leaflet-min.css" />
<script src="findjm/leaflet.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<div id="insulationdata">
	<?php include 'intro.php'; ?>
</div>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript">
	jQuery(function($) {

		$( "#getstarted" ).click(function() {
			$("#insulationdata").load( "menu.php" );
		});

		$( "#map-next" ).click(function() {
			$("#insulationdata").load( "map.php" );
		});

		$.fn.jminsulation = function(link, rvalue, project) {
			$.ajax({
				type: "POST",
				url: link,
				data: ({rvalue: rvalue, project: project}),
				success: function(response){
					$("#insulationdata").html(response);
				}
			});
		}

	});
</script>
