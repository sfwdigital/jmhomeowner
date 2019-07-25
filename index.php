<?php
include 'includes/header.php';
include 'includes/session.php';
?>

<div id="insulationdata">
	<?php include 'intro.php'; ?>
</div>




<?php include 'includes/footer.php'; ?>
<script type="text/javascript">
	jQuery(function($) {


	$( "#getstarted" ).click(function() {
		$("#insulationdata").load( "menu.php" );
	});


		// $(document).ready(function(){
		// })

		$.fn.jminsulation = function() {
			var rvalue = $('#location-field').val();
			var project = $('#project-select option:selected').val();
			$.ajax({
				type: "POST",
				url: 'attic.php',
				data: ({rvalue: rvalue, project: project}),
				success: function(response){
					$("#insulationdata").html(response);
				}
			});
		}




	});
</script>
